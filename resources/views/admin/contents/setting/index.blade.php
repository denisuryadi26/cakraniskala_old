@extends('admin.layouts.main')
@section('title', 'Setting')

@section('stylesheet')
@endsection
@section('breadcumbs')
@include('admin.templates.breadcrumbs')
@endsection
@section('content')

<!-- <div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">{{$menu['breadcrumbs']->name}} Table</h3>
                @php
                $current_path = \Request::route()->getName();
                getPagesAccess($current_path);
                @endphp
            </div>
            <div class="table-responsive py-4">
                <table class="table table-flush table-hover" id="contentTable">
                    <thead class="thead-light">
                        <tr>
                            <th width="3%" class="text-center">No</th>
                            <th>Parameter</th>
                            <th>Type</th>
                            <th>Value</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                @php
                $current_path = \Request::route()->getName();
                getPagesAccess($current_path);
                @endphp
                <h4 class="card-title">{{$menu['breadcrumbs']->name}} Table</h4>

                <table id="contentTable" class="table table-bordered dt-responsive nowrap table-hover table-striped" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th width="3%" class="text-center">No</th>
                            <th>Parameter</th>
                            <th>Type</th>
                            <th>Value</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>


                    <tbody>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@include('admin.contents.setting._modal')
@endsection


@section('script')
<script type="text/javascript">
    var url = {
        detail: "{{route('dashboard_setting_detail')}}",
        delete: "{{route('dashboard_setting_delete')}}",
        submit: "{{route('dashboard_setting_post')}}",
        table: "{{route('dashboard_setting_table')}}"
    };
    var table;


    $(document).ready(function() {

        var CSRF_TOKEN = "{{@csrf_token()}}";
        table = $('#contentTable').on('init.dt', function() {
            $('div.dataTables_length select').removeClass(
                'custom-select custom-select-sm',
            );
        }).DataTable({
            language: {
                paginate: {
                    previous: "<i class='fas fa-angle-left'>",
                    next: "<i class='fas fa-angle-right'>"
                }
            },
            processing: true,
            serverSide: true,
            ajax: url.table,
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    title: '#',
                    width: '2%',
                    className: 'dt-center',
                },
                {
                    data: 'parameter',
                    name: 'parameter'
                },
                {
                    data: 'type',
                    name: 'type'
                },
                // {data: 'value', name: 'value'},
                {
                    data: "value",
                    className: 'dt-center',
                    "render": function(data, type, row) {
                        if (row.type == 'upload') {
                            let img = "{{asset('upload/')}}" + '/' + data;
                            return `<img src="${img}" class="img-thumbnail img-responsive" style="max-width: 150px; max-height: 150px" />`;
                        } else if (row.type == 'editor') {
                            return unescapeHTML(data);
                        } else {
                            return data;
                        }
                    }
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    className: 'text-center',
                    width: '15%'
                },
            ]
        });


        $(document).on('change', '#type', function(e) {
            var val = (CKEDITOR.instances.value) ? CKEDITOR.instances.value.getData() : $('#value').val();
            typeLogic($(this).val(), val);
        });



        $(document).on('click', '.view', function(e) {
            let id = $(this).data('id');
            e.preventDefault();
            formDisable();
            modalShow('myModal', 'View Data');
            $.get(url.detail, {
                id: id
            }, function(result) {
                let response = result.data;
                typeLogic(response.type, response.value)

                $('#parameter').val(response.parameter)
                $('#value').val(response.value)
                $('#type').val(response.type).trigger('change')
            });

        });

        $(document).on('click', '.update', function(e) {
            let id = $(this).data('id');
            e.preventDefault();
            formEnable();
            modalShow('myModal', 'Update Data');

            $.get(url.detail, {
                id: id
            }, function(result) {
                let response = result.data;
                $('#id').val(response.id)
                $('#parameter').val(response.parameter)
                $('#value').val(response.value)
                $('#type').val(response.type).trigger('change')
            });

        });


        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': CSRF_TOKEN
                }
            });
            Swal.fire({
                title: `Are you sure delete ${$(this).data('name')}?`,
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                            url: url.delete,
                            method: 'GET',
                            data: {
                                id: $(this).data('id'),
                            },
                        })
                        .then((result) => {
                            Swal.fire({
                                title: 'Deleted!',
                                text: result.success,
                                icon: 'success',
                                showCancelButton: false,
                                showConfirmButton: false,
                                timer: 1000,
                            })
                        }).then(() => {
                            tableReload(table)
                        });
                }
            });
        });


        $('#formModal').validate({ // initialize the plugin
            rules: {
                parameter: {
                    required: true,
                },
                type: {
                    required: true,
                }
            },
            submitHandler: function(form) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': CSRF_TOKEN
                    }
                });
                let id = $('#id').val();
                let parameter = $('#parameter').val();
                let value = (CKEDITOR.instances.value) ? CKEDITOR.instances.value.getData() : $('#value').val();
                let type = $('#type').val();

                let file_data = $('#fileUpload').prop('files')[0],
                    form_data = new FormData(document.getElementById('formModal'));


                form_data.append('_token', $("input[name=_token]").val());
                // form_data.append('_cache_id' , localStorage.getItem('cache_id'));
                form_data.append('file', file_data);
                form_data.append('id', id);
                form_data.append('parameter', parameter);
                form_data.append('value', value);
                form_data.append('type', type);

                $.ajax({
                    url: url.submit,
                    data: form_data,
                    type: 'POST',
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        swalStatus(response, "myModal")
                    }
                });
            }
        });
    });



    function typeLogic(type, value = null) {

        console.log(type, value)
        switch (type) {
            case 'text':
                resetFileInput();
                if (CKEDITOR.instances.value) {
                    CKEDITOR.instances.value.destroy();
                }

                // replace html tag
                let regex = /(<([^>]+)>)/ig;
                value = (value) ? value.replace(regex, "") : '';

                $('#value').val(value);

                break;
            case 'editor':
                resetFileInput();
                if (CKEDITOR.instances.value) {
                    CKEDITOR.instances.value.destroy();
                }

                CKEDITOR.replace('value', {
                    toolbar: ''
                });
                CKEDITOR.instances.value.setData(value);
                break;
            case 'upload':
                resetFileInput();
                if (CKEDITOR.instances.value) {
                    CKEDITOR.instances.value.destroy();
                }
                if (value) {
                    console.log(value)
                    let url = "{{url('upload')}}" + '/' + value;
                    let filename = value.split('/')[1];
                    $("#fileUpload").fileinput({
                        'showUpload': false,
                        theme: 'fa',
                        showClose: false,
                        showMove: false,
                        initialPreviewConfig: [{
                            caption: `${filename}`,
                            downloadUrl: url,
                            key: 1
                        }],
                        initialPreview: url,
                        initialPreviewAsData: true,
                        layoutTemplates: {
                            progress: '',
                            remove: ''
                        },
                        allowedFileExtensions: ["jpg", "png", "gif", "jpeg"],
                        initialPreviewShowDelete: false,
                        elErrorContainer: '#kartik-file-errors',
                    });

                    $(".glyphicon").removeClass("glyphicon-download").removeClass('glyphicon').addClass('fa fa-download');

                } else {
                    $("#fileUpload").fileinput({
                        'showUpload': false,
                        theme: 'fa',
                        'previewFileType': 'any',
                        fileActionSettings: {
                            showDrag: false,
                        },
                        allowedFileExtensions: ['jpg', 'gif', 'png', 'jpeg'],
                        initialPreviewAsData: true,
                        layoutTemplates: {
                            progress: '',
                            remove: ''
                        },
                        initialPreviewShowDelete: true,
                        elErrorContainer: '#kartik-file-errors',
                    });
                }

                $('#value').addClass('hidden');
                $('#fileUpload').removeClass('hidden');

                break;
        }

        function resetFileInput() {
            $('#fileUpload').fileinput('destroy');
            $('#fileUpload').addClass('hidden');
            $('#value').removeClass('hidden');
            $('#value').val('');


        }

        function escapeHtml(text) {
            var map = {
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#039;'
            };

            return text.replace(/[&<>"']/g, function(m) {
                return map[m];
            });
        }
    }
</script>

@endsection
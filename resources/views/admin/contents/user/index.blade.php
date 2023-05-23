@extends('admin.layouts.main')
@section('title', 'User')

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
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Group</th>
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
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Group</th>
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
@include('admin.contents.user._modal')
@endsection
@section('script')
<!-- BEGIN: Page JS-->


<script type="text/javascript">
    var url = {
        detail: "{{route('dashboard_user_detail')}}",
        delete: "{{route('dashboard_user_delete')}}",
        submit: "{{route('dashboard_user_post')}}",
        table: "{{route('dashboard_user_table')}}"
    };
    var table;
    var options = {
        keys: !0,
        select: {
            style: "multi"
        },
        language: {
            paginate: {
                previous: "<i class='fas fa-angle-left'>",
                next: "<i class='fas fa-angle-right'>"
            }
        },
    };


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
                    width: '2%'
                },
                {
                    data: 'fullname',
                    name: 'fullname'
                },
                {
                    data: 'username',
                    name: 'username'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'group.name',
                    name: 'group'
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

        $(document).on('click', '.view', function(e) {
            let id = $(this).data('id');
            e.preventDefault();
            formDisable();
            modalShow('myModal', 'View Data');
            $.get(url.detail, {
                id: id
            }, function(result) {

                let response = result.data;
                console.log(response)
                $('#fullname').val(response.fullname)
                $('#username').val(response.username)
                $('#email').val(response.email)
                $('#group').val(response.group.id).trigger('change')
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
                $('#fullname').val(response.fullname)
                $('#username').val(response.username)
                $('#email').val(response.email)
                $('#group').val(response.group.id).trigger('change')
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
                username: {
                    required: true,
                }

            },
            submitHandler: function(form) {
                let data = $('#formModal').serialize();

                $.post(url.submit, data, function(result) {
                    swalStatus(result, "myModal", '', table)
                });
            }
        });

    });
</script>

@endsection
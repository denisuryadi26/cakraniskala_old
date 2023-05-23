@section('breadcumbs')
@php
$breadrumbs = $menu['breadcrumbs'];
@endphp

<!-- <div class="content-header-left col-md-12 col-12 mb-2">
    <h3 class="content-header-title"></h3>
    <div class="row breadcrumbs-top">
        <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                @if(!empty($breadrumbs->parent))
                <li class="breadcrumb-item">
                    <a href="#">{{ucfirst($breadrumbs->parent->name)}}</a>
                    <span class="" aria-hidden="true"></span>
                </li>
                @endif

                <li class="breadcrumb-item active">
                    <a href="{{route("$breadrumbs->route_name")}}">{{ucfirst($breadrumbs->name)}}</a>
                </li>

            </ol>
        </div>
    </div>
</div> -->

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">{{ucfirst($breadrumbs->name)}}</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    @if(!empty($breadrumbs->parent))
                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{ucfirst($breadrumbs->parent->name)}}</a></li>
                    @endif
                    <li class="breadcrumb-item active">{{ucfirst($breadrumbs->name)}}</li>
                </ol>
            </div>

        </div>
    </div>
</div>
@endsection
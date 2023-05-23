<!-- BEGIN: Main Menu-->
@php
$activeMenu = $menu['breadcrumbs'];
@endphp


<!-- <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <div class="sidenav-header  d-flex  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="{{asset('argon-dashboard/assets/img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
            </a>
            <div class=" ml-auto ">
                <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-inner">
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <ul class="navbar-nav">
                    @foreach($menu['parentMenu'] as $item => $value)
                    @foreach($value->access as $val)
                    @if ($val->id == \Illuminate\Support\Facades\Auth::user()->group_id)

                    @if($val->pivot->is_viewable == true && $value->is_showed == 1)

                    @if($value->childs->isEmpty())
                    <li class="nav-item {{($value->name == $activeMenu->name ? 'active' : '')}}">
                        <a class="nav-link" href="{{($value->route_name ? route("$value->route_name") : '#')}}">
                            <i class="{{$value->icon}}"></i>
                            <span class="nav-link-text">{{$value->name}}</span>
                        </a>
                    </li>
                    @else
                    <li class="nav-item {{($value->name == $activeMenu->name ? 'active' : '')}}">
                        <a class="nav-link" href="#navbar-{{$value->name}}" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-{{$value->name}}">
                            <i class="{{$value->icon}}"></i>
                            <span class="nav-link-text">{{$value->name}}</span>
                        </a>
                        @foreach($value->childs as $key => $sub)
                        @foreach($sub->access as $key => $subaccess)
                        @if($subaccess->count() > 0)
                        @if($subaccess->id == \Illuminate\Support\Facades\Auth::user()->group_id && $subaccess->pivot->is_viewable == true)
                        <div class="collapse {{($activeMenu->parent ? $activeMenu->parent->name == $value->name ? 'show' : '' : '')}}" id="navbar-{{$value->name}}">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item {{($sub->name == $activeMenu->name ? 'active' : '')}}">
                                    <a href="{{route("$sub->route_name")}}" class="nav-link">
                                        <span class="sidenav-mini-icon"> P </span>
                                        <span class="sidenav-normal"> {{$sub->name}} </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        @endif
                        @endif
                        @endforeach
                        @endforeach
                    </li>
                    @endif
                    @endif
                    @endif
                    @endforeach
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</nav> -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                @foreach($menu['parentMenu'] as $item => $value)
                @foreach($value->access as $val)
                @if ($val->id == \Illuminate\Support\Facades\Auth::user()->group_id)

                @if($val->pivot->is_viewable == true && $value->is_showed == 1)

                @if($value->childs->isEmpty())
                <li>
                    <a href="{{($value->route_name ? route("$value->route_name") : '#')}}" class="waves-effect">
                        <i class="{{$value->icon}}"></i><span class="badge badge-pill badge-success float-right"></span>
                        <span>{{$value->name}}</span>
                    </a>
                </li>
                @else
                <li class="{{($value->name == $activeMenu->name ? 'mm-active' : '')}}">
                    <a href="#" class="has-arrow waves-effect">
                        <i class="{{$value->icon}}"></i>
                        <span>{{$value->name}}</span>
                    </a>
                    @foreach($value->childs as $key => $sub)
                    @foreach($sub->access as $key => $subaccess)
                    @if($subaccess->count() > 0)
                    @if($subaccess->id == \Illuminate\Support\Facades\Auth::user()->group_id && $subaccess->pivot->is_viewable == true)
                    <ul class="sub-menu {{($activeMenu->parent ? $activeMenu->parent->name == $value->name ? 'mm-show' : '' : '')}}" aria-expanded="false">
                        <li><a href="{{route("$sub->route_name")}}">{{$sub->name}}</a></li>
                    </ul>
                    @endif
                    @endif
                    @endforeach
                    @endforeach
                </li>
                @endif
                @endif
                @endif
                @endforeach
                @endforeach

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
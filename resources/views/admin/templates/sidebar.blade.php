<!-- BEGIN: Main Menu-->
@php
$activeMenu = $menu['breadcrumbs'];
@endphp


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
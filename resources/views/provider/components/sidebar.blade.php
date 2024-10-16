<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="/public" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="{{ asset('/assets/images/logo/dacademy.png') }}" alt="" class="logo logo-lg">
                <img src="/assets/images/logo/icon.png" alt="" class="logo logo-sm">
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Navigation</label>
                </li>
                <li class="nxl-item nxl-hasmenu {{ request()->is('/') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Dashboards</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item {{ request()->is('/') ? 'active' : '' }}"><a class="nxl-link" href="/">Home</a></li>
                    </ul>
                </li>

                @if (request()->is('provider/providers'))
                    <li class="nxl-item nxl-hasmenu {{ request()->is('provider/providers') ? 'active' : '' }}">
                        <a href="javascript:void(0);" class="nxl-link">
                            <span class="nxl-micon"><i class="fa-regular fa-building"></i></span>
                            <span class="nxl-mtext">Provider</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                        </a>
                        <ul class="nxl-submenu">
                            <li class="nxl-item {{ request()->is('providers.profile') ? 'active' : '' }}">
                                <a class="nxl-link" href="{{ route('providers.profile') }}">Overview</a>
                            </li>
                            <li class="nxl-item {{ request()->is('services.index') ? 'active' : '' }}">
                                <a class="nxl-link" href="{{ route('services.index') }}">Services</a>
                            </li>
                            <li class="nxl-item {{ request()->is('reviews.index') ? 'active' : '' }}">
                                <a class="nxl-link" href="{{ route('reviews.index') }}">Reviews</a>
                            </li>
                            <li class="nxl-item {{ request()->is('portfolios.index') ? 'active' : '' }}">
                                <a class="nxl-link" href="{{ route('portfolios.index') }}">Portfolios</a>
                            </li>
                            <li class="nxl-item {{ request()->is('awards.index') ? 'active' : '' }}">
                                <a class="nxl-link" href="{{ route('awards.index') }}">Awards</a>
                            </li>
                            <li class="nxl-item {{ request()->is('teams.index') ? 'active' : '' }}">
                                <a class="nxl-link" href="{{ route('teams.index') }}">Team</a>
                            </li>
                            <li class="nxl-item {{ request()->is('managers.index') ? 'active' : '' }}">
                                <a class="nxl-link" href="{{ route('managers.index') }}">Add manager</a>
                            </li>
                        </ul>
                    </li>

                @else
                    <li class="nxl-item {{ request()->is('providers.profile') ? 'active' : '' }}">
                        <a href="{{ route('providers.profile') }}" class="nxl-link">
                            <span class="nxl-micon"><i class="fa-regular fa-building"></i></span>
                            <span class="nxl-mtext">Provider</span><span class="nxl-arrow"></span>
                        </a>
                    </li>
                @endif


{{--                <li class="nxl-item nxl-hasmenu {{ request()->is('marketer*') ? 'active' : '' }}">--}}
{{--                    <a href="javascript:void(0);" class="nxl-link">--}}
{{--                        <span class="nxl-micon"><i class="feather-user"></i></span>--}}
{{--                        <span class="nxl-mtext">Marketer</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>--}}
{{--                    </a>--}}
{{--                    <ul class="nxl-submenu">--}}
{{--                        <li class="nxl-item {{ request()->is('marketer/about') ? 'active' : '' }}"><a class="nxl-link" href="#">About</a></li>--}}
{{--                        <li class="nxl-item {{ request()->is('marketer/services') ? 'active' : '' }}"><a class="nxl-link" href="#">Services</a></li>--}}
{{--                        <li class="nxl-item {{ request()->is('marketer/portfolios') ? 'active' : '' }}"><a class="nxl-link" href="#">Portfolios</a></li>--}}
{{--                        <li class="nxl-item {{ request()->is('marketer/awards') ? 'active' : '' }}"><a class="nxl-link" href="#">Awards</a></li>--}}
{{--                        <li class="nxl-item {{ request()->is('marketer/resume') ? 'active' : '' }}"><a class="nxl-link" href="#">Resume</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="nxl-item nxl-hasmenu {{ request()->is('client*') ? 'active' : '' }}">--}}
{{--                    <a href="javascript:void(0);" class="nxl-link">--}}
{{--                        <span class="nxl-micon"><i class="fa-solid fa-briefcase"></i></span>--}}
{{--                        <span class="nxl-mtext">Client</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>--}}
{{--                    </a>--}}
{{--                    <ul class="nxl-submenu">--}}
{{--                        <li class="nxl-item {{ request()->is('client/about') ? 'active' : '' }}"><a class="nxl-link" href="#">About</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="nxl-item nxl-hasmenu }">--}}
{{--                    <a href="javascript:void(0);" class="nxl-link">--}}
{{--                        <span class="nxl-micon"><i class="fa-solid fa-gears"></i></span>--}}
{{--                        <span class="nxl-mtext">settings</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>--}}
{{--                    </a>--}}
{{--                    <ul class="nxl-submenu">--}}
{{--                        <li class="nxl-item {{ request()->is('categories') ? 'active' : '' }}"><a class="nxl-link" href="{{route('categories.index')}}">Category</a></li>--}}
{{--                    </ul>--}}
{{--                    <ul class="nxl-submenu">--}}
{{--                        --}}{{-- <li class="nxl-item {{ request()->is('services-admin') ? 'active' : '' }}"><a class="nxl-link" href="{{route('services-admin.index')}}">Service</a></li> --}}
{{--                    </ul>--}}
{{--                </li>--}}

            </ul>

        </div>
    </div>
</nav>

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
                        <li class="nxl-item {{ request()->is('/') ? 'active' : '' }}"><a class="nxl-link" href="{{ route('admin.dashboard') }}">Home</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu {{ request()->is('marketer*') ? 'active' : '' }}">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-user"></i></span>
                        <span class="nxl-mtext">Users</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item {{ request()->is('marketer/about') ? 'active' : '' }}"><a class="nxl-link" href="{{ route('providers.index')}}">Provider</a></li>
                        <li class="nxl-item {{ request()->is('marketer/services') ? 'active' : '' }}"><a class="nxl-link" href="{{ route('marketers.index')}}">Marketer</a></li>
                        <li class="nxl-item {{ request()->is('marketer/portfolios') ? 'active' : '' }}"><a class="nxl-link" href="{{ route('clients.index')}}">Client</a></li>
                    </ul>
                </li>
                <li class="nxl-item nxl-hasmenu }">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="fa-solid fa-gears"></i></span>
                        <span class="nxl-mtext">settings</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item {{ request()->is('categories') ? 'active' : '' }}"><a class="nxl-link" href="{{ route('categories.index')}}">Category</a></li>
                    </ul>
                    <ul class="nxl-submenu">
                        <li class="nxl-item {{ request()->is('services-admins') ? 'active' : '' }}"><a class="nxl-link" href="{{ route('services.index')}}">Service</a></li>
                    </ul>
                    <ul class="nxl-submenu">
                        <li class="nxl-item {{ request()->is('services-admins') ? 'active' : '' }}"><a class="nxl-link" href="{{ route('languages.index')}}">Languages</a></li>
                    </ul>
                    <ul class="nxl-submenu">
                        <li class="nxl-item {{ request()->is('services-admins') ? 'active' : '' }}"><a class="nxl-link" href="{{ route('skills.index')}}">Skills</a></li>
                    </ul>
                    <ul class="nxl-submenu">
                        <li class="nxl-item {{ request()->is('services-admins') ? 'active' : '' }}"><a class="nxl-link" href="{{ route('sectors.index')}}">Sectors</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

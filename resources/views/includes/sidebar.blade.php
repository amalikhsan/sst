<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="" style="font-size:10px;">{{ env('APP_NAME') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href=""></a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Main Menu</li>
        <li class="{{ Route::is('dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fire"></i>
                <span>Dashboard</span>
            </a>
        </li>
        {{-- <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i>
                <span>Dropdown Menu</span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#">Dropdown Item</a></li>
            </ul>
        </li> --}}

        @can('mahasiswa')
            <li class="menu-header">Sub Menu</li>
            <li class="{{ Route::is('studentprofile') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('studentprofile') }}">
                    <i class="fas fa-user"></i>
                    <span>Student Profile</span>
                </a>
            </li>
            <li class="{{ Route::is('selfassessment') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('selfassessment') }}">
                    <i class="fas fa-fist-raised"></i>
                    <span>Self Assessment</span>
                </a>
            </li>
            <li class="{{ Route::is('activityreport') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('activityreport') }}">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Activity Report</span>
                </a>
            </li>
            <li class="{{ Route::is('interview') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('interview') }}">
                    <i class="fas fa-clock"></i>
                    <span>Interview</span>
                </a>
            </li>
        @endcan

        @can('timpsikolog')
            <li class="menu-header">Sub Menu</li>
            <li class="{{ Route::is('user*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Manage Users</span>
                </a>
            </li>
        @endcan

        @can('validator')
            <li class="menu-header">Sub Menu</li>
            <li class="{{ Route::is('user*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Activity Report</span>
                </a>
            </li>
        @endcan

        @can('pimpinan')
            <li class="menu-header">Sub Menu</li>
            <li class="{{ Route::is('user*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Manage Users</span>
                </a>
            </li>
        @endcan

        @can('superadmin')
            <li class="menu-header">Sub Menu</li>
            <li class="{{ Route::is('user*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Manage Users</span>
                </a>
            </li>
        @endcan

    </ul>
</aside>

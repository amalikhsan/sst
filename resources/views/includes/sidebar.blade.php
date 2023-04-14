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

        @can('superadmin')
            <li class="menu-header">Administrator</li>
            <li class="{{ Route::is('user*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Manage Users</span>
                </a>
            </li>
        @endcan

        @can('mahasiswa')
            <li class="menu-header">Activity</li>
            <li class="{{ Route::is('activity*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('activity.index') }}">
                    <i class="fas fa-users"></i>
                    <span>test</span>
                </a>
                <a class="nav-link" href="{{ route('activity.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Manage Users</span>
                </a>
                <a class="nav-link" href="{{ route('activity.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Manage Users</span>
                </a>
                <a class="nav-link" href="{{ route('activity.index') }}">
                    <i class="fas fa-users"></i>
                    <span>Interview</span>
                </a>
            </li>
        @endcan
    </ul>
</aside>

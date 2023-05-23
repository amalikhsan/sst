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

        @can('mahasiswa')
            <li class="menu-header">Sub Menu</li>
            <li class="{{ Route::is('studentprofile*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('studentprofile') }}">
                    <i class="fas fa-user"></i>
                    <span>Student Profile</span>
                </a>
            </li>
            <li class="nav-item dropdown {{ Route::is('selfassessment*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-fist-raised"></i>
                    <span>Self Assessment</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('selfassessment') }}">Self Assessment 1</a></li>
                    <li><a href="{{ route('selfassessmenttwo') }}">Self Assessment 2</a></li>
                </ul>
            </li>
            <li class="{{ Route::is('activityreport*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('activityreport') }}">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Activity Report</span>
                </a>
            </li>
            <li class="{{ Route::is('interview*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('interview') }}">
                    <i class="fas fa-clock"></i>
                    <span>Interview</span>
                </a>
            </li>
        @endcan

        @can('timpsikolog')
            <li class="menu-header">Sub Menu</li>
            <li class="nav-item dropdown {{ Route::is('selfassessment-timpsikolog*') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-fist-raised"></i>
                    <span>Self Assessment</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('selfassessment-timpsikolog') }}">Self Assessment 1</a></li>
                    <li><a href="{{ route('selfassessmenttwo-timpsikolog') }}">Self Assessment 2</a></li>
                </ul>
            </li>
            <li class="{{ Route::is('activityreport-timpsikolog*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('activityreport-timpsikolog') }}">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Activity Report</span>
                </a>
            </li>
            <li class="{{ Route::is('interview-timpsikolog*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('interview-timpsikolog') }}">
                    <i class="fas fa-clock"></i>
                    <span>Interview</span>
                </a>
            </li>
        @endcan

        @can('validator')
            <li class="menu-header">Sub Menu</li>
            <li class="{{ Route::is('activityreport-validator*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('activityreport-validator') }}">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Activity Report</span>
                </a>
            </li>
        @endcan

        @can('pimpinan')
            <li class="menu-header">Sub Menu</li>
            <li class="{{ Route::is('score-pimpinan*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('score-pimpinan') }}">
                    <i class="fas fa-clock"></i>
                    <span>score</span>
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
            <li class="{{ Route::is('interviewquota*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('interviewquota') }}">
                    <i class="fas fa-id-card"></i>
                    <span>Interview Quota</span>
                </a>
            </li>
        @endcan

    </ul>
</aside>

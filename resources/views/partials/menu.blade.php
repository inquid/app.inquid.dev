<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="nav-item nav-dropdown">
                    <a class="nav-link  nav-dropdown-toggle" href="#">
                        <i class="fa-fw fas fa-users nav-icon">

                        </i>
                        {{ trans('cruds.userManagement.title') }}
                    </a>
                    <ul class="nav-dropdown-items">
                        @can('permission_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-unlock-alt nav-icon">

                                    </i>
                                    {{ trans('cruds.permission.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-briefcase nav-icon">

                                    </i>
                                    {{ trans('cruds.role.title') }}
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="nav-item">
                                <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <i class="fa-fw fas fa-user nav-icon">

                                    </i>
                                    {{ trans('cruds.user.title') }}
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('country_access')
                <li class="nav-item">
                    <a href="{{ route("admin.countries.index") }}" class="nav-link {{ request()->is('admin/countries') || request()->is('admin/countries/*') ? 'active' : '' }}">
                        <i class="fa-fw fas fa-flag nav-icon">

                        </i>
                        {{ trans('cruds.country.title') }}
                    </a>
                </li>
            @endcan
            @can('mexican_access')
                <li class="nav-item">
                    <a href="{{ route("admin.mexicans.index") }}" class="nav-link {{ request()->is('admin/mexicans') || request()->is('admin/mexicans/*') ? 'active' : '' }}">
                        <i class="fa-fw fa fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.mexican.title') }}
                    </a>
                </li>
            @endcan
            @can('thai_food_access')
                <li class="nav-item">
                    <a href="{{ route("admin.thai-foods.index") }}" class="nav-link {{ request()->is('admin/thai-foods') || request()->is('admin/thai-foods/*') ? 'active' : '' }}">
                        <i class="fa-fw fa fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.thaiFood.title') }}
                    </a>
                </li>
            @endcan
            @can('spanish_access')
                <li class="nav-item">
                    <a href="{{ route("admin.spanishes.index") }}" class="nav-link {{ request()->is('admin/spanishes') || request()->is('admin/spanishes/*') ? 'active' : '' }}">
                        <i class="fa-fw fa fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.spanish.title') }}
                    </a>
                </li>
            @endcan
            @can('french_access')
                <li class="nav-item">
                    <a href="{{ route("admin.frenches.index") }}" class="nav-link {{ request()->is('admin/frenches') || request()->is('admin/frenches/*') ? 'active' : '' }}">
                        <i class="fa-fw fa fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.french.title') }}
                    </a>
                </li>
            @endcan
            @can('japanese_access')
                <li class="nav-item">
                    <a href="{{ route("admin.japanese.index") }}" class="nav-link {{ request()->is('admin/japanese') || request()->is('admin/japanese/*') ? 'active' : '' }}">
                        <i class="fa-fw fa fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.japanese.title') }}
                    </a>
                </li>
            @endcan
            @can('korean_access')
                <li class="nav-item">
                    <a href="{{ route("admin.koreans.index") }}" class="nav-link {{ request()->is('admin/koreans') || request()->is('admin/koreans/*') ? 'active' : '' }}">
                        <i class="fa-fw fa fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.korean.title') }}
                    </a>
                </li>
            @endcan
            @can('venezuela_access')
                <li class="nav-item">
                    <a href="{{ route("admin.venezuelas.index") }}" class="nav-link {{ request()->is('admin/venezuelas') || request()->is('admin/venezuelas/*') ? 'active' : '' }}">
                        <i class="fa-fw fa fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.venezuela.title') }}
                    </a>
                </li>
            @endcan
            @can('central_america_access')
                <li class="nav-item">
                    <a href="{{ route("admin.central-americas.index") }}" class="nav-link {{ request()->is('admin/central-americas') || request()->is('admin/central-americas/*') ? 'active' : '' }}">
                        <i class="fa-fw fa fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.centralAmerica.title') }}
                    </a>
                </li>
            @endcan
            @can('caribe_access')
                <li class="nav-item">
                    <a href="{{ route("admin.caribes.index") }}" class="nav-link {{ request()->is('admin/caribes') || request()->is('admin/caribes/*') ? 'active' : '' }}">
                        <i class="fa-fw fa fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.caribe.title') }}
                    </a>
                </li>
            @endcan
            @can('chinesse_access')
                <li class="nav-item">
                    <a href="{{ route("admin.chinesses.index") }}" class="nav-link {{ request()->is('admin/chinesses') || request()->is('admin/chinesses/*') ? 'active' : '' }}">
                        <i class="fa-fw fa fa-cogs nav-icon">

                        </i>
                        {{ trans('cruds.chinesse.title') }}
                    </a>
                </li>
            @endcan
            @if(!auth()->user()->isAdmin)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.billing.index') }}">
                        <i class="fas fa-fw fa-money nav-icon">
                        </i>
                        {{ trans('global.billing.menu') }}
                    </a>
                </li>
            @endif
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key nav-icon">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
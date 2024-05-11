<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('registration_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.registrations.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/registrations") || request()->is("admin/registrations/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.registration.title') }}
                </a>
            </li>
        @endcan
        @can('abstruct_submission_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.abstruct-submissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/abstruct-submissions") || request()->is("admin/abstruct-submissions/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-user-tie c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.abstructSubmission.title') }}
                </a>
            </li>
        @endcan
        @can('slider_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.sliders.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sliders") || request()->is("admin/sliders/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-sliders-h c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.slider.title') }}
                </a>
            </li>
        @endcan
        @can('about_manage_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/about-managements*") ? "c-show" : "" }} {{ request()->is("admin/organization-committees*") ? "c-show" : "" }} {{ request()->is("admin/co-host-malaysia*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-bars c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.aboutManage.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('about_management_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.about-managements.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/about-managements") || request()->is("admin/about-managements/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-align-justify c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.aboutManagement.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('organization_committee_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.organization-committees.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/organization-committees") || request()->is("admin/organization-committees/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-users-cog c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.organizationCommittee.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('co_host_malaysium_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.co-host-malaysia.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/co-host-malaysia") || request()->is("admin/co-host-malaysia/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user-check c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.coHostMalaysium.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('speaker_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.speakers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/speakers") || request()->is("admin/speakers/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-user-graduate c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.speaker.title') }}
                </a>
            </li>
        @endcan
        @can('submission_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.submissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/submissions") || request()->is("admin/submissions/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-align-justify c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.submission.title') }}
                </a>
            </li>
        @endcan
        @can('exhibition_sponsorship_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/stalls*") ? "c-show" : "" }} {{ request()->is("admin/strategic-partners*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-hotel c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.exhibitionSponsorship.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('stall_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.stalls.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/stalls") || request()->is("admin/stalls/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-archway c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.stall.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('strategic_partner_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.strategic-partners.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/strategic-partners") || request()->is("admin/strategic-partners/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-handshake c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.strategicPartner.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('venu_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.venus.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/venus") || request()->is("admin/venus/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-venus c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.venu.title') }}
                </a>
            </li>
        @endcan
        @can('event_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.events.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/events") || request()->is("admin/events/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-calendar-alt c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.event.title') }}
                </a>
            </li>
        @endcan
        @can('important_date_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.important-dates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/important-dates") || request()->is("admin/important-dates/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-calendar-check c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.importantDate.title') }}
                </a>
            </li>
        @endcan
        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>

</div>
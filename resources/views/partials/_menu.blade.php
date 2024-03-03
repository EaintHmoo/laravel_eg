<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li>
            <select class="searchable-field form-control">

            </select>
        </li>
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }} {{ request()->is("admin/audit-logs*") ? "c-show" : "" }}">
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
                    @can('audit_log_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.audit-logs.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.auditLog.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('branch_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.branches.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/branches") || request()->is("admin/branches/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.branch.title') }}
                </a>
            </li>
        @endcan
        @can('brand_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.brands.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/brands") || request()->is("admin/brands/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.brand.title') }}
                </a>
            </li>
        @endcan
        @can('machine_profile_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.machine-profiles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/machine-profiles") || request()->is("admin/machine-profiles/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.machineProfile.title') }}
                </a>
            </li>
        @endcan
        @can('currency_rate_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.currency-rates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/currency-rates") || request()->is("admin/currency-rates/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.currencyRate.title') }}
                </a>
            </li>
        @endcan
        @can('purchase_source_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.purchase-sources.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/purchase-sources") || request()->is("admin/purchase-sources/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.purchaseSource.title') }}
                </a>
            </li>
        @endcan
        @can('assessory_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/mades*") ? "c-show" : "" }} {{ request()->is("admin/thread-types*") ? "c-show" : "" }} {{ request()->is("admin/threads*") ? "c-show" : "" }} {{ request()->is("admin/needles*") ? "c-show" : "" }} {{ request()->is("admin/spareparts*") ? "c-show" : "" }} {{ request()->is("admin/interlines*") ? "c-show" : "" }} {{ request()->is("admin/double-tapes*") ? "c-show" : "" }} {{ request()->is("admin/sprays*") ? "c-show" : "" }} {{ request()->is("admin/frames*") ? "c-show" : "" }} {{ request()->is("admin/units*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.assessory.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('made_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.mades.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/mades") || request()->is("admin/mades/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.made.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('thread_type_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.thread-types.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/thread-types") || request()->is("admin/thread-types/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.threadType.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('thread_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.threads.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/threads") || request()->is("admin/threads/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.thread.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('needle_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.needles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/needles") || request()->is("admin/needles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.needle.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('sparepart_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.spareparts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/spareparts") || request()->is("admin/spareparts/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.sparepart.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('interline_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.interlines.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/interlines") || request()->is("admin/interlines/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.interline.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('double_tape_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.double-tapes.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/double-tapes") || request()->is("admin/double-tapes/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.doubleTape.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('spray_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.sprays.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/sprays") || request()->is("admin/sprays/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.spray.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('frame_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.frames.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/frames") || request()->is("admin/frames/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.frame.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('unit_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.units.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/units") || request()->is("admin/units/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-align-left c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.unit.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('invoice_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.invoices.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/invoices") || request()->is("admin/invoices/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-copy c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.invoice.title') }}
                </a>
            </li>
        @endcan
        @can('customer_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.customers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/customers") || request()->is("admin/customers/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.customer.title') }}
                </a>
            </li>
        @endcan
        @can('maintenance_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.maintenances.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/maintenances") || request()->is("admin/maintenances/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.maintenance.title') }}
                </a>
            </li>
        @endcan
        @can('style_no_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.style-nos.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/style-nos") || request()->is("admin/style-nos/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.styleNo.title') }}
                </a>
            </li>
        @endcan
        @can('customer_invoice_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.customer-invoices.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/customer-invoices") || request()->is("admin/customer-invoices/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.customerInvoice.title') }}
                </a>
            </li>
        @endcan
        @can('sparepart_invoice_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.spare-part-invoices.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/spare-part-invoices") || request()->is("admin/spare-part-invoices/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.sparePartInvoice.title') }}
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

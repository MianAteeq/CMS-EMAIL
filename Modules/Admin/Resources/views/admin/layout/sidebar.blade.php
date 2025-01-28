<!-- BEGIN: Main Menu-->

<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


            <li class="{{ (request()->route()->uri == 'admin/dashboard') ? 'active' : '' }} nav-item"><a href="{{route('admin.dashboard')}}" style="padding-left: 28px "><i class="la la-home d-none"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a></li>
            <li class=" navigation-header" style="padding-top: 1px;padding-left: 29px;"><span>Directory</span></li>
            <li class="{{ str_contains(request()->route()->uri, 'admin/users') ==true ? 'actives' : '' }} nav-item"><a href="{{route('admin.users')}}" style=""><i class="la la-home d-none"></i><span class="menu-title" data-i18n="Users">Users</span></a></li>
            <li class="{{ str_contains(request()->route()->uri, 'admin/user/group') ==true ? 'actives' : '' }} nav-item"><a href="{{route('admin.user.group')}}"><i class="la la-home d-none"></i><span class="menu-title" data-i18n="User Group">User Group</span></a></li>
            <li class=" navigation-header" style="padding-top: 1px;padding-left: 29px;"><span>Business</span></li>
            <li class=" navigation-header has-sub open" style="padding-top: 1px;padding-left: 47px;"><span>Registrations</span>
                <ul class="menu-content" style="padding-top: 6px ">

                    <li class="{{str_contains(request()->route()->uri, 'admin/registration/prospects') ==true  ? 'active' : '' }} nav-item"><a href="{{route('admin.prospects')}}"><i class="la la-home d-none"></i><span class="menu-title" data-i18n="Prospects">Prospects</span></a></li>
                    <li class="{{ str_contains(request()->route()->uri, 'admin/registration/interests') ==true  ? 'active' : '' }} nav-item"><a href="{{route('admin.interests')}}"><i class="la la-home d-none"></i><span class="menu-title" data-i18n="Interests">Interests</span></a></li>
                    <li class="{{ str_contains(request()->route()->uri, 'admin/registration/application') ==true  ? 'active' : '' }} nav-item"><a href="{{route('admin.application')}}"><i class="la la-home d-none"></i><span class="menu-title" data-i18n="Applications">Applications</span></a></li>
                    <li class="{{ str_contains(request()->route()->uri, 'admin/registration/register') ==true  ? 'active' : '' }} nav-item"><a href="{{route('admin.register')}}"><i class="la la-home d-none"></i><span class="menu-title" data-i18n="Registered">Registered</span></a></li>
                </ul>
            </li>
            {{-- <li class=" navigation-header has-sub open" style="padding-top: 1px;padding-left: 47px;"><span>Products</span>
                <ul class="menu-content" style="padding-top: 6px ">

                    <li class=" nav-item"><a href=""><i class="la la-home d-none"></i><span class="menu-title" data-i18n="Business Manager">Business Manager</span></a></li>
                    <li class=" nav-item"><a href=""><i class="la la-home d-none"></i><span class="menu-title" data-i18n="Service Provider">Service Provider</span></a></li>

                </ul>
            </li> --}}
            <li class=" navigation-header has-sub open" style="padding-top: 1px;padding-left: 47px;"><span>Billing</span>
                <ul class="menu-content" style="padding-top: 6px ">

                    <li class="{{str_contains(request()->route()->uri, 'admin/subscribers') ==true ? 'active' : '' }} nav-item"><a href="{{route('admin.subscribers')}}"><i class="la la-home d-none"></i><span class="menu-title" data-i18n="Subscriptions">Subscriptions</span></a></li>
                    <li class="{{str_contains(request()->route()->uri, 'admin/invoice') ==true ? 'active' : '' }} nav-item"><a href="{{route('admin.invoice')}}"><i class="la la-home d-none"></i><span class="menu-title" data-i18n="Invoices">Invoices</span></a></li>
                    <li class="{{str_contains(request()->route()->uri, 'admin/payment') ==true ? 'active' : '' }} nav-item"><a href="{{route('admin.payments')}}"><i class="la la-home d-none"></i><span class="menu-title" data-i18n="Payments">Payments</span></a></li>

                </ul>
            </li>
            <li class=" navigation-header" style="padding-top: 1px;padding-left: 29px;"><span>Consumers</span></li>
            <li class=" navigation-header has-sub open" style="padding-top: 1px;padding-left: 47px;"><span>Registrations</span>
                <ul class="menu-content" style="padding-top: 6px ">

                    <li class="{{str_contains(request()->route()->uri, 'admin/hub/users') ==true ? 'active' : '' }} nav-item"><a href="{{route('admin.hub.users')}}"><i class="la la-home d-none"></i><span class="menu-title" data-i18n="Hub Users">Hub Users</span></a></li>


                </ul>
            </li>
            <li class=" navigation-header has-sub open" style="padding-top: 1px;padding-left: 47px;"><span>Billing</span>
                <ul class="menu-content" style="padding-top: 6px ">

                    <li class=" nav-item"><a href=""><i class="la la-home d-none"></i><span class="menu-title" data-i18n="Subscriptions">Subscriptions</span></a></li>
                    <li class=" nav-item"><a href=""><i class="la la-home d-none"></i><span class="menu-title" data-i18n="Invoices">Invoices</span></a></li>
                    <li class=" nav-item"><a href=""><i class="la la-home d-none"></i><span class="menu-title" data-i18n="Payments">Payments</span></a></li>


                </ul>
            </li>
            <li class=" navigation-header" style="padding-top: 1px;padding-left: 29px;"><span>Product settings</span></li>
            <li class="{{str_contains(request()->route()->uri, 'admin/packages') ==true ? 'actives' : '' }} nav-item"><a href="{{route('admin.packages')}}"><i class="la la-home d-none"></i><span class="menu-title" data-i18n="Plan">Plan</span></a></li>
            <li class="{{str_contains(request()->route()->uri, 'admin/product') ==true ? 'actives' : '' }} nav-item"><a href="{{route('admin.products')}}"><i class="la la-home d-none"></i><span class="menu-title" data-i18n="Products">Products</span></a></li>
            <li class="{{str_contains(request()->route()->uri, 'admin/reference/data') ==true ? 'actives' : '' }} nav-item"><a href="{{route('admin.ref.data')}}"><i class="la la-home d-none"></i><span class="menu-title" data-i18n="Reference Data">Reference Data</span></a></li>


            {{-- <li class="{{ (request()->route()->uri == 'admin/dashboard') ? 'active' : '' }} nav-item"><a href="{{route('admin.dashboard')}}"><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a></li> --}}

           {{-- <li class="{{ (request()->route()->uri == 'admin/packages') ? 'open active' : '' }} nav-item"><a href="{{route('admin.packages')}}"><i class="la la-money"></i><span class="menu-title" data-i18n="Packages">Packages</span></a></li>

            <li class="{{ (request()->route()->uri == 'admin/vender') ? 'open active' : '' }} nav-item"><a href="{{route('admin.vender')}}"><i class="la la-group"></i><span class="menu-title" data-i18n="Subscribers">New Vender</span></a></li>
            <li class="{{ (request()->route()->uri == 'admin/subscribers') ? 'open active' : '' }} nav-item"><a href="{{route('admin.subscribers')}}"><i class="la la-group"></i><span class="menu-title" data-i18n="Subscribers">Subscribers</span></a></li>

            <li class="{{ (request()->route()->uri == 'admin/jobs') ? 'open active' : '' }} nav-item"><a href="{{route('admin.jobs')}}"><i class="la la-briefcase"></i><span class="menu-title" data-i18n="Subscribers">Jobs</span></a></li>

            <li class="{{ (request()->route()->uri == 'admin/job_type') ? 'open active' : '' }} nav-item"><a href="{{route('admin.job.type')}}"><i class="la la-newspaper-o"></i><span class="menu-title" data-i18n="Subscribers">Job Type</span></a></li>

            <li class="{{ (request()->route()->uri == 'admin/job_price_type') ? 'open active' : '' }} nav-item"><a href="{{route('admin.job.price')}}"><i class="la la-question-circle"></i><span class="menu-title" data-i18n="Subscribers">Job Price Type</span></a></li>

            <li class="{{ (request()->route()->uri == 'admin/users') ? 'open active' : '' }} nav-item"><a href="{{route('admin.users')}}"><i class="la la-user"></i><span class="menu-title" data-i18n="Users">Users/Clients</span></a></li>

            <li class="{{ (request()->route()->uri == 'admin/services') ? 'open active' : '' }} nav-item"><a href="{{route('admin.services')}}"><i class="la la-server"></i><span class="menu-title" data-i18n="Services">Services</span></a></li>



            <li class="nav-item has-sub"><a href="#"><i class="la la-car"></i><span class="menu-title" data-i18n="Maps">Car</span></a>
                <ul class="menu-content">
                   <li class="{{ (request()->route()->uri == 'admin/makers') ? 'open active' : '' }} nav-item">
                    <a class="menu-item"  href="{{route('admin.makers')}}">Car  Makers </span></a>
                   </li>
                   <li class="{{ (request()->route()->uri == 'admin/models') ? 'open active' : '' }} nav-item">
                    <a class="menu-item"  href="{{route('admin.models')}}">Car  Model </span></a>
                   </li>



                </ul>
            </li>
            <li class="{{ (request()->route()->uri == 'admin/withdraw_requests') ? 'open active' : '' }} nav-item"><a
                    href="{{route('admin.withdraws')}}"><i class="la la-money"></i><span class="menu-title"
                        data-i18n="Services">Withdraw Request</span></a></li>

            <li class="nav-item has-sub"><a href="#"><i class="la la-cogs"></i><span class="menu-title" data-i18n="Maps">Settings</span></a>
                <ul class="menu-content">
                    <li class="{{ (request()->route()->uri == 'admin/settings/admin/profile') ? 'is-shown active' : '' }}">
                        <a class="menu-item" href="{{route('admin.warranty.job')}}"><i></i><span data-i18n="Leaflet Maps">Warrenty Job</span></a>
                    </li>
                    <li class="{{ (request()->route()->uri == 'admin/settings/admin/profile') ? 'is-shown active' : '' }}">
                        <a class="menu-item" href="{{route('admin.vehicle.specialist')}}"><i></i><span data-i18n="Leaflet Maps">Vehicle Specialist</span></a>
                    </li>
                    <li class="{{ (request()->route()->uri == 'admin/settings/admin/profile') ? 'is-shown active' : '' }}">
                        <a class="menu-item" href="{{route('admin.accreditation')}}"><i></i><span data-i18n="Leaflet Maps">Accreditation</span></a>
                    </li>
                    <li class="{{ (request()->route()->uri == 'admin/settings/admin/profile') ? 'is-shown active' : '' }}">
                        <a class="menu-item" href="{{route('admin.settings')}}"><i></i><span data-i18n="Leaflet Maps">Site
                                Configuration</span></a>
                    </li>
                    <li class="{{ (request()->route()->uri == 'admin/settings/admin/profile') ? 'is-shown active' : '' }}">
                        <a class="menu-item" href="{{route('admin.profile')}}"><i></i><span data-i18n="Leaflet Maps">Profile</span></a>
                    </li>

                    <li>
                        <a class="menu-item" href="{{route('admin.logout')}}"><i></i><span data-i18n="Leaflet Maps">Logout</span></a>
                    </li>
                </ul>
            </li> --}}

        </ul>
    </div>
</div>

<!-- END: Main Menu-->

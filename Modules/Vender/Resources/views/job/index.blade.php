@extends('vender::layouts.master')
@section('content')
<section class="users-list-wrapper">
<div class="users-list-filter px-1">
    <form>
        <div class="row border border-light rounded py-2 mb-2">
            <div class="col-12 col-sm-6 col-lg-3">
                <label for="users-list-verified">Verified</label>
                <fieldset class="form-group">
                    <select class="form-control" id="users-list-verified">
                        <option value="">Any</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </fieldset>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <label for="users-list-role">Role</label>
                <fieldset class="form-group">
                    <select class="form-control" id="users-list-role">
                        <option value="">Any</option>
                        <option value="User">User</option>
                        <option value="Staff">Staff</option>
                    </select>
                </fieldset>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <label for="users-list-status">Status</label>
                <fieldset class="form-group">
                    <select class="form-control" id="users-list-status">
                        <option value="">Any</option>
                        <option value="Active">Active</option>
                        <option value="Close">Close</option>
                        <option value="Banned">Banned</option>
                    </select>
                </fieldset>
            </div>
            <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                <button class="btn btn-block btn-primary glow">Show</button>
            </div>
        </div>
    </form>
</div>
<div class="users-list-table">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <!-- datatable start -->
                <div class="table-responsive">
                    <table id="users-list-datatable" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <!-- <th>username</th> -->
                                <th>Status</th>
                                <th>In Process Jobs</th>
                                <th>Completed Jobs</th>
                                <th>Cancelled Jobs</th>
                                 <!-- <th>Year</th>
                                <th>Production Date</th>

                                <th>edit</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>334</td>
                                <td><span class="badge badge-danger">wholesale</span></td>
                                <td>graham0301
                                </td>
                                 <td>abc@gmail.com</td>
                                <td>2422424242</td>
                                <!-- <td>N24cco</td>
                                 <td>cxcxcccx</td>
                                <td><a href="#"><i class="ft-edit-1"></i></a>
                                </td> -->
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- datatable ends -->
            </div>
        </div>
    </div>
</div>
</section>
@endsection
@section('css_lib')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/pages/page-users.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

@endsection
@section('scripts_lib')
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('/modules/vender')}}/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('/modules/vender')}}/app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="{{asset('/modules/vender')}}/app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
    <script src="{{asset('/modules/vender')}}/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('/modules/vender')}}/app-assets/js/core/app-menu.js"></script>
    <script src="{{asset('/modules/vender')}}/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('/modules/vender')}}/app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
    <script src="{{asset('/modules/vender')}}/app-assets/js/scripts/pages/page-users.js"></script>
    <!-- END: Page JS-->

@endsection
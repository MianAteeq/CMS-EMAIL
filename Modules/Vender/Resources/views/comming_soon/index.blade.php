@extends('vender::layouts.master')
@section('content')

<section class="flexbox-container mt-5">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-6 col-10 p-0">
                <div class="card card-transparent box-shadow-0 border-0">
                    <div class="card-content">
                        <div class="text-center">
                            <h5 class="card-text pb-2 balck">Thank for Registration.</h5>
                            <img src="{{ URL::to($setting['headerlogo'])}}"
                                class="img-responsive block width-300 mx-auto" width="300" alt="bg-img">
                            <div id="clockImage" class="card-text getting-started mt-3 white d-inline-block"></div>
                            <div class="col-12 pt-1">
                                <h6 class="card-text lead black">Thanks for Registration we are review your account and notify as soon as possible</h6>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@section('css_lib')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/vendors/css/vendors.min.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/vendors/css/tables/datatable/datatables.min.css">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/colors.css">
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/components.css">
<!-- END: Theme CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/css/core/menu/menu-types/horizontal-menu.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/css/core/colors/palette-gradient.css">
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
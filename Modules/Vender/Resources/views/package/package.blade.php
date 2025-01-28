@extends('vender::layouts.master')
@section('content')
<section id="social-cards-glow">
    <div class="row">
        <div class="col-12 mt-3 mb-1">
            <h4 class="text-uppercase">Pricing & Plan</h4>

        </div>
    </div>
    <div class="row mt-2 mb-3">
        <div class="col-xl-2 col-md-1 col-12">
        </div>
        @foreach ($packages as $package)
        <div class="col-xl-3 col-md-6 col-12">
            <div class="card profile-card-with-cover" style="box-shadow: 0 0 15px rgb(0 0 0 / 14%);border: 1px solid #dddddd;border-radius: 8px;-webkit-border-radius: 8px;padding: 18px;height: 100%;">
                <div class="card-content card-deck text-center">
                    <div class="card box-shadow">
                        <div class="card-header pb-0">
                            <h2 class="my-0 font-weight-bold danger">{{ $package['name'] }}</h2>

                        </div>

                        <div class="card-body">
                            <h1 class="pricing-card-title">£ {{ $package['price'] }} <small class="text-muted">/ {{
                                    $package['time'] }}</small></h1>
                            <p><a type="button" href="{{ route('vender.package.checkout',$package['id']) }}" style="width: auto;font-weight: bold;font-size: 14px;border-radius: 60px;padding: 15px 24px;background: #159957;color: #fff !important;margin-top: 30px">
                                                        Buy Nows</a></p>
                            <ul class="list-unstyled mt-2 mb-2 list-check" style="padding-top: 40px;margin: 0 -18px;">
                                @foreach ($package['features'] as $feature)
                                <li> <i class="la la-check"></i> {{ $feature['name'] }}</li>

                                @endforeach


                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
        

    </div>
    <div class="row mt-2 mb-3">
        <div class="clearfix col-md-2 mt-2"></div>
        <div class="clearfix col-md-9 mt-3 info-outer">
            <h3>About your subscription</h3>
            <p>All subscriptions will be automatically renewed from your selected payment method on a recurring basis and
                we'll
                send you a receipt each time. We do not store your card details. You can upgrade, downgrade or cancel
                anytime.
                If the subscription is canceled, refunds and termination of access will follow the Terms of Service. Prices
                are
                in US Dollars</p><br>
            <div class="row">
                <div class="col-md-5">
                    <h4><a href="mailto:info@awebstar.com.sg"><i class="la la-envelope"></i> info@linkmoto.com</a></h4>
                    <p>For payments and billing questions</p>
                </div>
                <div class="col-md-7 elements-right">
                    <h4><i class="la la-phone"></i> +1 (877) 893-2591</h4>
                    <p>24 hours - Monday to Friday</p>
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

<style>
    .list-check li {
        display: -ms-flexbox;
        display: flex;
        padding: 8px 15px;
        border-bottom: 1px solid #f0eded;
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important;
    }

    .la-check {
        color: #3daf2c;
        font-size: 16px;
        font-weight: 300;
        background: #ebfaef;
        border-radius: 50%;
        padding: 0;
        width: 25px;
        margin-right: 10px;
        height: 25px;
        text-align: center;
        line-height: 25px;
    }
    .info-outer {
    padding: 17px 25px;
    background: #fffccf;
    border-radius: 15px;
    border: 4px solid #ffcb00;
    }
    .sms-recharge h3 {
    margin: 0 0 10px;
    }
</style>
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
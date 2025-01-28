@extends('vender::layouts.master')
@section('content')

<section class="card">
    <div id="invoice-template" class="card-body p-4">
        <!-- Invoice Company Details -->
        <div id="invoice-company-details" class="row">
            <div class="col-sm-6 col-12 text-center text-sm-left">
                <div class="media row">
                    <div class="col-12 col-sm-3 col-xl-2">
                        <img src="{{asset($setting['headerlogo'])}}" style="width: 200px;" alt="company logo" class="mb-1 mb-sm-0" />
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-12 text-center text-sm-right">
                <h2>INVOICE</h2>
                <p class="pb-sm-3"># INV-001001</p>
                <ul class="px-0 list-unstyled">
                    <li>Balance Due</li>
                    <li class="lead text-bold-800">£ 12,000.00</li>
                </ul>
            </div>
        </div>
        <!-- Invoice Company Details -->

        <!-- Invoice Customer Details -->
        <div id="invoice-customer-details" class="row pt-2">
            <div class="col-12 text-center text-sm-left">
                <p class="text-muted">Bill To</p>
            </div>
            <div class="col-sm-6 col-12 text-center text-sm-left">
                <ul class="px-0 list-unstyled">
                    <li class="text-bold-800">Mr. Bret Lezama</li>
                    <li>4879 Westfall Avenue,</li>
                    <li>Albuquerque,</li>
                    <li>New Mexico-87102.</li>
                </ul>
            </div>
            <div class="col-sm-6 col-12 text-center text-sm-right">
                <p><span class="text-muted">Invoice Date :</span> 06/05/2019</p>
                <p><span class="text-muted">Terms :</span> Due on Receipt</p>
                <p><span class="text-muted">Due Date :</span> 10/05/2019</p>
                <p><span class="text-muted">Status :</span> Unpaid</p>

            </div>
        </div>
        <!-- Invoice Customer Details -->

        <!-- Invoice Items Details -->
        <div id="invoice-items-details" class="pt-2">
            <div class="row">
                <div class="table-responsive col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Item & Description</th>
                                <th class="text-right">Rate</th>
                                <!-- <th class="text-right">Hours</th> -->
                                <th class="text-right">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <p>Typre Service</p>
                                   
                                    </p>
                                </td>
                                <td class="text-right">£ 20.00</td>
                                <!-- <td class="text-right">120</td> -->
                                <td class="text-right">£ 20.00</td>
                            </tr>
                            
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <p>Engine Service</p>
                                   
                                    </p>
                                </td>
                                <td class="text-right">£ 30.00</td>
                                <!-- <td class="text-right">120</td> -->
                                <td class="text-right">£ 30.00</td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7 col-12 text-center text-sm-left">
                    <p class="lead">Payment Methods:</p>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="table-responsive">
                                <table class="table table-borderless table-sm">
                                    <tbody>
                                        <tr>
                                            <td>Bank name:</td>
                                            <td class="text-right">Stripe/Cash</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 col-12">
                    <p class="lead">Total due</p>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Sub Total</td>
                                    <td class="text-right">£ 14,900.00</td>
                                </tr>
                                <tr>
                                    <td>TAX (12%)</td>
                                    <td class="text-right">£1,788.00</td>
                                </tr>
                                <tr>
                                    <td class="text-bold-800">Total</td>
                                    <td class="text-bold-800 text-right"> £16,688.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Invoice Footer -->
        <div id="invoice-footer">
            <div class="row">
                <div class="col-sm-7 col-12 text-center text-sm-left">
                    <h6>Terms & Condition</h6>
                    <p>Test pilot isn't always the healthiest business.</p>
                </div>
                <div class="col-sm-5 col-12 text-center">
                    <button type="button" class="btn btn-info btn-print btn-lg my-1"><i class="la la-paper-plane-o mr-50"></i>
                        Print
                        Invoice</button>
                </div>
            </div>
        </div>
        <!-- Invoice Footer -->

    </div>
</section>
@endsection
@section('css_lib')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/vendors/css/vendors.min.css">
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
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/pages/invoice.css">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!-- END: Custom CSS-->

@endsection
@section('scripts_lib')
<!-- BEGIN: Vendor JS-->
<script src="{{asset('/modules/vender')}}/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('/modules/vender')}}/app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="{{asset('/modules/vender')}}/app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('/modules/vender')}}/app-assets/js/core/app-menu.js"></script>
<script src="{{asset('/modules/vender')}}/app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('/modules/vender')}}/app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
<script src="{{asset('/modules/vender')}}/app-assets/js/scripts/pages/invoice-template.js"></script>
<!-- END: Page JS-->

@endsection
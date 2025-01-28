@extends('vender::layouts.master')
@section('content')
<section id="social-cards-glow">
    <div class="row">
        <form method="POST" action="#" id="form" style="width: 100%">
            @csrf
            <input type="hidden" name="stripe_token" value="" id="stripe_token">
        <div class="col-12 mt-3 mb-1">
            <h4 class="text-uppercase">Checkout</h4>
            <div class="flex flex-wrap">

                <div class="col-sm-12 col-xs-12 col-md-12 p-4">
                    <h2 class="checkout-header">Confirm Your Subscriptions</h2>
                    <div class="checkout-bar">
                        <div class="subscriptions">
                            <div class="redm row">
                                <div class="col-md-12">
                                    <h3>Select Subscription </h3>
                                    <ul class="little-list">
                                        <li>
                                            <label class="checklabel"><input type="radio" name="package_id"
                                                    style="display: none" value="{{ $package['id'] }}"
                                                    data-currency="USD" data-price="59.00" checked=""><span style="border: none;">POUND {{ number_format($package['price'],2) }} / {{ $package['time'] }}
                                                     </span></label>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="redm row">
                                <div class="col-md-6">
                                    <div class="total_price">
                                        <label for="tt">Total Amount: </label>
                                        <span class="total_price">POUND {{ number_format($package['price'],2) }}</span>
                                    </div>
                                </div>
                            </div>








                        </div>
                        <div class="card_detail1" style="border-top: 1px solid rgb(238, 238, 238); padding: 15px;">

                            <input type="hidden" id="payment_method" name="payment_method" value="Stripe">

                            <div class="payment-header1 row">
                                <div class="col-md-6">
                                    <div class="payment-option">
                                        <img src="https://salonist.io/images/credit-card01.png">
                                        <h3>Credit card</h3>
                                    </div>
                                </div>
                                <div class="col-md-6 text-right">
                                    <ul class="card_icon01">
                                        <li><img src="https://salonist.io/images/amex-card.png"></li>
                                        <li><img src="https://salonist.io/images/master-card.png"></li>
                                        <li><img src="https://salonist.io/images/visa-card.png"></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="box-body collapse-body card-details">
                                <div class="error m-2"></div>
                                <div class="success m-2"></div>
                                <div class="row">
                                    

                                   <div class="col-md-1"></div>
                                   <div class="col-md-9">
                                    <div id="card-element" class="mt-2">
                                   </div>


                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-1"></div>
                                    <div class="col-sm-10 col-xs-12 securely">
                                        <p><i class="la la-lock" aria-hidden="true"></i> All credit-card data data is
                                            securely processed
                                            through our payment partner.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="textfield" class="control-label"></label>
                                            <div class="controls">
                                                <p><button type="submit" class="btn btn-info payBtn"> <img class="show-loader" style="width: 40px;height: 30px;display:none" src="{{ URL::to('assets/images/gif.gif') }}"> Paying Now</button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </form>

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

<script src="https://js.stripe.com/v3/"></script>
<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
<!-- END: Custom CSS-->

<style>
    h2.checkout-header {
        margin: 0;
        padding: 15px;
        font-size: 22px;
        color: #fff;
        background: #2a3855;
        font-family: roboto;
        font-weight: 500;
    }

    .checkout-bar {
        border: 1px solid #d9d9d9;
        background: #f3f6fd;
        display: inline-block;
        width: 100%;
        box-shadow: 0 0 15px rgb(0 0 0 / 12%);
        -webkit-box-shadow: 0 0 15px rgb(0 0 0 / 12%);
    }

    .subscriptions {
        background: #fff;
        padding: 15px;
    }

    .redm.row {
        margin: 10px 0;
    }

    .subscriptions li {
        display: inline-block;
        font-size: 19px;
        font-family: normal;
    }

    .little-list li {
        display: block;
    }

    .subscriptions label {
        /* font-size: 12px; */
        font-weight: 400;
        margin: 0;
    }

    .checklabel {
        position: relative;
    }

    .subscriptions input[type="radio"] {
        width: auto;
    }

    .checklabel input[type="radio"] {
        visibility: hidden;
        position: absolute;
        opacity: 0;
    }

    .subscriptions input {
        border: 0;
        width: 100%;
        border-bottom: 1px solid #d7d7d7;
        padding: 5px 0;
        color: #333;
        font-weight: 600;
    }

    .checklabel input[type="radio"]:checked+span {
        color: #159957;
        border-color: #159957;
        background-color: transparent !important;
    }

    .checklabel input[type="radio"]:checked+span:after {
        border: 0px solid transparent;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        background: url(../images/check_icon.png) no-repeat !important;
        background-size: cover !important;
        content: '';
    }

    .checklabel input[type="radio"]+span:after {
        width: 20px;
        height: 20px;
        position: absolute;
        left: 3px;
        top: 3px;
        border: 2px solid #b7b4b4;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        content: '';
    }

    .subscriptions span {
        font-size: 18px;
        font-weight: 700;
        display: block;
        padding: 5px 0;
        border-bottom: 1px solid #d7d7d7;
    }

    .subscriptions label {
        font-size: 12px;
        font-weight: 400;
        margin: 0;
    }

    .payment-header1 {
        margin-top: 30px;
    }

    .payment-option {
        display: inline-block;
        border: 1px solid #0fc382;
        border-radius: 5px;
        padding: 15px;
        margin-left: 15px;
        position: relative;
    }

    .payment-option:before {
        border-color: #0fc382 transparent;
        border-style: solid;
        border-width: 1.125rem 1.125rem 0 0;
        content: "";
        left: 0;
        position: absolute;
        top: 0;
    }

    .payment-option img {
        display: inline-block;
        max-width: 36px;
        vertical-align: middle;
        margin-right: 5px;
    }

    .payment-option h3 {
        margin: 0;
        font-size: 18px;
        display: inline-block;
        vertical-align: middle;
    }

    .card_icon01 {
        padding-top: 15px;
        padding-right: 30px;
    }

    .card_icon01 li {
        display: inline-block;
        max-width: 40px;
    }

    .card_icon01 li img {
        width: 100%;
    }
    .StripeElement {
    background-color: #dddddd40;
    height: 60px;
    border: 1px solid #ddd !important;
    padding: 23px 8px;
    border-radius: 4px;
    border: 1px solid transparent;
    box-shadow: 0 1px 3px 0 #e6ebf1;
    -webkit-transition: box-shadow 150ms ease;
    transition: box-shadow 150ms ease;
    
    }
    
    .StripeElement--focus {
    box-shadow: 0 1px 3px 0 #cfd7df;
    }
    
    .StripeElement--invalid {
    border-color: #fa755a;
    }
    
    .StripeElement--webkit-autofill {
    background-color: #fefde5 !important;
    }
    .securely p {
    color: #989898;
    padding-left: 15px;
    margin-bottom: 30px;
    }
    .StripeElement {
    background-color: #dddddd40;
    height: 38px;
    border: 1px solid #ddd !important;
    /* padding: 23px 8px; */
    border-radius: 4px;
    border: 1px solid transparent;
    box-shadow: 0 1px 3px 0 #e6ebf1;
    -webkit-transition: box-shadow 150ms ease;
    transition: box-shadow 150ms ease;
    padding: 9px 6px;
    background: #fff;
    line-height: 20px;
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

<script>
    var stripe = Stripe(`pk_test_9jgjsQVQTSPOOcDiQwv2mc34`);
    var elements = stripe.elements();
    var style = {
        base: {
        color: '#32325d',
        lineHeight: '18px',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
        color: '#aab7c4'
        }
    },
        invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
        }
    };
    
    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});
    
    // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');
        $(document).on('submit','#form',function (e) {
                e.preventDefault();
                
                $('.show-loader').css("display", "revert");
                stripe.createPaymentMethod({
                type: 'card',
                card: card,
                
                }).then(setOutcome2);
        
        });
        function setOutcome2(result) {
                console.log(result.paymentMethod);
                var successElement = document.querySelector('.success');
                var errorElement = document.querySelector('.error');
                successElement.classList.remove('visible');
                errorElement.classList.remove('visible');
                
                if (result.paymentMethod) {
                
                
                $('#stripe_token').val(result.paymentMethod.id);
                
                
                
                submitForm(result.paymentMethod.id);
                
                
                } else if (result.error) {
                errorElement.textContent = result.error.message;
                errorElement.classList.add('visible');
                console.log(result.error);
                $('.show-loader').css("display", "none");
                }
        
        }
        function submitForm(token){
        
        let record=$('#form').serialize();
        $('.show-loader').css("display", "revert");
        
        
        
        
        
        
        
        $.ajax({
        type: 'POST',
        url: '{{ route('vender.package.checkout.submit') }}',
        data: record,
        success: function (response) {
        
        if(response.success){
        window.location.href = "/vender";
        }
        
        
        },
        error: function (error) {
        $('.show-loader').css("display", "none");
       
       
        
        $('#from-error').text(`- ${error.responseJSON.errors}`);
        $("#focus_point").attr("tabindex",-1).focus();
        
        
        }
        });
        
        
        }
</script>

@endsection
@extends('frontend::new-layouts.master')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .select2-container {
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle;
    width: 53% !important;
}
.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 2px solid black;
    border-radius: 6px;
    border-color: black !important;
}
</style>
<style>
    .skeleton-box {
  display: inline-block;
  height: 1em;
  position: relative;
  overflow: hidden;
  background-color: #DDDBDD;
}
.skeleton-box::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  transform: translateX(-100%);
  background-image: linear-gradient(90deg, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0.2) 20%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0));
  -webkit-animation: shimmer 5s infinite;
          animation: shimmer 5s infinite;
  content: "";
}
@-webkit-keyframes shimmer {
  100% {
    transform: translateX(100%);
  }
}
@keyframes shimmer {
  100% {
    transform: translateX(100%);
  }
}

.blog-post__headline {
  font-size: 1.25em;
  font-weight: bold;
}
.blog-post__meta {
  font-size: 0.85em;
  color: #6b6b6b;
}

.o-media {
  display: flex;
}
.o-media__body {
  flex-grow: 1;
  margin-left: 1em;
}

.o-vertical-spacing > * + * {
  margin-top: 0.75em;
}
.o-vertical-spacing--l > * + * {
  margin-top: 2em;
}

* {
  box-sizing: border-box;
}




main {
  margin-top: 3em;
}
hr {
    margin-top: 0rem;
    margin-bottom: 0rem;
    border: 0;
    border-top: 2px solid rgba(0, 0, 0, 0.1);
}
.TestModeNotch {
    justify-self: center;
    position: absolute;
    z-index: 1;
    display: none;
}
</style>
@endsection

@section('content')

<div class="content-body">
    <div  class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12">
           <h3 class="h3">Business registration application</h3>
        </div>

    </div>

    <div class="row" style="margin-top: 10px;">
        <div class="col-md-4">

            <h4 class="h3" style="border-radius: 7px;border: 2px solid black;padding: 10px;font-weight: 600;
            font-size: 17px; "> <img src="/home.png" style="width: 22px;margin-top: -5px;" > Stripe Direct Debit Mendate</h2>




        </div>


        <div class="col-md-8" style="border: 2px solid black;border-radius: 8px;padding:inherit">
            <form id="payment-form" id="contens" @if ($user['profile']['package_id']==null || $user['profile']['customer_id']==null) style="display: none" @endif>
            <div class="link-body" style="padding: 10px">
                <h2 class="h3 mb-2"> Stripe Direct Debit Mendate</h5>
                    @if($user['subscription'])

                   <div class="text-center">
                    @if (isset($package) && $package['price']>0)
                    <img src="{{URL::to('paymentstatusreview.png')}}" alt="">
                    @else

                    @if(count($payment_method)>0)

                    <div class="row mt-4 mb-1">
                        <div class="col-sm-5" style="text-align: left;">
                            <h6 class="mb-0">Account Name</h6>
                        </div>
                        <div class="col-sm-7 text-secondary" style="text-align: left;">
                           {{$user['name']}}  {{$user['last_name']}}
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-2 mb-1">
                        <div class="col-sm-5" style="text-align: left;">
                            <h6 class="mb-0">Account No</h6>
                        </div>
                        <div class="col-sm-7 text-secondary" style="text-align: left;">
                          ..... {{$payment_method['data'][0]['bacs_debit']['last4']}}
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-2 mb-1">
                        <div class="col-sm-5" style="text-align: left;">
                            <h6 class="mb-0">Sort Code</h6>
                        </div>
                        <div class="col-sm-7 text-secondary" style="text-align: left;">
                            {{$payment_method['data'][0]['bacs_debit']['sort_code']}}
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-2 mb-1">
                        <div class="col-sm-5" style="text-align: left;">
                            <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-7 text-secondary" style="text-align: left;">
                            {{$payment_method['data'][0]['billing_details']['address']['line1']}}, {{$payment_method['data'][0]['billing_details']['address']['line2']}} ,  {{$payment_method['data'][0]['billing_details']['address']['city']}} , {{$payment_method['data'][0]['billing_details']['address']['postal_code']}}
                        </div>
                    </div>
                    @endif

                    @endif
                   </div>

                    @else
                    <main class="main">
                        <ul class="o-vertical-spacing o-vertical-spacing--l">
                          <li class="blog-post o-media">

                            <div class="o-media__body">
                              <div class="o-vertical-spacing">
                                <h3 class="blog-post__headline">
                                  <span class="skeleton-box" style="width:55%;"></span>
                                </h3>
                                <p>
                                  <span class="skeleton-box" style="width:80%;"></span>
                                  <span class="skeleton-box" style="width:90%;"></span>
                                  <span class="skeleton-box" style="width:83%;"></span>
                                  <span class="skeleton-box" style="width:80%;"></span>
                                </p>
                                <div class="blog-post__meta">
                                  <span class="skeleton-box" style="width:70px;"></span>
                                </div>
                              </div>
                            </div>
                          </li>


                        </ul>
                      </main>
                      <div id="link-authentication-element">
                        <!-- Elements will create authentication element here -->
                      </div>

                        <div id="payment-element" style="width: 59%;margin-left: 19%;">
                            <!-- Elements will create form elements here -->
                        </div>

                        @endif













                    </div>
                    @if (isset($package) && $package['price']>0 || $user['subscription'])
                <div class="footers">
                @if($user['subscription'])
                <a href="{{route('vender.profile.term')}}"><button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">NEXT</button></a>
                @else
                <button type="submit" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">NEXT</button>
                @endif
                <a href="{{route('vender.profile.term')}}?is_save_later=1"><button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">SAVE AND EXIT</button></a>
                 <a href="{{route('vender.profile.back',$user['profile']['step'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                    style="float: right;">PREVIOUS</button></a>

            </div>
            @endif
            </form>
            @if ($user['profile']['package_id']==null && $user['profile']['customer_id']==null )
              <p style="padding: 10px;">
                <span>Complusory Steps</span>
                <ul>
                    <li>
                        Main Conatct is In Complete
                    </li>
                    <li>
                        Subscription is In Complete
                    </li>
                </ul>

              </p>
              @endif

        </div>

    </div>

</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
    var contentHeight = $('#contens').height();
    $('#contens').height(contentHeight);
});
</script>
<script src="https://js.stripe.com/v3/"></script>
@if (isset($package) && $package['price']>0)
<script>

    document.addEventListener('DOMContentLoaded', async () => {
    const publishableKey = "pk_test_51MM85pBv6oafSIoJa1bKwmafuZyW1iLqWKoigKrDavVFwBJSBBaUqafQY0TlNOcXWMpYh4apoHU1G5GrGrgjqew500a6CTrbmI";
    console.log(publishableKey);

    const stripe = Stripe(publishableKey, {
        apiVersion: '2020-08-27',
    });

    const {
        error: backendError,
        clientSecret
    } = await fetch('/vender/profile/payment/intent').then(r => r.json());
    if (backendError) {
        addMessage(backendError.message);
    }
    $('.main').hide();

    const elements = stripe.elements({ clientSecret });
    const paymentElement = elements.create('payment');
    paymentElement.mount('#payment-element');

        const form = document.getElementById('payment-form');
        let submitted = false;
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            if(submitted) { return; }
            submitted = true;
            form.querySelector('button').disabled = true;

            const nameInput = document.querySelector('#name');


            const {error: stripeError} = await stripe.confirmPayment({
            elements,
            confirmParams: {
                return_url: `${window.location.origin}/vender/profile/term/condition`,
            }
            });

            if (stripeError) {
            console.log(stripeError.message,"stripeError.message");


            submitted = false;
            form.querySelector('button').disabled = false;
            return;
            }
        });

    });

</script>

@else

<script>
    const stripe = Stripe('pk_test_51MM85pBv6oafSIoJa1bKwmafuZyW1iLqWKoigKrDavVFwBJSBBaUqafQY0TlNOcXWMpYh4apoHU1G5GrGrgjqew500a6CTrbmI');

        initialize();

        // Fetch Checkout Session and retrieve the client secret
        async function initialize() {
        const fetchClientSecret = async () => {
        const response = await fetch("/vender/profile/payment/intent", {
        method: "GET",
        });
        const { clientSecret } = await response.json();
        return clientSecret;
        };

        // Initialize Checkout
        const checkout = await stripe.initEmbeddedCheckout({
        fetchClientSecret,
        });

        // Mount Checkout
        checkout.mount('#payment-element');
        $('.main').hide();
        }
  </script>

@endif


@endsection

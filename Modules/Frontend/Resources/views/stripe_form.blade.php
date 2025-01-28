
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('modules/website/subscription_form.css')}}" rel="stylesheet">

    <style>
        .row-eq-height {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 100vh;
        }

        .customeStyle {
            box-shadow: 0 0 30px rgb(0 0 0 / 8%);
            padding: 15px;
        }
    </style>

</head>

<body style="overflow: hidden;">
    <section class="contaienr-fluid">
        <div class="row card-mbl">
            <div class="col-lg-6 m-auto text-center pt-2">
                <div>
                    <a href="javascript:void(0)" class="text-secondary"><i class="fa fa-arrow-left pr-1"></i>
                        LinkMoto Inc.
                    </a>
                </div>
                <div class="mt-5 mb-5">
                    <h5>Welcome LinkMoto Member!</h5>
                    <h5>Kindly complete your Payment process</h5>
                </div>
                <a href="javascript:void(0)">
                    <img src="{{asset('modules/website/assets/img/logo.png')}}" class="w-50" alt="logo" />
                </a>
            </div>
            <div class="col-lg-6 row-eq-height card card-payment">
                <div class="row card-body">
                    <div class="col-md-8 offset-md-2 offset-sm-0 form-top m-auto customeStyle">
                        <form method="POST" action="{{route('website.subscription.orderPost')}}" id="payment_form">
                            @csrf
                            <div class="form-group">
                                <label class="mb-1">Name</label>
                                <input id="card-holder-name" class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label class="mb-1">Card</label>
                                <div id="card-element" class="form-control"></div>
                            </div>
                            <button type="button" class="btn btn-primary btn-block" style="font-weight: 800;">Total Amount ${{Modules\Admin\Entities\Packages::where('id',Session::get('package_id'))->first()->price}}</button>
                            <button type="button" class="btn btn-success btn-block" style="font-weight: 800;" id="card-button" data-secret="{{ $intent->client_secret }}">
                                Pay
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <script src="https://influencer.deviotech.com/front/vendor/jquery/jquery.min.js"></script> -->
    <!-- <script src="https://influencer.deviotech.com/front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <!-- <script src="//influencer.deviotech.com/modules/admin/vendors/js/extensions/toastr.min.js"></script> -->
    <!-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-primary text-center">
                <strong>Link Moto</strong>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <form method="POST" action="{{route('website.subscription.orderPost')}}" id="payment_form">
                @csrf
                <div class="row">
                    <div class="form-group">
                        <label>Name</label>
                        <input id="card-holder-name" class="form-control" type="text">
                    </div>
                    <div id="card-element" class="form-control"></div>

                    <button type="button" class="btn btn-success" id="card-button" data-secret="{{ $intent->client_secret }}">
                        Pay
                    </button>
                </div>
            </form>
        </div>
    </div> -->


    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('<?php echo env('Publishable_key') ?>');
        const elements = stripe.elements();
        const cardElement = elements.create('card');
        cardElement.mount('#card-element');
        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;
        cardButton.addEventListener('click', async (e) => {
            const {
                setupIntent,
                error
            } = await stripe.confirmCardSetup(
                clientSecret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: {
                            name: cardHolderName.value
                        }
                    }
                }
            );
            if (error) {
                console.log(error);
                // Display "error.message" to the user...
            } else {
                stripeResponseHandler(setupIntent);
                // The card has been verified successfully...
            }
        });

        function stripeResponseHandler(setupIntent) {
            var form = document.getElementById('payment_form');
            var hiddeninput = document.createElement('input');
            hiddeninput.setAttribute('type', 'hidden');
            hiddeninput.setAttribute('name', 'paymentMethod');
            hiddeninput.setAttribute('value', setupIntent.payment_method);
            form.appendChild(hiddeninput);
            form.submit();
        };
    </script>
</body>

</html>
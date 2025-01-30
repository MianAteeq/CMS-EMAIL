<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>

      <body>
        <img src="{{$img}}" alt="">
        {{-- <div id="checkout">
          <!-- Checkout will insert the payment form here -->
        </div> --}}
      </body>


      <script>
        const stripe = Stripe('pk_test_51MM85pBv6oafSIoJa1bKwmafuZyW1iLqWKoigKrDavVFwBJSBBaUqafQY0TlNOcXWMpYh4apoHU1G5GrGrgjqew500a6CTrbmI');

initialize();

// Fetch Checkout Session and retrieve the client secret
async function initialize() {
  const fetchClientSecret = async () => {
    const response = await fetch("/create-checkout-session", {
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
  checkout.mount('#checkout');
}
      </script>
</body>

</html>



<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('modules/website/assets/css/bootstrap.min.css')}}">
<!-- Meanmenu CSS -->
<link rel="stylesheet" href="{{asset('modules/website/assets/css/meanmenu.css') }}">
<!-- Boxicons CSS -->
<link rel="stylesheet" href="{{asset('modules/website/assets/css/boxicons.min.css') }}">
<!-- Owl Carousel -->
<link rel="stylesheet" href="{{asset('modules/website/assets/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{asset('modules/website/assets/css/owl.theme.default.min.css') }}">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="{{asset('modules/website/assets/css/magnific-popup.min.css') }}">
<!-- Animate CSS -->
<link rel="stylesheet" href="{{asset('modules/website/assets/css/animate.min.css') }}">
<!-- Style CSS -->
<link rel="stylesheet" href="{{asset('modules/website/assets/css/style.css') }}">
<!-- Responsive CSS -->
<link rel="stylesheet" href="{{asset('modules/website/assets/css/responsive.css') }}">
<!-- Theme Dark CSS -->
<link rel="stylesheet" href="{{asset('modules/website/assets/css/theme-dark.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="icon" type="image/png" href="@if(!empty($setting['favicon'])) {{$setting['favicon']}} @endif">

@yield('css')
<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('frontend::layout.header')
    
    <title>Home - Link Moto</title>
</head>

<!-- Preloader -->
<div class="loader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader -->
@yield('content')
<!-- Navbar -->
@include('frontend::layout.menu')

<!-- Footer -->
@include('frontend::layout.footer')
<!-- End Footer -->
@include('frontend::layout.scripts')
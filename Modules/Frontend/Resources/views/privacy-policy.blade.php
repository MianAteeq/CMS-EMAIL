@extends('frontend::layout.app')
@section('content')
        <!-- Page Title -->
        <div class="page-title-area">
            <img src="assets/img/home-one/footer-car.png" alt="Title">
            <div class="container">
                <div class="page-title-content">
                    <h2>Privacy Policy</h2>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Privacy -->
        <section class="privacy-area pt-100">
            <div class="container">
               {!! $setting['privacy_policy'] !!}
            </div>
        </section>
        <!-- End Privacy -->


        @endsection
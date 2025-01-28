@extends('frontend::layout.app')
@section('content')
    <!-- Page Title -->
    <div class="page-title-area">
        <img src="@if(!empty($setting['servicesBanner'])) {{$setting['servicesBanner']}} @else {{asset('modules/website/assets/img/home-one/footer-car.png')}} @endif" alt="Title">
        <div class="container">
            <div class="page-title-content">
                <h2>Services</h2>
                <ul>
                    <li>
                        <a href="<?php echo route('website.index'); ?>">Home</a>
                    </li>
                    <li>
                        <i class='bx bx-chevron-right'></i>
                    </li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Service -->
    <section class="pt-100 pb-70">
        <div class="container">
            <div class="row">
              @foreach ($services as $service)
                <div class="col-sm-6 col-lg-4">
                    <a >
                        <div class="service-item">
                            <div class="service-img">
                                <img src="{{ asset($service['image']??'modules/website/assets/img/home-one/service/1.jpg') }}"
                                    alt="Service">
                            </div>
                            <div class="service-content">
                                <i class='bx bx-car'></i>
                                <i class='bx bx-car service-icon'></i>
                                <h3>{{ $service['name'] }}</h3>
                                <p>{{ $service['description'] }} </p>
                            </div>
                        </div>
                    </a>
                </div>
                
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Service -->
    @endsection
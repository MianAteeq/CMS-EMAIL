@extends('admin::admin.layout.app')
@section('css_custom')
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
@endsection
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Site Configuration</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Site Configuration</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content-body">
    <section id="page-account-settings">
        <div class="row">
            <!-- left menu section -->
            <div class="col-md-3 mb-2 mb-md-0">
                <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                    <li class="nav-item">
                        <a class="nav-link d-flex active" id="account-pill-general" data-toggle="pill"
                            href="#account-vertical-general" aria-expanded="true">

                            General info
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex " id="account-pill-site-info" data-toggle="pill"
                            href="#account-vertical-site-info" aria-expanded="true">

                            Site Info
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex " id="account-pill-scoial-info" data-toggle="pill"
                            href="#account-vertical-scoial-info" aria-expanded="true">

                            Social Info
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex " id="account-pill-seo-info" data-toggle="pill"
                            href="#account-vertical-seo-info" aria-expanded="true">

                            Seo Info
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex " id="account-pill-payment-info" data-toggle="pill"
                            href="#account-vertical-payment-info" aria-expanded="true">

                            Payment settings
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex " id="account-pill-homepage-info" data-toggle="pill"
                            href="#account-vertical-homepage-info" aria-expanded="true">

                            Home Page
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex " id="account-pill-aboutpage-info" data-toggle="pill"
                            href="#account-vertical-aboutpage-info" aria-expanded="true">

                            About Page
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex " id="account-pill-aboutpage-info" data-toggle="pill"
                            href="#account-vertical-privacy-info" aria-expanded="true">

                            Privacy Page
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex " id="account-pill-services" data-toggle="pill"
                            href="#account-vertical-services" aria-expanded="true">

                            Banner
                        </a>
                    </li>
                   

                </ul>
            </div>
            <!-- right content section -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="account-vertical-general"
                                    aria-labelledby="account-pill-general" aria-expanded="true">
                                    <form method="POST" action="{{route('admin.settings.store')}}"
                                        enctype="multipart/form-data" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Header logo
                                                        <small class="text-muted">(Header logo)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="headerlogo" data-default-file="{{ URL::to($setting['headerlogo']??'') }}"
                                                            class="form-control date-inputmask dropify" type="file"
                                                            placeholder="Header logo">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Footer logo
                                                        <small class="text-muted">(Footer logo)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="footerlogo"
                                                            class="form-control date-inputmask dropify" data-default-file="{{ URL::to($setting['footerlogo']??'') }}" type="file"
                                                            placeholder="Footer logo">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Fav icon
                                                        <small class="text-muted">(Fav icon)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="favicon"
                                                            class="form-control date-inputmask dropify" data-default-file="{{ URL::to($setting['favicon']??'') }}" type="file"
                                                            placeholder="Fav icon">

                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div role="tabpanel" class="tab-pane " id="account-vertical-site-info"
                                    aria-labelledby="account-pill-general" aria-expanded="true">
                                    <form method="POST" action="{{route('admin.settings.store')}}"
                                        enctype="multipart/form-data" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Email
                                                        <small class="text-muted">(Email)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="email" class="form-control date-inputmask" value="{{ $setting['email']??'' }}"
                                                            type="text" placeholder="Email">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Phone
                                                        <small class="text-muted">(Phone)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="phone" class="form-control date-inputmask" value="{{ $setting['phone']??'' }}"
                                                            type="text" placeholder="Phone">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Address
                                                        <small class="text-muted">(Address)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="address" class="form-control date-inputmask" value="{{ $setting['address']??'' }}"
                                                            type="text" placeholder="Address">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Site Description
                                                        <small class="text-muted">(Site Description)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="description" class="form-control date-inputmask" value="{{ $setting['description']??'' }}"
                                                            type="text" placeholder="Site Description">
                                                        <!-- <textarea name="description" id="" class="summernote"></textarea> -->
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div role="tabpanel" class="tab-pane " id="account-vertical-scoial-info"
                                    aria-labelledby="account-pill-general" aria-expanded="true">
                                    <form method="POST" action="{{route('admin.settings.store')}}"
                                        enctype="multipart/form-data" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>facebook
                                                        <small class="text-muted">(facebook)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="facebook" class="form-control date-inputmask" value="{{ $setting['facebook']??'' }}"
                                                            type="text" placeholder="facebook">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>twitter
                                                        <small class="text-muted">(twitter)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="twitter" class="form-control date-inputmask" value="{{ $setting['twitter']??'' }}"
                                                            type="text" placeholder="twitter">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>insta
                                                        <small class="text-muted">(insta)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="insta" class="form-control date-inputmask" value="{{ $setting['insta']??'' }}"
                                                            type="text" placeholder="insta">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>linkdin
                                                        <small class="text-muted">(linkdin)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="linkdin" class="form-control date-inputmask" value="{{ $setting['linkdin']??'' }}"
                                                            type="text" placeholder="linkdin">
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane " id="account-vertical-seo-info"
                                    aria-labelledby="account-pill-general" aria-expanded="true">
                                    <form method="POST" action="{{route('admin.settings.store')}}"
                                        enctype="multipart/form-data" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Seo title
                                                        <small class="text-muted">(title)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="title" class="form-control date-inputmask" value="{{ $setting['title']??'' }}"
                                                            type="text" placeholder="title">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Seo keyword
                                                        <small class="text-muted">(Seo keyword)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="keyword" class="form-control date-inputmask" value="{{ $setting['keyword']??'' }}"
                                                            type="text" placeholder="keyword">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Seo Description
                                                        <small class="text-muted">(Seo description)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="seo_description" class="form-control date-inputmask" value="{{ $setting['seo_description']??'' }}"
                                                            type="text" placeholder="description">
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane " id="account-vertical-homepage-info"
                                    aria-labelledby="account-pill-general" aria-expanded="true">
                                    <form method="POST" action="{{route('admin.settings.store')}}"
                                        enctype="multipart/form-data" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Home location
                                                        <small class="text-muted">(location)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="homelocation" class="form-control date-inputmask" value="{{ $setting['homelocation']??'' }}"
                                                            type="text" placeholder="location">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Home Call Us
                                                        <small class="text-muted">(Call Us)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="homecallus" class="form-control date-inputmask" value="{{ $setting['homecallus']??'' }}"
                                                            type="text" placeholder="Call Us">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Home Schedule
                                                        <small class="text-muted">(Schedule)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="homescedule" class="form-control date-inputmask" value="{{ $setting['homescedule']??'' }}"
                                                            type="text" placeholder="Schedule">
                                                    </div>
                                                </fieldset>
                                            </div>
                                           
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Home Testimonial Vedio
                                                        <small class="text-muted">(Vedio Link)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="hometestimonialvedio"
                                                            class="form-control date-inputmask" type="text" value="{{ $setting['hometestimonialvedio']??'' }}"
                                                            placeholder="Vedio">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Feature Image
                                                        <small class="text-muted">(Feature Image)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="homeFeatureImage" class="form-control date-inputmask dropify" type="file" data-default-file="{{ URL::to($setting['homeFeatureImage']??'') }}"
                                                            placeholder="Feature Image">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Testimonial Image(1459*521)
                                                        <small class="text-muted">(Image)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="hometestimonialimage" class="form-control date-inputmask dropify" type="file" data-default-file="{{ URL::to($setting['hometestimonialimage']??'') }}"
                                                            placeholder="Feature Image">
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane " id="account-vertical-aboutpage-info"
                                    aria-labelledby="account-pill-general" aria-expanded="true">
                                    <form method="POST" action="{{route('admin.settings.store')}}"
                                        enctype="multipart/form-data" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="row">
                                           
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Title
                                                        <small class="text-muted">(Title)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="aboutTitle" class="form-control date-inputmask" value="{{ $setting['aboutTitle']??'' }}"
                                                            type="text" placeholder="Title">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>About Image(850*550)
                                                        <small class="text-muted">(Image)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="aboutImage" class="form-control date-inputmask" data-default-file="{{ URL::to($setting['aboutImage']??'') }}"
                                                            type="file" placeholder="About Image">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5> About Vedio
                                                        <small class="text-muted">(Vedio Link)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="aboutVedioLink" class="form-control date-inputmask" value="{{ ($setting['aboutVedioLink']??'') }}"
                                                            type="text" placeholder="Vedio">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Banner
                                                        <small class="text-muted">(Banner)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="aboutBanner" class="form-control date-inputmask dropify" type="file" placeholder="Banner"  data-default-file="{{ URL::to($setting['aboutBanner']??'') }}">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-12">
                                                <fieldset>
                                                    <h5>Description
                                                        <small class="text-muted">(Description)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <textarea name="aboutDescription" class="form-control date-inputmask" type="text" rows="3" cols="3"
                                                             placeholder="Description">{{ $setting['aboutDescription']??'' }}</textarea>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane " id="account-vertical-privacy-info"
                                    aria-labelledby="account-pill-general" aria-expanded="true">
                                    <form method="POST" action="{{route('admin.settings.store')}}"
                                        enctype="multipart/form-data" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="row">
                                           
                                           
                                            <div class="col-md-12">
                                                <fieldset>
                                                    <h5>Privacy Policy
                                                        <small class="text-muted">(Privacy Policy)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <textarea name="privacy_policy" class="form-control date-inputmask" type="text" rows="4" cols="4"
                                                             placeholder="Description">{{ $setting['privacy_policy']??'' }}</textarea>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane " id="account-vertical-services"
                                    aria-labelledby="account-pill-general" aria-expanded="true">
                                    <form method="POST" action="{{route('admin.settings.store')}}"
                                        enctype="multipart/form-data" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Service Banner
                                                        <small class="text-muted">(Banner)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="servicesBanner"
                                                            class="form-control date-inputmask dropify" type="file" data-default-file="{{ URL::to($setting['servicesBanner']??'') }}"
                                                            placeholder="Banner">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Contact Banner
                                                        <small class="text-muted">(Banner)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="contactBanner" class="form-control date-inputmask dropify" type="file" data-default-file="{{ URL::to($setting['contactBanner']??'') }}" placeholder="Banner">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>Banner
                                                        <small class="text-muted">(Banner)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="pricingBanner" class="form-control date-inputmask dropify" type="file" data-default-file="{{ URL::to($setting['pricingBanner']??'') }}" placeholder="Banner">
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane " id="account-vertical-payment-info"
                                    aria-labelledby="account-pill-general" aria-expanded="true">
                                    <form method="POST" action="{{route('admin.settings.store')}}"
                                        enctype="multipart/form-data" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12"><h2>Stripe</h2></div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>STRIPE KEY
                                                        <small class="text-muted">(STRIPE KEY)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="STRIPE_KEY" class="form-control date-inputmask" type="text"
                                                            value="{{ $setting['STRIPE_KEY']??'' }}" placeholder="STRIPE KEY">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>STRIPE SECRET
                                                        <small class="text-muted">(STRIPE SECRET)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="STRIPE_SECRET" class="form-control date-inputmask" type="text"
                                                            value="{{ $setting['STRIPE_SECRET']??'' }}" placeholder="STRIPE_SECRET">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-12"><h3>Paypal</h3></div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>PAYPAL KEY
                                                        <small class="text-muted">(PAYPAL KEY)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="PAYPAL_KEY" class="form-control date-inputmask" type="text"
                                                            value="{{ $setting['PAYPAL_KEY']??'' }}" placeholder="PAYPAL KEY">
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset>
                                                    <h5>PAYPAL SECRET
                                                        <small class="text-muted">(PAYPAL SECRET)</small>
                                                    </h5>
                                                    <div class="form-group">
                                                        <input name="PAYPAL_SECRET" class="form-control date-inputmask" type="text"
                                                            value="{{ $setting['PAYPAL_SECRET']??'' }}" placeholder="PAYPAL_SECRET">
                                                    </div>
                                                </fieldset>
                                            </div>
                                          
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                             
                               

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
@section("script")
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<script>
    $('.dropify').dropify();
    (function(window, document, $) {
        'use strict';
        // Basic Summernote
        $('.summernote').summernote({
            height: 200
        });

    })(window, document, jQuery);
</script>
@endsection
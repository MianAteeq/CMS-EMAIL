@extends('frontend::layout.app')
@section('content')
        <!-- Page Title -->
        <div class="page-title-area">
            <img src="@if(!empty($setting['contactBanner'])) {{$setting['contactBanner']}} @else {{asset('modules/website/assets/img/home-one/footer-car.png')}} @endif" alt="Title">
            <div class="container">
                <div class="page-title-content">
                    <h2>Contact</h2>
                    <ul>
                        <li>
                            <a href="<?php echo route('website.index'); ?>">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevron-right'></i>
                        </li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Contact Area -->
        <section class="contact-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-item contact-left">
                            <h3>Our Located Place</h3>
                            <p>@if(!empty($setting['description'])) {{$setting['description']}} @endif</p>
                            <ul>
                                <li>
                                    <i class='bx bx-location-plus'></i>
                                    @if(!empty($setting['address'])) {{$setting['address']}} @endif
                                </li>
                                <li>
                                    <i class='bx bx-mail-send'></i>
                                    <a href="mailto:@if(!empty($setting['email'])) {{$setting['email']}} @endif">
                                    @if(!empty($setting['email'])) {{$setting['email']}} @endif
                                    </a>
                                </li>
                                <li>
                                    <i class='bx bx-phone-call'></i>
                                    <a href="tel:@if(!empty($setting['phone'])) {{$setting['phone']}} @endif">
                                    @if(!empty($setting['phone'])) {{$setting['phone']}} @endif
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-item contact-right">
                            <h3>Get In Touch</h3>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <div class="form-check agree-label">
                                                <input
                                                    name="gridCheck"
                                                    value="I agree to the terms and privacy policy."
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    id="gridCheck"
                                                    required
                                                >
                                                <label class="form-check-label" for="gridCheck">
                                                    Accept <a href="<?php echo route('website.terms-condition'); ?>">Terms & Conditions</a> And <a href="<?php echo route('website.privacy-policy'); ?>">Privacy Policy.</a>
                                                </label>
                                                <div class="help-block with-errors gridCheck-error"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-12">
                                        <button type="submit" class="contact-btn btn">
                                            Send Message
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Area -->
        @endsection
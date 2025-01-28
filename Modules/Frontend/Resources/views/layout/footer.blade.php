<footer class="footer-area-two pt-100">
    <div class="footer-img">
        <img src="<?php echo asset('modules/website') ?>/assets/img/home-one/footer-car.png" alt="Footer">
    </div>
    <div class="container">
        {{-- <div class="subscribe-area"> --}}
            {{-- <div class="subscribe-shape">
                <img src="<?php echo asset('modules/website') ?>/assets/img/home-one/blog-shape.png" alt="Blog">
            </div>
            <h2>Subscribe Newsletter</h2>
            <form class="newsletter-form" data-toggle="validator">
                <input type="email" class="form-control" placeholder="Enter your email" name="EMAIL" required autocomplete="off">

                <button class="btn subscribe-btn" type="submit">
                    Subscribe
                </button>
                <div id="validator-newsletter" class="form-result"></div>
            </form> --}}
        {{-- </div> --}}
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a href="<?php echo route('website.index'); ?>">
                            <img src="@if(!empty($setting['footerlogo'])) {{$setting['footerlogo']}} @else {{asset('modules/website/assets/img/logo-two.png')}} @endif" alt="Logo" width="230">
                        </a>
                        <p>@if(!empty($setting['description'])) {{$setting['description']}} @endif</p>
                        <ul>
                            <li>
                                <a href="@if(!empty($setting['linkdin'])) {{$setting['linkdin']}} @endif" target="_blank">
                                    <i class='bx bxl-linkdin'></i>
                                </a>
                            </li>
                            <li>
                                <a href="@if(!empty($setting['facebook'])) {{$setting['facebook']}} @endif" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="@if(!empty($setting['insta'])) {{$setting['insta']}} @endif" target="_blank">
                                    <i class='bx bxl-instagram-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="@if(!empty($setting['twitter'])) {{$setting['twitter']}} @endif" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-service">
                        <h3>Services</h3>
                        <ul>
                            @foreach ($services as $service)
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bx-chevron-right'></i>
                                    {{ $service['name'] }}
                                </a>
                            </li>
                                
                            @endforeach
                           
                           
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-service">
                        <h3>Quick Links</h3>
                        <ul>
                            <li>
                                <a href="<?php echo route('website.index'); ?>" target="_blank">
                                    <i class='bx bx-chevron-right'></i>
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo route('website.about'); ?>" target="_blank">
                                    <i class='bx bx-chevron-right'></i>
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo route('website.terms-condition'); ?>" target="_blank">
                                    <i class='bx bx-chevron-right'></i>
                                    Terms Ans Conditions
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo route('website.privacy-policy'); ?>" target="_blank">
                                    <i class='bx bx-chevron-right'></i>
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo route('website.contact'); ?>" target="_blank">
                                    <i class='bx bx-chevron-right'></i>
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-service footer-find">
                        <h3>Find Us</h3>
                        <ul>
                            <li>
                                <i class='bx bx-location-plus'></i>
                                @if(!empty($setting['address'])) {{$setting['address']}} @else {{'28/A Street, New York City'}} @endif
                            </li>
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <a href="tel:@if(!empty($setting['phone'])) {{$setting['phone']}} @endif">
                                @if(!empty($setting['phone'])) {{$setting['phone']}} @else {{'+9378978323'}} @endif
                                </a>
                            </li>
                            <li>
                                <i class='bx bx-mail-send'></i>
                                <a href="mailto: @if(!empty($setting['email'])) {{$setting['email']}} @endif">
                                @if(!empty($setting['email'])) {{$setting['email']}} @else {{'web@demo.com'}} @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="row">
                <div class="col-lg-7">
                    <div class="copyright-item">
                        <p>Copyright @
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Link Moto. Designed By <a href="https://www.fissionmonster.com/" target="_blank">Fission Monster</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="copyright-item copyright-right">
                        <ul>
                            <li>
                                <a href="<?php echo route('website.terms-condition'); ?>" target="_blank">Terms & Conditions</a>
                            </li>
                            <li>
                                <span>-</span>
                            </li>
                            <li>
                                <a href="<?php echo route('website.privacy-policy'); ?>" target="_blank">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
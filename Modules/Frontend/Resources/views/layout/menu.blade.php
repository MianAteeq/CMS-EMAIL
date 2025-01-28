
 <!-- Start Navbar Area -->
  <div class="navbar-area fixed-top">
      <!-- Menu For Mobile Device -->
      <div class="mobile-nav">
          <a href="<?php echo route('website.index'); ?>" class="logo">
              <img src="@if(!empty($setting['headerlogo'])) {{$setting['headerlogo']}} @else {{asset('modules/website/assets/img/logo.png')}} @endif" alt="Logo">
          </a>
      </div>

      <!-- Menu For Desktop Device -->
      <div class="main-nav">
          <div class="container">
              <nav class="navbar navbar-expand-md navbar-light">
                  <a class="navbar-brand" href="<?php echo route('website.index'); ?>">
                      <img src="@if(!empty($setting['headerlogo'])) {{$setting['headerlogo']}} @else {{asset('modules/website/assets/img/logo.png')}} @endif" class="logo-one" alt="Logo" width="230">
                  </a>
                  <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item">
                              <a href="<?php echo route('website.index'); ?>" class="nav-link active">Home</a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo route('website.about'); ?>" class="nav-link">About</a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo route('website.service'); ?>" class="nav-link">Services</a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo route('website.pricing'); ?>" class="nav-link">Pricing</a>
                          </li>
                          <li class="nav-item">
                              <a href="<?php echo route('website.contact'); ?>" class="nav-link">Contact</a>
                          </li>
                      </ul>
                  </div>
                  <div class="cmn-btn">
                    @auth
                    <a class="banner-btn-left" href="<?php echo route('vender.index'); ?>">
                        <i class='bx bxs-home'></i>
                        Dashboard
                    </a>
                        
                    @else
                    <a class="banner-btn-left" href="<?php echo route('website.vendor.login'); ?>">
                        <i class='bx bxs-user-plus'></i>
                        Sign In
                    </a>
                    @endauth
                      
                  </div>
              </nav>
          </div>
      </div>
  </div>
  <!-- End Navbar Area -->
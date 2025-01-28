@extends('vender::layouts.master')
@section('content')

  <!-- users edit start -->
  <section class="users-edit">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-2" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center active" id="account-tab"
                                            data-toggle="tab" href="#account" aria-controls="account" role="tab"
                                            aria-selected="true">
                                            <i class="ft-user mr-25"></i><span class="d-none d-sm-block">Client</span>
                                        </a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center" id="information-tab"
                                            data-toggle="tab" href="#information" aria-controls="information" role="tab"
                                            aria-selected="false">
                                            <i class="ft-info mr-25"></i><span
                                                class="d-none d-sm-block">Information</span>
                                        </a>
                                    </li> -->
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="account" aria-labelledby="account-tab"
                                        role="tabpanel">
                                        <!-- users edit media object start -->
                                        <div class="media mb-2">
                                            <a class="mr-2" href="#">
                                                <img src="{{asset('/modules/vender')}}/app-assets/images/portrait/small/avatar-s-26.png"
                                                    alt="users avatar" class="users-avatar-shadow rounded-circle"
                                                    height="64" width="64">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-heading">Avatar</h4>
                                                <div class="col-12 px-0 d-flex">
                                                    <a href="#" class="btn btn-sm btn-primary mr-25">Change</a>
                                                    <a href="#" class="btn btn-sm btn-secondary">Reset</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- users edit media object ends -->
                                        <!-- users edit account form start -->
                                        <form novalidate>
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Username</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Username" value="dean3004" required
                                                                data-validation-required-message="This username field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Phone</label>
                                                            <input type="text" class="form-control" required
                                                                placeholder="Phone number" value="(+656) 254 2568"
                                                                data-validation-required-message="This phone number field is required">
                                                        </div>
                                                    </div>



                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Address</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Address"
                                                                data-validation-required-message="This Address field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>State</label>
                                                            <input type="text" class="form-control" placeholder="State"
                                                                data-validation-required-message="This Address field is required">
                                                        </div>
                                                    </div>



                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Country</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Address"
                                                                data-validation-required-message="This Address field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label>Category</label>
                                                        <select class="form-control">
                                                            <option>Retailer</option>
                                                            <option>wholesale</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>E-mail</label>
                                                            <input type="email" class="form-control" placeholder="Email"
                                                                value="deanstanley@gmail.com" required
                                                                data-validation-required-message="This email field is required">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>City</label>
                                                        <input type="text" class="form-control" placeholder="City name">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Zip</label>
                                                            <input type="text" class="form-control" placeholder="Zip"
                                                                data-validation-required-message="This Address field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12  row">
                                                    <div class="table-responsive">
                                                        <table class="table mt-1">
                                                            <thead>
                                                                <tr>
                                                                    <th>Emergency Client - Contact</th>

                                                                </tr>
                                                            </thead>

                                                        </table>
                                                    </div>

                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Username</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Username" value="dean3004" required
                                                                    data-validation-required-message="This username field is required">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Phone</label>
                                                                <input type="text" class="form-control" required
                                                                    placeholder="Phone number" value="(+656) 254 2568"
                                                                    data-validation-required-message="This phone number field is required">
                                                            </div>
                                                        </div>

                                                        <fieldset class="form-group">
                                                            <label for="textarea">Client Note</label>
                                                            <textarea class="form-control" id="basicTextarea"
                                                                rows="3" placeholder="Custom Notes" style="height: 120px;"></textarea>
                                                        </fieldset>

                                                    </div>
                                                    <div class="col-12 col-sm-6">


                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>E-mail</label>
                                                                <input type="email" class="form-control"
                                                                    placeholder="Email" value="deanstanley@gmail.com"
                                                                    required
                                                                    data-validation-required-message="This email field is required">
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Job Tite</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Job Title">
                                                        </div>

                                                    </div>

                                                </div>

                                                <div
                                                    class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit"
                                                        class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                        changes</button>
                                                    <button type="reset" class="btn btn-light">Cancel</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users edit account form ends -->
                                    </div>
                                    <div class="tab-pane" id="information" aria-labelledby="information-tab"
                                        role="tabpanel">
                                        <!-- users edit Info form start -->
                                        <!-- <form novalidate>
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <h5 class="mb-1"><i class="ft-link mr-25"></i>Social Links</h5>
                                                    <div class="form-group">
                                                        <label>Twitter</label>
                                                        <input class="form-control" type="text"
                                                            value="https://www.twitter.com/">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Facebook</label>
                                                        <input class="form-control" type="text"
                                                            value="https://www.facebook.com/">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Google+</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>LinkedIn</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Instagram</label>
                                                        <input class="form-control" type="text"
                                                            value="https://www.instagram.com/">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 mt-1 mt-sm-0">
                                                    <h5 class="mb-1"><i class="ft-user mr-25"></i>Personal Info</h5>
                                                    <div class="form-group">
                                                        <div class="controls position-relative">
                                                            <label>Birth date</label>
                                                            <input type="text" class="form-control birthdate-picker"
                                                                required placeholder="Birth date"
                                                                data-validation-required-message="This birthdate field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <select class="form-control" id="accountSelect">
                                                            <option>USA</option>
                                                            <option>India</option>
                                                            <option>Canada</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Languages</label>
                                                        <select class="form-control" id="users-language-select2"
                                                            multiple="multiple">
                                                            <option value="English" selected>English</option>
                                                            <option value="Spanish">Spanish</option>
                                                            <option value="French">French</option>
                                                            <option value="Russian">Russian</option>
                                                            <option value="German">German</option>
                                                            <option value="Arabic" selected>Arabic</option>
                                                            <option value="Sanskrit">Sanskrit</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Phone</label>
                                                            <input type="text" class="form-control" required
                                                                placeholder="Phone number" value="(+656) 254 2568"
                                                                data-validation-required-message="This phone number field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Address</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Address"
                                                                data-validation-required-message="This Address field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Website</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Website address">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Favourite Music</label>
                                                        <select class="form-control" id="users-music-select2"
                                                            multiple="multiple">
                                                            <option value="Rock">Rock</option>
                                                            <option value="Jazz" selected>Jazz</option>
                                                            <option value="Disco">Disco</option>
                                                            <option value="Pop">Pop</option>
                                                            <option value="Techno">Techno</option>
                                                            <option value="Folk" selected>Folk</option>
                                                            <option value="Hip hop">Hip hop</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label>Favourite movies</label>
                                                        <select class="form-control" id="users-movies-select2"
                                                            multiple="multiple">
                                                            <option value="The Dark Knight" selected>The Dark Knight
                                                            </option>
                                                            <option value="Harry Potter" selected>Harry Potter</option>
                                                            <option value="Airplane!">Airplane!</option>
                                                            <option value="Perl Harbour">Perl Harbour</option>
                                                            <option value="Spider Man">Spider Man</option>
                                                            <option value="Iron Man" selected>Iron Man</option>
                                                            <option value="Avatar">Avatar</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit"
                                                        class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                        changes</button>
                                                    <button type="reset" class="btn btn-light">Cancel</button>
                                                </div>
                                            </div>
                                        </form> -->
                                        <!-- users edit Info form ends -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users edit ends -->
@endsection
@section('css_lib')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/plugins/forms/validation/form-validation.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/vendors/css/forms/selects/select2.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/pages/page-users.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

@endsection
@section('scripts_lib')
    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('/modules/vender')}}/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('/modules/vender')}}/app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="{{asset('/modules/vender')}}/app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
    <script src="{{asset('/modules/vender')}}/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="{{asset('/modules/vender')}}/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="{{asset('/modules/vender')}}/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="{{asset('/modules/vender')}}/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('/modules/vender')}}/app-assets/js/core/app-menu.js"></script>
    <script src="{{asset('/modules/vender')}}/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('/modules/vender')}}/app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
    <script src="{{asset('/modules/vender')}}/app-assets/js/scripts/pages/page-users.js"></script>
    <script src="{{asset('/modules/vender')}}/app-assets/js/scripts/navs/navs.js"></script>
    <!-- END: Page JS-->

@endsection
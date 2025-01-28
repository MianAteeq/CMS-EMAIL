@extends('vender::layouts.master')
@section('content')
<!-- users edit start -->
<section class="users-edit">
    <div class="card">
        <div class="card-content">
            <form novalidate method="POST" action="{{ route('vender.team.store') }}" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                <ul class="nav nav-tabs mb-2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                            <i class="ft-user mr-25"></i><span class="d-none d-sm-block">Account</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#information" aria-controls="information" role="tab" aria-selected="false">
                            <i class="ft-info mr-25"></i><span class="d-none d-sm-block">Information</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                        <!-- users edit media object start -->
                        <div class="media mb-2">
                            <a class="mr-2" href="#">
                                <img src="{{asset('/modules/vender')}}/app-assets/images/portrait/small/avatar-s-26.png" alt="users avatar" class="users-avatar-shadow rounded-circle" id="output" height="64" width="64">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">Avatar</h4>
                               <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer" for="account-upload">Upload new
                                    photo</label>
                                <input type="file" name="image" id="account-upload" onchange="loadFile(event)" hidden>
                                <button class="btn btn-sm btn-secondary ml-50" onclick="reset()">Reset</button>
                            </div>
                            </div>
                        </div>
                        <!-- users edit media object ends -->
                        <!-- users edit account form start -->
                        
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="First Name" value="" required data-validation-required-message="This name field is required">
                                            @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="" required data-validation-required-message="This last name field is required">
                                            @if ($errors->has('last_name'))
                                            <span class="text-danger">{{ $errors->first('last_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>E-mail</label>
                                            <input type="email" class="form-control" name="email" placeholder="Email" value="" required data-validation-required-message="This email field is required">
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option>Active</option>
                                            <option>InActive</option>
                                        
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Password" value="" required
                                                data-validation-required-message="This Password field is required">
                                                @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" name="password_confirmation" placeholder="Password" value="" required
                                                data-validation-required-message="This Password field is required">
                                                @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                        </div>
                                    </div>
                                  
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Roles</label>
                                      
                                        <div class="row">
                                            @foreach ($roles as $role)
                                            <div class="col-md-3">
                                            <fieldset>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"  name="role_id[]" id="customCheck{{ $role['id'] }}" value="{{ $role['id'] }}">
                                                    <label class="custom-control-label" for="customCheck{{ $role['id'] }}">{{ $role['name'] }}</label>
                                                </div>
                                                </div>
                                            </fieldset>
                                                
                                            @endforeach
                                        </div>
                                        
                                    </div>


                                </div>
                               
                            
                            </div>
                        
                        <!-- users edit account form ends -->
                    </div>
                    <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                        <!-- users edit Info form start -->
                        
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <h5 class="mb-1"><i class="ft-link mr-25"></i>Social Links</h5>
                                   
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input class="form-control" name="facebook" type="text" value="">
                                    </div>
                                   
                                  
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input class="form-control" type="text" value="">
                                    </div>
                                    <div class="form-group">
                                        <label>Trust Plot Link</label>
                                        <input class="form-control" name="trust_plot_link" type="text" value="">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 mt-1 mt-sm-0">
                                    <h5 class="mb-1"><i class="ft-user mr-25"></i>Personal Info</h5>
                                    
                                    <div class="form-group">
                                        <label>Country</label>
                                       <input class="form-control" name="country" type="text" value="">
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Phone</label>
                                            <input type="text" class="form-control" name="phone_no"  placeholder="Phone number" value="" ">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="controls">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="address" placeholder="Address" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input type="text" class="form-control" name="website" placeholder="Website address">
                                    </div>
                                   
                                </div>
                                <div class="col-12">
                                   
                                </div>
                              
                            </div>
                        
                    </div>
                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                            <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                changes</button>
                            <button type="reset" class="btn btn-light">Cancel</button>
                        </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</section>
<!-- users edit ends -->
@endsection
@section('css_lib')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/vendors/css/vendors.min.css">
<link rel="stylesheet" type="text/css" href="{{ URL::to('modules/vender/app-assets/vendors/css/forms/icheck/icheck.css') }}">
<link rel="stylesheet" type="text/css" href="{{ URL::to('modules/vender/app-assets/vendors/css/forms/icheck/custom.css') }}">
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/plugins/forms/validation/form-validation.css">
{{-- <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/vendors/css/forms/selects/select2.min.css"> --}}
{{-- <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/vendors/css/pickers/pickadate/pickadate.css"> --}}
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
{{-- <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/pages/page-users.css"> --}}

<link rel="stylesheet" type="text/css"
    href="{{ URL::to('modules/vender/app-assets/css/plugins/forms/checkboxes-radios.css') }}">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ URL::to('modules/vender/assets/css/style.css') }}">
<!-- END: Custom CSS-->

@endsection
@section('scripts_lib')
<!-- BEGIN: Vendor JS-->
<script src="{{asset('/modules/vender')}}/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('/modules/vender')}}/app-assets/vendors/js/ui/jquery.sticky.js"></script>
{{-- <script src="{{asset('/modules/vender')}}/app-assets/vendors/js/charts/jquery.sparkline.min.js"></script> --}}
{{-- <script src="{{asset('/modules/vender')}}/app-assets/vendors/js/forms/select/select2.full.min.js"></script> --}}
<script src="{{asset('/modules/vender')}}/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
{{-- <script src="{{asset('/modules/vender')}}/app-assets/vendors/js/pickers/pickadate/picker.js"></script> --}}
{{-- <script src="{{asset('/modules/vender')}}/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script> --}}
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('/modules/vender')}}/app-assets/js/core/app-menu.js"></script>
<script src="{{ URL::to('modules/vender/app-assets/vendors/js/forms/icheck/icheck.min.js') }}"></script>
<script src="{{asset('/modules/vender')}}/app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
{{-- <script src="{{asset('/modules/vender')}}/app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script> --}}
{{-- <script src="{{asset('/modules/vender')}}/app-assets/js/scripts/pages/page-users.js"></script> --}}
{{-- <script src="{{asset('/modules/vender')}}/app-assets/js/scripts/navs/navs.js"></script> --}}
<script src="{{ URL::to('modules/vender/app-assets/js/scripts/forms/checkbox-radio.js') }}"></script>
<!-- END: Page JS-->
<script>
    var loadFile = function(event) {
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
    };

  let url=@json(URL::to(auth()->user()->profile_pic))

  @if(auth()->user()->profile_pic==null)

  url =@json(asset('/modules/vender/app-assets/images/portrait/small/avatar-s-18.png'));
  @endif

    function reset(){
        var image = document.getElementById('output');
        image.src = url;

    }
</script>

@endsection
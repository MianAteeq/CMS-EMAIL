@extends('vender::layouts.master')

@section('css_custom')
<link rel="stylesheet" type="text/css"
    href="{{ URL::to('modules/admin/app-assets/css/plugins/forms/extended/form-extended.css') }}">
<link rel="stylesheet" type="text/css"
    href="https://unpkg.com/file-upload-with-preview/dist/file-upload-with-preview.min.css" />
    <style>
         /* img{
            display: block;
    -webkit-user-select: none;
    height: 149px;
    width: 100%;
    object-fit: cover;
        } */
    </style>
@endsection
@section('content')

<section id="page-account-settings">
    <div class="row">
        <!-- left menu section -->
        @auth
        @if(auth()->user()->profile['mechanic_docs']!=null)


        <div class="col-md-3 mb-2 mb-md-0">
            <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                <li class="nav-item">
                    <a class="nav-link d-flex @if(session('settingValue')=="PROFILE"||session('settingValue')==null)
                        active @endif" id="account-pill-general" data-toggle="pill" href="#account-vertical-general"
                        aria-expanded="true">
                        <i class="ft-globe mr-50"></i>
                        Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex @if(session('settingValue')=="JOB")
                        active @endif" id="account-pill-general" data-toggle="pill" href="#account-vertical-general-job"
                        aria-expanded="true">
                        <i class="ft-globe mr-50"></i>
                        Providing Jobs
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex @if(session('settingValue')=="SUBSCRIPTION") active @endif"
                        id="account-pill-connections" data-toggle="pill" href="#account-vertical-connections"
                        aria-expanded="false">
                        <i class="ft-feather mr-50"></i>
                        Subscription
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex @if(session('settingValue')=="PAYMENT") active @endif"
                        id="account-pill-info" data-toggle="pill" href="#account-vertical-info" aria-expanded="false">
                        <i class="ft-info mr-50"></i>
                        Bank/Payement Detail
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex @if(session('settingValue')=="SOCIAL") active @endif"
                        id="account-pill-social" data-toggle="pill" href="#account-vertical-social"
                        aria-expanded="false">
                        <i class="ft-camera mr-50"></i>
                        Social links
                    </a>
                </li>
            </ul>
        </div>
        @endif
        @endauth
        @auth
        @if(auth()->user()->profile['mechanic_docs']!=null)
        <div class="col-md-9">
            @else
            <div class="col-md-12">
                @endif
                @endauth
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane @if(session('settingValue')=="PROFILE"||session('settingValue')==null) active @endif" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                    <form novalidate method="post" action="{{ route('vender.setting.profile.update') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="media">
                                            <a href="javascript: void(0);">
                                                <img src="{{URL::to(auth()->user()->profile_pic??'/modules/vender/app-assets/images/portrait/small/avatar-s-18.png')}}"
                                                    class="rounded mr-75" id="output" alt="profile image" height="64"
                                                    width="64">
                                            </a>
                                            <div class="media-body mt-75">
                                                <div
                                                    class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                    <label
                                                        class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer"
                                                        for="account-upload">Upload new photo</label>
                                                    <input type="file" name="image" id="account-upload"
                                                        onchange="loadFile(event)" hidden>
                                                    <button class="btn btn-sm btn-secondary ml-50"
                                                        onclick="reset()">Reset</button>
                                                </div>
                                                <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or
                                                        PNG. Max
                                                        size of
                                                        800kB</small></p>
                                            </div>
                                        </div>
                                        <hr />


                                        <div class="row m-1">
                                            <div class="row col-12">
                                                <div>
                                                    <h5> <strong> Owner Details </strong></h5>
                                                </div>
                                            </div>

                                            <div class="row col-12">

                                                <div class="col-sm-4">

                                                    <div class="form-group">

                                                        <label for="account-website">First Name</label>

                                                        <input type="text" class="form-control" name="name"
                                                            value="{{ auth()->user()->name }}" id="account-website"
                                                            placeholder="First Name">

                                                    </div>

                                                </div>
                                                <div class="col-sm-4">

                                                    <div class="form-group">

                                                        <label for="account-website">Mid Name</label>

                                                        <input type="text" class="form-control" name="owner_middle_name"
                                                            value="{{ auth()->user()->profile['owner_middle_name']??'' }}"
                                                            id="account-website" placeholder="Mid Name">

                                                    </div>

                                                </div>

                                                <div class="col-sm-4">

                                                    <div class="form-group">

                                                        <label for="account-website">Last Name</label>

                                                        <input type="text" class="form-control" name="last_name"
                                                            value="{{ auth()->user()->last_name }}" id="account-website"
                                                            placeholder="Last Name">

                                                    </div>

                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="account-company">Phone</label>
                                                        <input type="text" class="form-control" name="phone_no"
                                                            value="{{ auth()->user()->profile['phone_no']??'' }}"
                                                            id="account-company" placeholder="Phone">
                                                    </div>
                                                </div>


                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label for="account-e-mail">E-mail</label>
                                                            <input type="email" class="form-control" name="email"
                                                                value="{{ auth()->user()->email??'' }}"
                                                                id="account-e-mail" placeholder="Email" required
                                                                data-validation-required-message="This email field is required">
                                                            @if ($errors->has('owner_email'))
                                                            <span class="text-danger">{{ $errors->first('owner_email')
                                                                }}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row col-12">
                                                <div>
                                                    <h5> <strong> Company Details </strong></h5>
                                                </div>
                                            </div>
                                            <hr style="width: 99%" />

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Company Name</label>
                                                        <input type="text" class="form-control" id="account-username"
                                                            name="company_name"
                                                            value="{{ auth()->user()->profile['company_name']??'' }}"
                                                            placeholder="Company Name" required
                                                            data-validation-required-message="This Company Name field is required">
                                                        @if ($errors->has('company_name'))
                                                        <span class="text-danger">{{ $errors->first('company_name')
                                                            }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-username">Trading Name</label>
                                                        <input type="text" class="form-control" id="account-username"
                                                            name="trading_name"
                                                            value="{{ auth()->user()->profile['trading_name']??'' }}"
                                                            placeholder="Company Name" required
                                                            data-validation-required-message="This Company Name field is required">
                                                        @if ($errors->has('trading_name'))
                                                        <span class="text-danger">{{ $errors->first('trading_name')
                                                            }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-name">Registration
                                                            Number</label>
                                                        <input type="text" class="form-control" id="account-name"
                                                            name="registration_no"
                                                            value="{{ auth()->user()->profile['registration_no']??'' }}"
                                                            placeholder="Registration Number" required
                                                            data-validation-required-message="This Registration number field is required">
                                                        @if ($errors->has('registration_no'))
                                                        <span class="text-danger">{{ $errors->first('registration_no')
                                                            }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-name">Operation Type</label>
                                                        <select class="form-control" name="operation_type">
                                                            <option value="Mobile" @if(auth()->
                                                                user()->profile['company_name']=="Mobile") selected
                                                                @endif>Mobile</option>
                                                            <option value="On-Premises" @if(auth()->
                                                                user()->profile['company_name']=="On-Premises") selected
                                                                @endif>On-Premises</option>
                                                            <option value="Both" @if(auth()->
                                                                user()->profile['company_name']=="Both") selected
                                                                @endif>Both</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="account-company">Trading/operating address</label>
                                                    <input type="text" class="form-control" id="account-company"
                                                        name="area" value="{{ auth()->user()->profile['area']??'' }}"
                                                        placeholder="Trading/operating address">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="account-website">Website</label>
                                                    <input type="url" class="form-control" id="account-website"
                                                        name="website"
                                                        value="{{ auth()->user()->profile['website']??'' }}"
                                                        placeholder="Website address">
                                                </div>
                                            </div>
                                            {{-- <div class="row col-12">
                                                <div>
                                                    <h6> <strong> Services </strong></h6>
                                                </div>
                                            </div>
                                            <div class="row col-12">
                                                @foreach ($services as $key=> $service)
                                                <div class="col-md-3 mt-1">
                                                    <fieldset>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" name="service_id[]" 
                                                            @foreach ($user['vender_services'] as $warrantyjob) @if($warrantyjob['id']==$service['id']) checked @endif @endforeach id="custom-warratanty{{ $service['id'] }}"
                                                                value="{{ $service['id'] }}">
                                                            <label class="custom-control-label" for="custom-warratanty{{ $service['id'] }}">{{ $service['name'] }}</label>
                                                        </div>
                                                </div>
                                                </fieldset>
                                            
                                                @endforeach
                                            </div> --}}
                                            <hr style="width: 99%" />
                                            <div class="row col-12">
                                                <div>
                                                    <h6> <strong> Warranty Jobs </strong></h6>
                                                </div>
                                            </div>
                                            <div class="row col-12">
                                                @foreach ($warranty_jobs as $key=> $warranty_job)
                                                <div class="col-md-3 mt-1">
                                                    <fieldset>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" name="warranty_job_id[]" 
                                                            @foreach ($user['warranty_jobs'] as $warrantyjob) @if($warrantyjob['id']==$warranty_job['id']) checked @endif @endforeach id="custom-warratanty{{ $warranty_job['id'] }}"
                                                                value="{{ $warranty_job['id'] }}">
                                                            <label class="custom-control-label" for="custom-warratanty{{ $warranty_job['id'] }}">{{ $warranty_job['name'] }}</label>
                                                        </div>
                                                </div>
                                                </fieldset>
                                            
                                                @endforeach
                                            </div>
                                            <hr style="width: 99%" />
                                            <div class="row col-12">
                                                <div>
                                                    <h6> <strong> Vehicle Specialist </strong></h6>
                                                </div>
                                            </div>
                                            <div class="row col-12">
                                                @foreach ($vehicle_specialists as $key=> $vehicle_specialist)
                                                <div class="col-md-3 mt-1">
                                                    <fieldset>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" name="vehicle_specialist_id[]" @foreach ($user['vehicle_specialists'] as $vehiclespecialist) @if($vehiclespecialist['id']==$vehicle_specialist['id']) checked @endif @endforeach
                                                                id="custom-vehicle{{ $vehicle_specialist['id'] }}" value="{{ $vehicle_specialist['id'] }}">
                                                            <label class="custom-control-label" for="custom-vehicle{{ $vehicle_specialist['id'] }}">{{ $vehicle_specialist['name']
                                                                }}</label>
                                                        </div>
                                                </div>
                                                </fieldset>
                                            
                                                @endforeach
                                            </div>
                                            <hr style="width: 99%" />
                                            <div class="row col-12">
                                                <div>
                                                    <h6> <strong> Accreditation & Scheme </strong></h6>
                                                </div>
                                            </div>
                                            <div class="row col-12">
                                                @foreach ($accredictions as $key=> $accrediction)
                                                <div class="col-md-3 mt-1">
                                                    <fieldset>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" name="accrediction_id[]" @foreach ($user['accreditation_schemes'] as $warrantyjob) @if($warrantyjob['id']==$accrediction['id']) checked @endif @endforeach
                                                                id="custom-acc{{ $accrediction['id'] }}" value="{{ $accrediction['id'] }}">
                                                            <label class="custom-control-label" for="custom-acc{{ $accrediction['id'] }}">{{
                                                                $accrediction['name']
                                                                }}</label>
                                                        </div>
                                                </div>
                                                </fieldset>
                                            
                                                @endforeach
                                            </div>
                                            <hr style="width: 99%" />
                                            <div class="row col-12">
                                                <div>
                                                    <h6> <strong> Payment Method </strong></h6>
                                                </div>
                                            </div>
                                            <div class="row col-12">
                                                @foreach ($payment_methods as $key=>$payment_method)
                                                <div class="col-md-3 mt-1">
                                                    <fieldset>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" name="payment_method_id[]" @foreach ($user['payment_methods'] as $warrantyjob) @if($warrantyjob['id']==$payment_method['id']) checked @endif @endforeach
                                                                id="custom-payment{{ $payment_method['id'] }}" value="{{ $payment_method['id'] }}">
                                                            <label class="custom-control-label" for="custom-payment{{ $payment_method['id'] }}">{{
                                                                $payment_method['name']
                                                                }}</label>
                                                        </div>
                                                </div>
                                                </fieldset>
                                            
                                                @endforeach
                                            </div>
                                            <hr style="width: 99%" />
                                           
                                            <div class="row col-12">
                                                <div>
                                                    <h5> <strong> Company Documents </strong></h5>
                                                </div>
                                            </div>
                                            <div class="row col-12">
                                                <div class="col-md-6">
                                                    <div class="demo-upload-container" role="main">
                                                        <strong for="account-website">Address Proff</strong>
                                                        <div class="custom-file-container"
                                                            data-upload-id="myFirstImage">
                                                            <div class="label-container"> </div>
                                                            <label class="input-container">
                                                                <input accept="*" aria-label="Choose File"
                                                                    class="input-hidden"
                                                                    id="file-upload-with-preview-myFirstImage"
                                                                    type="file" name="address_proff"
                                                                    onchange="loadAddressProff(event)">
                                                                <span class="input-visible">Choose file...<span
                                                                        class="browse-button">Browse</span></span>
                                                            </label>
                                                            @if(auth()->user()->profile['address_proff']!=null)
                                                            @php
                                                                $imageExtensions = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief','jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];

                                                                $explodeImage = explode('.', auth()->user()->profile['address_proff']);
                                                                $extension = end($explodeImage);
                                                            @endphp 
                                                            @if (in_array($extension, $imageExtensions))
                                                            <img class="image-preview image_address_proff" style="width: 100%;height: 100px;object-fit: contain;"
                                                            src="{{ URL::to(auth()->user()->profile['address_proff']??'') }}"
                                                            id="address_proff" />
                                                            <iframe class="iframe_address_proff" style="display: none" style="display: none" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAiQAAAD6CAMAAACmhqw0AAAA+VBMVEUAAAD29u3u7unt7ent7enu7uju7uihoqCio6Gio6KjpKOkpaSmpqSmp6WoqKaqq6mqq6qrq6qsrautrauur62wsa6xsa+xsrCys7GztLK0tbK1trS2t7S3t7W4uba5ure6u7e7vLm8vbu9vrvAwL3Awb3DxMHFxcPGxsPHx8TIycXLzMjLzMnMzMnNzsrPz8vP0MzQ0M3S0s/U1NDV1dLX19TY2NTY2NXZ2dba2tXb29bc3Nfc3Njc3dnd3dre3tre39vg4Nvh4dzi4t3i4t7j497k5N/k5ODl5eDl5eHl5uLm5uHn5+Lo6OPp6eTq6uXr6+bs7Oft7eh54KxIAAAAB3RSTlMAHKbl5uztvql9swAABA1JREFUeNrt3VlT01AYgOG0oEEE910URNzFBVFcqCgKirLU/P8fI3QYbEOSdtrMyJzzvHfMlFx833NBQuY0SRrN8UwqabzZSJLGaYNQVacaSdMUVF0zGTMEVTeWmIH6BYkgESSCRJAIEkEiSCRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRJBIkAgSQSJIBIkgESSCRIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSQSJBIkgEiSARJIJEkAgSCRJBIkgEiSARJIJEgkSQ5PvxbdS+tyEJuZVb0+noTV579geSQGs/SOvqxiYkYfYwra+rbUhC7NNEjUjSJ5CE2P06jaTnIAmxKwe7vb468t3N14WOki1IAuzMwWrf1HCh3Q6S95AEWGe1b0/WlSCBBBJIIAkdSXvt1aNXa21IICld7dJU5+epJUggKV7tzuzRA4/ZHUggKVrtfNdjsXlIIClY7XLPw9NlSCA5vtqLPUguQgLJsdX+zv0fZhsSSPKrXckhWSn5jV8zG5DEiuR1DsnrEiOX0vMbkESKZDWHZLXMSFqsBJIIkOz1vn40sVdqpFgJJDHc3dzsQXKzwkihEkhiQLI+2f3y+3qVkSIlkMSAJFvsQrJYbaRACSRRIMlenj0UcPZlPyPHlUASB5Jsc+7cwevMc5v9jRxTAkkkSPbb+riVZYMYySuBJB4kJRUYySmBJHYkhUZ6lUASOZISIz1KIIkbSamRbiWQxIZkvT2YkS4lkESGpDV9tz2YkX9KIIkLSWs6TY+U9DFypASSqJC0OicfHSrpa2T/k5BEh6R1eDpWR8kARtIZSGJD0jo6QW1fySBGIIkOSavrlL27PwcxAklsSFo9JzFOppBAkl9ta5jTOiGJCslQRiCJCslwRiCJCcmQRiCJCMmwRiCJB8mXoU+YhyQaJM9TSCCBBBJIIIEEEkgggQQSSCCJAsnyzLA9hiQWJCfnSpBAAgkkkATXxFCnPxfU7iB5B0mAXT5Y7Z3t0Y087SDZgCTA7tX6bZ5TGSQBtlwrkgVIgmy+RiMXdiEJsp3b9Rn5nEESaC/O1/P3yMJuBkm4bX94O2rvNiKbWXRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRIJEkAgSQSJIBIkgESQSJIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSCRJBIkgEiSARJIJEkEiQCBJBIkgEiSARJIJEgkSQCBJBIkgEiSARJBIkgkSQ6P8gGTMDVTeWNA1B1TWTxmlTUFWnGknSaI4bhMoabzaSv+4BHFVoHZzfAAAAAElFTkSuQmCC" id="address_proff_iframe"width="50%" height="600"scrolling="no">
                                                                    This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('folder/file_name.pdf') }}">Download PDF</a>
                                                            </iframe>
                                                            @else
                                                            <img class="image-preview image_address_proff" style="width: 100%;height: 150px;object-fit: contain; display: none"
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAiQAAAD6CAMAAACmhqw0AAAA+VBMVEUAAAD29u3u7unt7ent7enu7uju7uihoqCio6Gio6KjpKOkpaSmpqSmp6WoqKaqq6mqq6qrq6qsrautrauur62wsa6xsa+xsrCys7GztLK0tbK1trS2t7S3t7W4uba5ure6u7e7vLm8vbu9vrvAwL3Awb3DxMHFxcPGxsPHx8TIycXLzMjLzMnMzMnNzsrPz8vP0MzQ0M3S0s/U1NDV1dLX19TY2NTY2NXZ2dba2tXb29bc3Nfc3Njc3dnd3dre3tre39vg4Nvh4dzi4t3i4t7j497k5N/k5ODl5eDl5eHl5uLm5uHn5+Lo6OPp6eTq6uXr6+bs7Oft7eh54KxIAAAAB3RSTlMAHKbl5uztvql9swAABA1JREFUeNrt3VlT01AYgOG0oEEE910URNzFBVFcqCgKirLU/P8fI3QYbEOSdtrMyJzzvHfMlFx833NBQuY0SRrN8UwqabzZSJLGaYNQVacaSdMUVF0zGTMEVTeWmIH6BYkgESSCRJAIEkEiSCRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRJBIkAgSQSJIBIkgESSCRIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSQSJBIkgEiSARJIJEkAgSCRJBIkgEiSARJIJEgkSQ5PvxbdS+tyEJuZVb0+noTV579geSQGs/SOvqxiYkYfYwra+rbUhC7NNEjUjSJ5CE2P06jaTnIAmxKwe7vb468t3N14WOki1IAuzMwWrf1HCh3Q6S95AEWGe1b0/WlSCBBBJIIAkdSXvt1aNXa21IICld7dJU5+epJUggKV7tzuzRA4/ZHUggKVrtfNdjsXlIIClY7XLPw9NlSCA5vtqLPUguQgLJsdX+zv0fZhsSSPKrXckhWSn5jV8zG5DEiuR1DsnrEiOX0vMbkESKZDWHZLXMSFqsBJIIkOz1vn40sVdqpFgJJDHc3dzsQXKzwkihEkhiQLI+2f3y+3qVkSIlkMSAJFvsQrJYbaRACSRRIMlenj0UcPZlPyPHlUASB5Jsc+7cwevMc5v9jRxTAkkkSPbb+riVZYMYySuBJB4kJRUYySmBJHYkhUZ6lUASOZISIz1KIIkbSamRbiWQxIZkvT2YkS4lkESGpDV9tz2YkX9KIIkLSWs6TY+U9DFypASSqJC0OicfHSrpa2T/k5BEh6R1eDpWR8kARtIZSGJD0jo6QW1fySBGIIkOSavrlL27PwcxAklsSFo9JzFOppBAkl9ta5jTOiGJCslQRiCJCslwRiCJCcmQRiCJCMmwRiCJB8mXoU+YhyQaJM9TSCCBBBJIIIEEEkgggQQSSCCJAsnyzLA9hiQWJCfnSpBAAgkkkATXxFCnPxfU7iB5B0mAXT5Y7Z3t0Y087SDZgCTA7tX6bZ5TGSQBtlwrkgVIgmy+RiMXdiEJsp3b9Rn5nEESaC/O1/P3yMJuBkm4bX94O2rvNiKbWXRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRIJEkAgSQSJIBIkgESQSJIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSCRJBIkgEiSARJIJEkEiQCBJBIkgEiSARJIJEgkSQCBJBIkgEiSARJBIkgkSQ6P8gGTMDVTeWNA1B1TWTxmlTUFWnGknSaI4bhMoabzaSv+4BHFVoHZzfAAAAAElFTkSuQmCC"
                                                                id="address_proff_image" />
                                                            <iframe class="iframe_address_proff" src="{{ URL::to(auth()->user()->profile['address_proff']??'') }}" id="address_proff" width="50%" height="600">
                                                                This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('folder/file_name.pdf') }}">Download PDF</a>
                                                        </iframe>
                                                            @endif
                                                            

                                                                
                                                                <input type="hidden" name="old_address_proff" value="{{ auth()->user()->profile['address_proff']??'' }}">
                                                            @else
                                                            {{-- <img class="image-preview" style="width: 100%;height: 100px;object-fit: contain;"
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAiQAAAD6CAMAAACmhqw0AAAA+VBMVEUAAAD29u3u7unt7ent7enu7uju7uihoqCio6Gio6KjpKOkpaSmpqSmp6WoqKaqq6mqq6qrq6qsrautrauur62wsa6xsa+xsrCys7GztLK0tbK1trS2t7S3t7W4uba5ure6u7e7vLm8vbu9vrvAwL3Awb3DxMHFxcPGxsPHx8TIycXLzMjLzMnMzMnNzsrPz8vP0MzQ0M3S0s/U1NDV1dLX19TY2NTY2NXZ2dba2tXb29bc3Nfc3Njc3dnd3dre3tre39vg4Nvh4dzi4t3i4t7j497k5N/k5ODl5eDl5eHl5uLm5uHn5+Lo6OPp6eTq6uXr6+bs7Oft7eh54KxIAAAAB3RSTlMAHKbl5uztvql9swAABA1JREFUeNrt3VlT01AYgOG0oEEE910URNzFBVFcqCgKirLU/P8fI3QYbEOSdtrMyJzzvHfMlFx833NBQuY0SRrN8UwqabzZSJLGaYNQVacaSdMUVF0zGTMEVTeWmIH6BYkgESSCRJAIEkEiSCRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRJBIkAgSQSJIBIkgESSCRIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSQSJBIkgEiSARJIJEkAgSCRJBIkgEiSARJIJEgkSQ5PvxbdS+tyEJuZVb0+noTV579geSQGs/SOvqxiYkYfYwra+rbUhC7NNEjUjSJ5CE2P06jaTnIAmxKwe7vb468t3N14WOki1IAuzMwWrf1HCh3Q6S95AEWGe1b0/WlSCBBBJIIAkdSXvt1aNXa21IICld7dJU5+epJUggKV7tzuzRA4/ZHUggKVrtfNdjsXlIIClY7XLPw9NlSCA5vtqLPUguQgLJsdX+zv0fZhsSSPKrXckhWSn5jV8zG5DEiuR1DsnrEiOX0vMbkESKZDWHZLXMSFqsBJIIkOz1vn40sVdqpFgJJDHc3dzsQXKzwkihEkhiQLI+2f3y+3qVkSIlkMSAJFvsQrJYbaRACSRRIMlenj0UcPZlPyPHlUASB5Jsc+7cwevMc5v9jRxTAkkkSPbb+riVZYMYySuBJB4kJRUYySmBJHYkhUZ6lUASOZISIz1KIIkbSamRbiWQxIZkvT2YkS4lkESGpDV9tz2YkX9KIIkLSWs6TY+U9DFypASSqJC0OicfHSrpa2T/k5BEh6R1eDpWR8kARtIZSGJD0jo6QW1fySBGIIkOSavrlL27PwcxAklsSFo9JzFOppBAkl9ta5jTOiGJCslQRiCJCslwRiCJCcmQRiCJCMmwRiCJB8mXoU+YhyQaJM9TSCCBBBJIIIEEEkgggQQSSCCJAsnyzLA9hiQWJCfnSpBAAgkkkATXxFCnPxfU7iB5B0mAXT5Y7Z3t0Y087SDZgCTA7tX6bZ5TGSQBtlwrkgVIgmy+RiMXdiEJsp3b9Rn5nEESaC/O1/P3yMJuBkm4bX94O2rvNiKbWXRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRIJEkAgSQSJIBIkgESQSJIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSCRJBIkgEiSARJIJEkEiQCBJBIkgEiSARJIJEgkSQCBJBIkgEiSARJBIkgkSQ6P8gGTMDVTeWNA1B1TWTxmlTUFWnGknSaI4bhMoabzaSv+4BHFVoHZzfAAAAAElFTkSuQmCC"
                                                                id="address_proff" /> --}}

                                                                <img class="image-preview image_address_proff" style="width: 100%;height: 150px;object-fit: contain;"
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAiQAAAD6CAMAAACmhqw0AAAA+VBMVEUAAAD29u3u7unt7ent7enu7uju7uihoqCio6Gio6KjpKOkpaSmpqSmp6WoqKaqq6mqq6qrq6qsrautrauur62wsa6xsa+xsrCys7GztLK0tbK1trS2t7S3t7W4uba5ure6u7e7vLm8vbu9vrvAwL3Awb3DxMHFxcPGxsPHx8TIycXLzMjLzMnMzMnNzsrPz8vP0MzQ0M3S0s/U1NDV1dLX19TY2NTY2NXZ2dba2tXb29bc3Nfc3Njc3dnd3dre3tre39vg4Nvh4dzi4t3i4t7j497k5N/k5ODl5eDl5eHl5uLm5uHn5+Lo6OPp6eTq6uXr6+bs7Oft7eh54KxIAAAAB3RSTlMAHKbl5uztvql9swAABA1JREFUeNrt3VlT01AYgOG0oEEE910URNzFBVFcqCgKirLU/P8fI3QYbEOSdtrMyJzzvHfMlFx833NBQuY0SRrN8UwqabzZSJLGaYNQVacaSdMUVF0zGTMEVTeWmIH6BYkgESSCRJAIEkEiSCRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRJBIkAgSQSJIBIkgESSCRIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSQSJBIkgEiSARJIJEkAgSCRJBIkgEiSARJIJEgkSQ5PvxbdS+tyEJuZVb0+noTV579geSQGs/SOvqxiYkYfYwra+rbUhC7NNEjUjSJ5CE2P06jaTnIAmxKwe7vb468t3N14WOki1IAuzMwWrf1HCh3Q6S95AEWGe1b0/WlSCBBBJIIAkdSXvt1aNXa21IICld7dJU5+epJUggKV7tzuzRA4/ZHUggKVrtfNdjsXlIIClY7XLPw9NlSCA5vtqLPUguQgLJsdX+zv0fZhsSSPKrXckhWSn5jV8zG5DEiuR1DsnrEiOX0vMbkESKZDWHZLXMSFqsBJIIkOz1vn40sVdqpFgJJDHc3dzsQXKzwkihEkhiQLI+2f3y+3qVkSIlkMSAJFvsQrJYbaRACSRRIMlenj0UcPZlPyPHlUASB5Jsc+7cwevMc5v9jRxTAkkkSPbb+riVZYMYySuBJB4kJRUYySmBJHYkhUZ6lUASOZISIz1KIIkbSamRbiWQxIZkvT2YkS4lkESGpDV9tz2YkX9KIIkLSWs6TY+U9DFypASSqJC0OicfHSrpa2T/k5BEh6R1eDpWR8kARtIZSGJD0jo6QW1fySBGIIkOSavrlL27PwcxAklsSFo9JzFOppBAkl9ta5jTOiGJCslQRiCJCslwRiCJCcmQRiCJCMmwRiCJB8mXoU+YhyQaJM9TSCCBBBJIIIEEEkgggQQSSCCJAsnyzLA9hiQWJCfnSpBAAgkkkATXxFCnPxfU7iB5B0mAXT5Y7Z3t0Y087SDZgCTA7tX6bZ5TGSQBtlwrkgVIgmy+RiMXdiEJsp3b9Rn5nEESaC/O1/P3yMJuBkm4bX94O2rvNiKbWXRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRIJEkAgSQSJIBIkgESQSJIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSCRJBIkgEiSARJIJEkEiQCBJBIkgEiSARJIJEgkSQCBJBIkgEiSARJBIkgkSQ6P8gGTMDVTeWNA1B1TWTxmlTUFWnGknSaI4bhMoabzaSv+4BHFVoHZzfAAAAAElFTkSuQmCC"
                                                                id="address_proff_image" />
                                                                <iframe class="iframe_address_proff" style="display: none" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAiQAAAD6CAMAAACmhqw0AAAA+VBMVEUAAAD29u3u7unt7ent7enu7uju7uihoqCio6Gio6KjpKOkpaSmpqSmp6WoqKaqq6mqq6qrq6qsrautrauur62wsa6xsa+xsrCys7GztLK0tbK1trS2t7S3t7W4uba5ure6u7e7vLm8vbu9vrvAwL3Awb3DxMHFxcPGxsPHx8TIycXLzMjLzMnMzMnNzsrPz8vP0MzQ0M3S0s/U1NDV1dLX19TY2NTY2NXZ2dba2tXb29bc3Nfc3Njc3dnd3dre3tre39vg4Nvh4dzi4t3i4t7j497k5N/k5ODl5eDl5eHl5uLm5uHn5+Lo6OPp6eTq6uXr6+bs7Oft7eh54KxIAAAAB3RSTlMAHKbl5uztvql9swAABA1JREFUeNrt3VlT01AYgOG0oEEE910URNzFBVFcqCgKirLU/P8fI3QYbEOSdtrMyJzzvHfMlFx833NBQuY0SRrN8UwqabzZSJLGaYNQVacaSdMUVF0zGTMEVTeWmIH6BYkgESSCRJAIEkEiSCRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRJBIkAgSQSJIBIkgESSCRIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSQSJBIkgEiSARJIJEkAgSCRJBIkgEiSARJIJEgkSQ5PvxbdS+tyEJuZVb0+noTV579geSQGs/SOvqxiYkYfYwra+rbUhC7NNEjUjSJ5CE2P06jaTnIAmxKwe7vb468t3N14WOki1IAuzMwWrf1HCh3Q6S95AEWGe1b0/WlSCBBBJIIAkdSXvt1aNXa21IICld7dJU5+epJUggKV7tzuzRA4/ZHUggKVrtfNdjsXlIIClY7XLPw9NlSCA5vtqLPUguQgLJsdX+zv0fZhsSSPKrXckhWSn5jV8zG5DEiuR1DsnrEiOX0vMbkESKZDWHZLXMSFqsBJIIkOz1vn40sVdqpFgJJDHc3dzsQXKzwkihEkhiQLI+2f3y+3qVkSIlkMSAJFvsQrJYbaRACSRRIMlenj0UcPZlPyPHlUASB5Jsc+7cwevMc5v9jRxTAkkkSPbb+riVZYMYySuBJB4kJRUYySmBJHYkhUZ6lUASOZISIz1KIIkbSamRbiWQxIZkvT2YkS4lkESGpDV9tz2YkX9KIIkLSWs6TY+U9DFypASSqJC0OicfHSrpa2T/k5BEh6R1eDpWR8kARtIZSGJD0jo6QW1fySBGIIkOSavrlL27PwcxAklsSFo9JzFOppBAkl9ta5jTOiGJCslQRiCJCslwRiCJCcmQRiCJCMmwRiCJB8mXoU+YhyQaJM9TSCCBBBJIIIEEEkgggQQSSCCJAsnyzLA9hiQWJCfnSpBAAgkkkATXxFCnPxfU7iB5B0mAXT5Y7Z3t0Y087SDZgCTA7tX6bZ5TGSQBtlwrkgVIgmy+RiMXdiEJsp3b9Rn5nEESaC/O1/P3yMJuBkm4bX94O2rvNiKbWXRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRIJEkAgSQSJIBIkgESQSJIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSCRJBIkgEiSARJIJEkEiQCBJBIkgEiSARJIJEgkSQCBJBIkgEiSARJBIkgkSQ6P8gGTMDVTeWNA1B1TWTxmlTUFWnGknSaI4bhMoabzaSv+4BHFVoHZzfAAAAAElFTkSuQmCC" id="address_proff_iframe" width="50%" height="600" scrolling="no">
                                                                    This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('folder/file_name.pdf') }}">Download PDF</a>
                                                            </iframe>

                                                                @endif

                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="demo-upload-container" role="main">
                                                        <strong for="account-website">Mechanic Docs</strong>
                                                        <div class="custom-file-container"
                                                            data-upload-id="mySecondImage">
                                                            <div class="label-container">
                                                            </div>
                                                            <label class="input-container">
                                                                <input accept="*" onchange="loadMechanicDocs(event)"
                                                                    aria-label="Choose File" class="input-hidden"
                                                                    id="file-upload-with-preview-mySecondImage"
                                                                    type="file" name="mechanic_docs">
                                                                <span class="input-visible">Choose file...<span
                                                                        class="browse-button">Browse</span></span>
                                                            </label>
                                                            @if(auth()->user()->profile['mechanic_docs']!=null)
                                                            @php
                                                            $imageExtensions2 = ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'svg', 'svgz', 'cgm', 'djv', 'djvu', 'ico', 'ief','jpe', 'pbm', 'pgm', 'pnm', 'ppm', 'ras', 'rgb', 'tif', 'tiff', 'wbmp', 'xbm', 'xpm', 'xwd'];

                                                            $explodeImage2 = explode('.', auth()->user()->profile['mechanic_docs']);
                                                            $extension2 = end($explodeImage2);
                                                        @endphp 
                                                         @if (in_array($extension2, $imageExtensions2))
                                                         <img class="image-preview image_mechanic" style="width: 100%;height: 100px;object-fit: contain;"
                                                         src="{{ URL::to(auth()->user()->profile['mechanic_docs']??'') }}"
                                                         id="mechanic_docs" />
                                                         <iframe class="iframe_mechanic" style="display: none"  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAiQAAAD6CAMAAACmhqw0AAAA+VBMVEUAAAD29u3u7unt7ent7enu7uju7uihoqCio6Gio6KjpKOkpaSmpqSmp6WoqKaqq6mqq6qrq6qsrautrauur62wsa6xsa+xsrCys7GztLK0tbK1trS2t7S3t7W4uba5ure6u7e7vLm8vbu9vrvAwL3Awb3DxMHFxcPGxsPHx8TIycXLzMjLzMnMzMnNzsrPz8vP0MzQ0M3S0s/U1NDV1dLX19TY2NTY2NXZ2dba2tXb29bc3Nfc3Njc3dnd3dre3tre39vg4Nvh4dzi4t3i4t7j497k5N/k5ODl5eDl5eHl5uLm5uHn5+Lo6OPp6eTq6uXr6+bs7Oft7eh54KxIAAAAB3RSTlMAHKbl5uztvql9swAABA1JREFUeNrt3VlT01AYgOG0oEEE910URNzFBVFcqCgKirLU/P8fI3QYbEOSdtrMyJzzvHfMlFx833NBQuY0SRrN8UwqabzZSJLGaYNQVacaSdMUVF0zGTMEVTeWmIH6BYkgESSCRJAIEkEiSCRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRJBIkAgSQSJIBIkgESSCRIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSQSJBIkgEiSARJIJEkAgSCRJBIkgEiSARJIJEgkSQ5PvxbdS+tyEJuZVb0+noTV579geSQGs/SOvqxiYkYfYwra+rbUhC7NNEjUjSJ5CE2P06jaTnIAmxKwe7vb468t3N14WOki1IAuzMwWrf1HCh3Q6S95AEWGe1b0/WlSCBBBJIIAkdSXvt1aNXa21IICld7dJU5+epJUggKV7tzuzRA4/ZHUggKVrtfNdjsXlIIClY7XLPw9NlSCA5vtqLPUguQgLJsdX+zv0fZhsSSPKrXckhWSn5jV8zG5DEiuR1DsnrEiOX0vMbkESKZDWHZLXMSFqsBJIIkOz1vn40sVdqpFgJJDHc3dzsQXKzwkihEkhiQLI+2f3y+3qVkSIlkMSAJFvsQrJYbaRACSRRIMlenj0UcPZlPyPHlUASB5Jsc+7cwevMc5v9jRxTAkkkSPbb+riVZYMYySuBJB4kJRUYySmBJHYkhUZ6lUASOZISIz1KIIkbSamRbiWQxIZkvT2YkS4lkESGpDV9tz2YkX9KIIkLSWs6TY+U9DFypASSqJC0OicfHSrpa2T/k5BEh6R1eDpWR8kARtIZSGJD0jo6QW1fySBGIIkOSavrlL27PwcxAklsSFo9JzFOppBAkl9ta5jTOiGJCslQRiCJCslwRiCJCcmQRiCJCMmwRiCJB8mXoU+YhyQaJM9TSCCBBBJIIIEEEkgggQQSSCCJAsnyzLA9hiQWJCfnSpBAAgkkkATXxFCnPxfU7iB5B0mAXT5Y7Z3t0Y087SDZgCTA7tX6bZ5TGSQBtlwrkgVIgmy+RiMXdiEJsp3b9Rn5nEESaC/O1/P3yMJuBkm4bX94O2rvNiKbWXRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRIJEkAgSQSJIBIkgESQSJIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSCRJBIkgEiSARJIJEkEiQCBJBIkgEiSARJIJEgkSQCBJBIkgEiSARJBIkgkSQ6P8gGTMDVTeWNA1B1TWTxmlTUFWnGknSaI4bhMoabzaSv+4BHFVoHZzfAAAAAElFTkSuQmCC" id="mechanic_docs_iframe" width="50%" height="600" scrolling="no">
                                                                 This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('folder/file_name.pdf') }}">Download PDF</a>
                                                         </iframe>
                                                         @else
                                                         <img class="image-preview image_mechanic" style="width: 100%;height: 150px;object-fit: contain; display: none"
                                                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAiQAAAD6CAMAAACmhqw0AAAA+VBMVEUAAAD29u3u7unt7ent7enu7uju7uihoqCio6Gio6KjpKOkpaSmpqSmp6WoqKaqq6mqq6qrq6qsrautrauur62wsa6xsa+xsrCys7GztLK0tbK1trS2t7S3t7W4uba5ure6u7e7vLm8vbu9vrvAwL3Awb3DxMHFxcPGxsPHx8TIycXLzMjLzMnMzMnNzsrPz8vP0MzQ0M3S0s/U1NDV1dLX19TY2NTY2NXZ2dba2tXb29bc3Nfc3Njc3dnd3dre3tre39vg4Nvh4dzi4t3i4t7j497k5N/k5ODl5eDl5eHl5uLm5uHn5+Lo6OPp6eTq6uXr6+bs7Oft7eh54KxIAAAAB3RSTlMAHKbl5uztvql9swAABA1JREFUeNrt3VlT01AYgOG0oEEE910URNzFBVFcqCgKirLU/P8fI3QYbEOSdtrMyJzzvHfMlFx833NBQuY0SRrN8UwqabzZSJLGaYNQVacaSdMUVF0zGTMEVTeWmIH6BYkgESSCRJAIEkEiSCRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRJBIkAgSQSJIBIkgESSCRIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSQSJBIkgEiSARJIJEkAgSCRJBIkgEiSARJIJEgkSQ5PvxbdS+tyEJuZVb0+noTV579geSQGs/SOvqxiYkYfYwra+rbUhC7NNEjUjSJ5CE2P06jaTnIAmxKwe7vb468t3N14WOki1IAuzMwWrf1HCh3Q6S95AEWGe1b0/WlSCBBBJIIAkdSXvt1aNXa21IICld7dJU5+epJUggKV7tzuzRA4/ZHUggKVrtfNdjsXlIIClY7XLPw9NlSCA5vtqLPUguQgLJsdX+zv0fZhsSSPKrXckhWSn5jV8zG5DEiuR1DsnrEiOX0vMbkESKZDWHZLXMSFqsBJIIkOz1vn40sVdqpFgJJDHc3dzsQXKzwkihEkhiQLI+2f3y+3qVkSIlkMSAJFvsQrJYbaRACSRRIMlenj0UcPZlPyPHlUASB5Jsc+7cwevMc5v9jRxTAkkkSPbb+riVZYMYySuBJB4kJRUYySmBJHYkhUZ6lUASOZISIz1KIIkbSamRbiWQxIZkvT2YkS4lkESGpDV9tz2YkX9KIIkLSWs6TY+U9DFypASSqJC0OicfHSrpa2T/k5BEh6R1eDpWR8kARtIZSGJD0jo6QW1fySBGIIkOSavrlL27PwcxAklsSFo9JzFOppBAkl9ta5jTOiGJCslQRiCJCslwRiCJCcmQRiCJCMmwRiCJB8mXoU+YhyQaJM9TSCCBBBJIIIEEEkgggQQSSCCJAsnyzLA9hiQWJCfnSpBAAgkkkATXxFCnPxfU7iB5B0mAXT5Y7Z3t0Y087SDZgCTA7tX6bZ5TGSQBtlwrkgVIgmy+RiMXdiEJsp3b9Rn5nEESaC/O1/P3yMJuBkm4bX94O2rvNiKbWXRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRIJEkAgSQSJIBIkgESQSJIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSCRJBIkgEiSARJIJEkEiQCBJBIkgEiSARJIJEgkSQCBJBIkgEiSARJBIkgkSQ6P8gGTMDVTeWNA1B1TWTxmlTUFWnGknSaI4bhMoabzaSv+4BHFVoHZzfAAAAAElFTkSuQmCC"
                                                             id="mechanic_docs_image" />
                                                         <iframe class="iframe_mechanic" src="{{ URL::to(auth()->user()->profile['mechanic_docs']??'') }}" id="mechanic_docs" width="50%" height="600">
                                                             This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('folder/file_name.pdf') }}">Download PDF</a>
                                                     </iframe>
                                                        @endif
                                                            <input type="hidden" name="old_mechanic_docs" value="{{ auth()->user()->profile['mechanic_docs']??'' }}">
                                                            @else
                                                            <img class="image-preview image_mechanic" style="width: 100%;height: 150px;object-fit: contain;"
                                                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAiQAAAD6CAMAAACmhqw0AAAA+VBMVEUAAAD29u3u7unt7ent7enu7uju7uihoqCio6Gio6KjpKOkpaSmpqSmp6WoqKaqq6mqq6qrq6qsrautrauur62wsa6xsa+xsrCys7GztLK0tbK1trS2t7S3t7W4uba5ure6u7e7vLm8vbu9vrvAwL3Awb3DxMHFxcPGxsPHx8TIycXLzMjLzMnMzMnNzsrPz8vP0MzQ0M3S0s/U1NDV1dLX19TY2NTY2NXZ2dba2tXb29bc3Nfc3Njc3dnd3dre3tre39vg4Nvh4dzi4t3i4t7j497k5N/k5ODl5eDl5eHl5uLm5uHn5+Lo6OPp6eTq6uXr6+bs7Oft7eh54KxIAAAAB3RSTlMAHKbl5uztvql9swAABA1JREFUeNrt3VlT01AYgOG0oEEE910URNzFBVFcqCgKirLU/P8fI3QYbEOSdtrMyJzzvHfMlFx833NBQuY0SRrN8UwqabzZSJLGaYNQVacaSdMUVF0zGTMEVTeWmIH6BYkgESSCRJAIEkEiSCRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRJBIkAgSQSJIBIkgESSCRIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSQSJBIkgEiSARJIJEkAgSCRJBIkgEiSARJIJEgkSQ5PvxbdS+tyEJuZVb0+noTV579geSQGs/SOvqxiYkYfYwra+rbUhC7NNEjUjSJ5CE2P06jaTnIAmxKwe7vb468t3N14WOki1IAuzMwWrf1HCh3Q6S95AEWGe1b0/WlSCBBBJIIAkdSXvt1aNXa21IICld7dJU5+epJUggKV7tzuzRA4/ZHUggKVrtfNdjsXlIIClY7XLPw9NlSCA5vtqLPUguQgLJsdX+zv0fZhsSSPKrXckhWSn5jV8zG5DEiuR1DsnrEiOX0vMbkESKZDWHZLXMSFqsBJIIkOz1vn40sVdqpFgJJDHc3dzsQXKzwkihEkhiQLI+2f3y+3qVkSIlkMSAJFvsQrJYbaRACSRRIMlenj0UcPZlPyPHlUASB5Jsc+7cwevMc5v9jRxTAkkkSPbb+riVZYMYySuBJB4kJRUYySmBJHYkhUZ6lUASOZISIz1KIIkbSamRbiWQxIZkvT2YkS4lkESGpDV9tz2YkX9KIIkLSWs6TY+U9DFypASSqJC0OicfHSrpa2T/k5BEh6R1eDpWR8kARtIZSGJD0jo6QW1fySBGIIkOSavrlL27PwcxAklsSFo9JzFOppBAkl9ta5jTOiGJCslQRiCJCslwRiCJCcmQRiCJCMmwRiCJB8mXoU+YhyQaJM9TSCCBBBJIIIEEEkgggQQSSCCJAsnyzLA9hiQWJCfnSpBAAgkkkATXxFCnPxfU7iB5B0mAXT5Y7Z3t0Y087SDZgCTA7tX6bZ5TGSQBtlwrkgVIgmy+RiMXdiEJsp3b9Rn5nEESaC/O1/P3yMJuBkm4bX94O2rvNiKbWXRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRIJEkAgSQSJIBIkgESQSJIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSCRJBIkgEiSARJIJEkEiQCBJBIkgEiSARJIJEgkSQCBJBIkgEiSARJBIkgkSQ6P8gGTMDVTeWNA1B1TWTxmlTUFWnGknSaI4bhMoabzaSv+4BHFVoHZzfAAAAAElFTkSuQmCC"
                                                                id="mechanic_docs_image" />
                                                                <iframe class="iframe_mechanic" style="display: none" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAiQAAAD6CAMAAACmhqw0AAAA+VBMVEUAAAD29u3u7unt7ent7enu7uju7uihoqCio6Gio6KjpKOkpaSmpqSmp6WoqKaqq6mqq6qrq6qsrautrauur62wsa6xsa+xsrCys7GztLK0tbK1trS2t7S3t7W4uba5ure6u7e7vLm8vbu9vrvAwL3Awb3DxMHFxcPGxsPHx8TIycXLzMjLzMnMzMnNzsrPz8vP0MzQ0M3S0s/U1NDV1dLX19TY2NTY2NXZ2dba2tXb29bc3Nfc3Njc3dnd3dre3tre39vg4Nvh4dzi4t3i4t7j497k5N/k5ODl5eDl5eHl5uLm5uHn5+Lo6OPp6eTq6uXr6+bs7Oft7eh54KxIAAAAB3RSTlMAHKbl5uztvql9swAABA1JREFUeNrt3VlT01AYgOG0oEEE910URNzFBVFcqCgKirLU/P8fI3QYbEOSdtrMyJzzvHfMlFx833NBQuY0SRrN8UwqabzZSJLGaYNQVacaSdMUVF0zGTMEVTeWmIH6BYkgESSCRJAIEkEiSCRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRJBIkAgSQSJIBIkgESSCRIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSQSJBIkgEiSARJIJEkAgSCRJBIkgEiSARJIJEgkSQ5PvxbdS+tyEJuZVb0+noTV579geSQGs/SOvqxiYkYfYwra+rbUhC7NNEjUjSJ5CE2P06jaTnIAmxKwe7vb468t3N14WOki1IAuzMwWrf1HCh3Q6S95AEWGe1b0/WlSCBBBJIIAkdSXvt1aNXa21IICld7dJU5+epJUggKV7tzuzRA4/ZHUggKVrtfNdjsXlIIClY7XLPw9NlSCA5vtqLPUguQgLJsdX+zv0fZhsSSPKrXckhWSn5jV8zG5DEiuR1DsnrEiOX0vMbkESKZDWHZLXMSFqsBJIIkOz1vn40sVdqpFgJJDHc3dzsQXKzwkihEkhiQLI+2f3y+3qVkSIlkMSAJFvsQrJYbaRACSRRIMlenj0UcPZlPyPHlUASB5Jsc+7cwevMc5v9jRxTAkkkSPbb+riVZYMYySuBJB4kJRUYySmBJHYkhUZ6lUASOZISIz1KIIkbSamRbiWQxIZkvT2YkS4lkESGpDV9tz2YkX9KIIkLSWs6TY+U9DFypASSqJC0OicfHSrpa2T/k5BEh6R1eDpWR8kARtIZSGJD0jo6QW1fySBGIIkOSavrlL27PwcxAklsSFo9JzFOppBAkl9ta5jTOiGJCslQRiCJCslwRiCJCcmQRiCJCMmwRiCJB8mXoU+YhyQaJM9TSCCBBBJIIIEEEkgggQQSSCCJAsnyzLA9hiQWJCfnSpBAAgkkkATXxFCnPxfU7iB5B0mAXT5Y7Z3t0Y087SDZgCTA7tX6bZ5TGSQBtlwrkgVIgmy+RiMXdiEJsp3b9Rn5nEESaC/O1/P3yMJuBkm4bX94O2rvNiKbWXRIBIkgESSCRJAIEkEiQSJIBIkgESSCRJAIEgkSQSJIBIkgESSCRIJEkAgSQSJIBIkgESQSJIJEkAgSQSJIBIkgkSARJIJEkAgSQSJIBIkEiSARJIJEkAgSQSJIJEgEiSARJIJEkAgSCRJBIkgEiSARJIJEkEiQCBJBIkgEiSARJIJEgkSQCBJBIkgEiSARJBIkgkSQ6P8gGTMDVTeWNA1B1TWTxmlTUFWnGknSaI4bhMoabzaSv+4BHFVoHZzfAAAAAElFTkSuQmCC" id="mechanic_docs_iframe" width="50%" height="600" scrolling="no">
                                                                    This browser does not support PDFs. Please download the PDF to view it: <a href="{{ asset('folder/file_name.pdf') }}">Download PDF</a>
                                                            </iframe>

                                                                @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>












                                            <div class="col-12 mt-2 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                    changes</button>
                                                {{-- <button type="reset" class="btn btn-light">Cancel</button> --}}
                                            </div>
                                        </div>

                              
                               
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane @if(session('settingValue')=="JOB") active @endif" id="account-vertical-general-job" aria-labelledby="account-pill-general" aria-expanded="true">
                                    <form novalidate method="post" action="{{ route('vender.service.update') }}" enctype="multipart/form-data">
                                        @csrf
                                        <h4>Services</h4>
                                        <hr />

                                       <div class="row">
                                        @foreach ($all_services as $service)
                                        <div class="col-md-12">
                                            <fieldset>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input selectall{{  $service['id'] }}" @foreach ($user['vender_services'] as $warrantyjob) @if($warrantyjob['id']==$service['id']) checked @endif @endforeach onchange="onchangeCheckbox(`{{ $service['id'] }}`)" name="service_id[]" value="{{ $service['id'] }}"
                                                   id="custom-warratanty{{ $service['id'] }}"
                                                        value="">
                                                    <label class="custom-control-label" for="custom-warratanty{{ $service['id'] }}">{{ $service['name'] }} (Main Services) </label>
                                                </div>
                                        </div>
                                         <hr />

                                        @foreach ($service['child_services'] as $c_service)
                                        <div class="col-md-3">
                                            <fieldset>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input tf{{ $service['id'] }}" @foreach ($user['vender_services'] as $warrantyjob) @if($warrantyjob['id']==$c_service['id']) checked @endif @endforeach name="service_id[]" value="{{ $c_service['id'] }}"
                                                   id="custom-warratanty{{ $c_service['id'] }}"
                                                        value="">
                                                    <label class="custom-control-label" for="custom-warratanty{{ $c_service['id'] }}">{{ $c_service['name'] }}</label>
                                                </div>
                                        </div>

                                            
                                        @endforeach
                                         <hr />
                                        @endforeach
                                       
                                        </fieldset>
                                         </div>
                                         
                                       {{-- </div> --}}
                                        

                                       <div class="col-12 mt-2 d-flex flex-sm-row flex-column justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                            changes</button>
                                        {{-- <button type="reset" class="btn btn-light">Cancel</button> --}}
                                    </div>
                               
                                    </form>
                                </div>
                                <div class="tab-pane  @if(session('settingValue')==" PAYMENT") active show @endif"
                                    id="account-vertical-info" role="tabpanel" aria-labelledby="account-pill-info"
                                    aria-expanded="false">

                                    <div class="row" style="margin-bottom:30px; margin-left: 3px;">

                                        <h3>Credit Card</h3>

                                    </div>
                                    {{-- <form novalidate> --}}
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="account-phone">Credit Card
                                                            Number</label>
                                                        <div type="text" class="form-control" id="card-number-element">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="account-website">CVV</label>
                                                    <div type="text" class="form-control" id="card-cvc-element"
                                                        placeholder="cvv"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="account-website">Expiry Date</label>
                                                    <div type="text" class="form-control" id="card-expiry-element"
                                                        placeholder="Expiry Date"></div>
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button class="btn btn-primary mr-sm-1 mb-1 mb-sm-0" id="card-button"
                                                    data-secret="{{ $intent->client_secret??'' }}"><img
                                                        class="show-loader"
                                                        style="width: 40px;height: 30px;display:none"
                                                        src="{{ URL::to('assets/images/gif.gif') }}"> Update Card
                                                </button>
                                                <button type="reset" class="btn btn-light">Cancel</button>
                                            </div>
                                        </div>
                                        {{--
                                    </form> --}}
                                </div>
                                <div class="tab-pane  @if(session('settingValue')==" SOCIAL") active show @else fade
                                    @endif " id="account-vertical-social" role="tabpanel"
                                    aria-labelledby="account-pill-social" aria-expanded="false">
                                    <form action="{{ route('vender.setting.social.update') }}" method="post">
                                        @csrf
                                        <div class="row">

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-facebook">Facebook</label>
                                                    <input type="text" id="account-facebook" name="facebook"
                                                        value="{{ auth()->user()->profile['facebook']??'' }}"
                                                        class="form-control" placeholder="Add link">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-google">Trust Pilot</label>
                                                    <input type="text" id="account-google" name="trust_plot_link"
                                                        value="{{ auth()->user()->profile['trust_plot_link']??'' }}"
                                                        class="form-control" placeholder="Add link">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="account-instagram">Instagram</label>
                                                    <input type="text" id="account-instagram" name="instagram"
                                                        value="{{ auth()->user()->profile['instagram']??'' }}"
                                                        class="form-control" placeholder="Add link">
                                                </div>
                                            </div>

                                            <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                    changes</button>
                                                <button type="reset" class="btn btn-light">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane  @if(session('settingValue')==" SUBSCRIPTION") active show @else
                                    fade @endif" id="account-vertical-connections" role="tabpanel"
                                    aria-labelledby="account-pill-connections" aria-expanded="false">
                                    @if(auth()->user()->profile['mechanic_docs']!=null)
                                    <div class="row">
                                        <div class="col-12 ">

                                            <p> <strong> Current Plan </strong> </p>
                                            <h6>{{ $sub }} </h6>
                                        </div>

                                        <div class="col-12">
                                            @if(auth()->user()->subscription($sub)!=null)
                                            @if(auth()->user()->subscription($sub)->canceled())
                                            <button class="btn btn-primary" style="margin:25px 0px;"><a
                                                    style="color: white"
                                                    href="{{ route('vender.resume.subscription') }}">Resume
                                                    Subscription</a></button>
                                            @else
                                            <button class="btn btn-primary" style="margin:25px 0px;"><a
                                                    style="color: white"
                                                    href="{{ route('vender.end.subscription') }}">End Subscription</a>
                                            </button>

                                            @endif

                                            @endif
                                         
                                        </div>
                                        <div class="col-12 mb-1">
                                            <hr>
                                        </div>

                                        <div class="col-12">
                                            @if(auth()->user()->subscription($sub)!=null)

                                            <p> <strong> Current Billing Cycle </strong> </p>
                                            @if(auth()->user()->subscription($sub)->canceled())
                                            Subscription End At - {{ $end_date }}

                                            @else
                                            <h6>{{ $start_date }} - {{ $end_date }}</h6>
                                            @endif
                                            @endif
                                        </div>

                                        <div class="col-12 my-3">
                                            <hr>
                                        </div>


                                        <div class="table-responsive my-2">
                                            <div id="DataTables_Table_0_wrapper"
                                                class="dataTables_wrapper dt-bootstrap4">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="dataTables_length" id="DataTables_Table_0_length">
                                                            <label>Show
                                                                <select name="DataTables_Table_0_length"
                                                                    aria-controls="DataTables_Table_0"
                                                                    class="custom-select custom-select-sm form-control form-control-sm">
                                                                    <option value="10">10</option>
                                                                    <option value="25">25</option>
                                                                    <option value="50">50</option>
                                                                    <option value="100">100</option>
                                                                </select> entries</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                            <label>Search:<input type="search"
                                                                    class="form-control form-control-sm" placeholder=""
                                                                    aria-controls="DataTables_Table_0"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table
                                                            class="table table-striped table-bordered zero-configuration dataTable"
                                                            id="DataTables_Table_0" role="grid"
                                                            aria-describedby="DataTables_Table_0_info">
                                                            <thead>
                                                                <tr role="row">

                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="DataTables_Table_0" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Position: activate to sort column ascending"
                                                                        style="width: 394.391px;">Package
                                                                        Name</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="DataTables_Table_0" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Position: activate to sort column ascending"
                                                                        style="width: 394.391px;">Package
                                                                        Amount</th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="DataTables_Table_0" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Start date: activate to sort column ascending"
                                                                        style="width: 173.984px;">Start date
                                                                    </th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="DataTables_Table_0" rowspan="1"
                                                                        colspan="1"
                                                                        aria-label="Start date: activate to sort column ascending"
                                                                        style="width: 173.984px;">End date
                                                                    </th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                                @foreach ($transactions as $transaction)
                                                                <tr role="row" class="odd">

                                                                    <td>{{ $transaction['package']['name'] }}</td>
                                                                    <td>£ {{ $transaction['amount'] }}</td>
                                                                    <td>{{
                                                                        \Carbon\Carbon::parse($transaction->created_at)->format('F
                                                                        jS, Y') }}</td>
                                                                    <td>{{
                                                                        \Carbon\Carbon::parse($transaction->created_at)->addDays(1)->format('F
                                                                        jS, Y') }}</td>



                                                                </tr>
                                                                @endforeach


                                                            </tbody>
                                                            <tfoot>

                                                                <tr>

                                                                    <th rowspan="1" colspan="1">Package Name
                                                                    </th>
                                                                    <th rowspan="1" colspan="1">Package Amount
                                                                    </th>
                                                                    <th rowspan="1" colspan="1">Start date
                                                                    </th>
                                                                    <th rowspan="1" colspan="1">End date
                                                                    </th>

                                                                </tr>



                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>




                                    </div>

                                    @endif

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
@section('css_lib')

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/vendors/css/tables/datatable/datatables.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/vendors/css/vendors.min.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/vendors/css/forms/selects/select2.min.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/vendors/css/pickers/pickadate/pickadate.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/vendors/css/forms/toggle/switchery.min.css">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/colors.css">
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/components.css">
<!-- END: Theme CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/css/core/menu/menu-types/horizontal-menu.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/css/core/colors/palette-gradient.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/css/plugins/forms/validation/form-validation.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/css/plugins/pickers/daterange/daterange.css">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ URL::to('modules/vender/assets/css/style.css') }}">
<!-- END: Custom CSS-->

@endsection
@section('scripts_lib')
<!-- BEGIN: Vendor JS-->
<script src="{{asset('/modules/admin')}}/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('/modules/admin')}}/app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="{{asset('/modules/admin')}}/app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
<script src="{{asset('/modules/admin')}}/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="{{asset('/modules/admin')}}/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
<script src="{{asset('/modules/admin')}}/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
<script src="{{asset('/modules/admin')}}/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
<script src="{{asset('/modules/admin')}}/app-assets/vendors/js/forms/toggle/switchery.min.js"></script>
<script
    src="{{ URL::to('modules/admin/app-assets/vendors/js/forms/extended/inputmask/jquery.inputmask.bundle.min.js') }}">
</script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/forms/extended/typeahead/typeahead.bundle.min.js') }}">
</script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/forms/extended/typeahead/bloodhound.min.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/forms/extended/typeahead/handlebars.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/forms/extended/formatter/formatter.min.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/forms/extended/maxlength/bootstrap-maxlength.js') }}">
</script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/forms/extended/card/jquery.card.js') }}"></script>
<!-- END: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('/modules/admin')}}/app-assets/js/core/app-menu.js"></script>
<script src="{{asset('/modules/admin')}}/app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('/modules/admin')}}/app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
<script src="{{asset('/modules/admin')}}/app-assets/js/scripts/pages/account-setting.js"></script>
<script src="{{asset('/modules/admin')}}/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>

<script src="{{ URL::to('modules/admin/app-assets/js/scripts/forms/extended/form-inputmask.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/js/scripts/forms/extended/form-typeahead.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/js/scripts/forms/extended/form-formatter.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/js/scripts/forms/extended/form-maxlength.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/js/scripts/forms/extended/form-card.js') }}"></script>
<script src="https://unpkg.com/file-upload-with-preview/dist/file-upload-with-preview.iife.js"></script>

<script>
     function onchangeCheckbox(id){
        // alert(id);
        var status = $(`.selectall${id}`).is(":checked") ? true : false;
        console.log($(`.selectall${id}`).is(":checked"));
        $(`.tf${$(`.selectall${id}`).attr('value')}`).prop("checked",status);
    }
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
<script>
    var loadAddressProff = function(event) {
        
        const validImageTypes = ['image/gif', 'image/jpeg', 'image/png'];
           

            if (!validImageTypes.includes(event.target.files[0].type)) {
                $('.iframe_address_proff').show();
                $('.image_address_proff').hide();
                var image = document.getElementById('address_proff_iframe');
    
                image.src = URL.createObjectURL(event.target.files[0]);
            }else{
                $('.iframe_address_proff').hide();
                $('.image_address_proff').show();
                var image = document.getElementById('address_proff_image');
    
                image.src = URL.createObjectURL(event.target.files[0]);
            }
    
    };


</script>
<script>
    var loadMechanicDocs = function(event) {
      
    const validImageTypes = ['image/gif', 'image/jpeg', 'image/png'];
            if (!validImageTypes.includes(event.target.files[0].type)) {
                $('.iframe_mechanic').show();
                $('.image_mechanic').hide();
                var image = document.getElementById('mechanic_docs_iframe');
    
                image.src = URL.createObjectURL(event.target.files[0]);
            }else{
                $('.iframe_mechanic').hide();
                $('.image_mechanic').show();
                var image = document.getElementById('mechanic_docs_image');
    
                image.src = URL.createObjectURL(event.target.files[0]);
            }
    };


</script>

<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe('pk_test_9jgjsQVQTSPOOcDiQwv2mc34');
    var elements = stripe.elements();
    var cardNumberElement = elements.create('cardNumber', {
    
    placeholder: 'Credit Card / Debit Card Number',
    });
    cardNumberElement.mount('#card-number-element');
    
    var cardExpiryElement = elements.create('cardExpiry', {
    
    });
    cardExpiryElement.mount('#card-expiry-element');
    
    var cardCvcElement = elements.create('cardCvc', {
    
    });
        cardCvcElement.mount('#card-cvc-element');
        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;

        console.log(clientSecret);
        
        cardButton.addEventListener('click', async (e) => {
            $('.show-loader').css("display", "revert");
       const { paymentMethod, error } = await stripe.createPaymentMethod(
        'card', cardNumberElement, {
        billing_details: { name: @json(auth()->user()->name) }
        }
        );
        
        if (error) {
        // Display "error.message" to the user...
        } else {
        // The card has been verified successfully...
        

        $.ajax({
                type: 'POST',
                url: '{{ route('vender.payment.method.update') }}',
                data: {
                    paymentMethod:paymentMethod.id,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    
                
                if(response==1){
                    console.log(response);

                    $('.show-loader').css("display", "none");
                    
                  window.location.reload();
                
                }
                
                
                },
                error: function (error) {
            $('.show-loader').css("display", "none");
                
                
                }
        });
        }
        });
</script>

<script>
    // const upload = new FileUploadWithPreview.FileUploadWithPreview('myFirstImage');
    // const uploads = new FileUploadWithPreview.FileUploadWithPreview('mySecondImage');

    // $('#file-upload-with-preview-myFirstImage').attr('name', 'other_amount');
</script>

<!-- END: Page JS-->

@endsection
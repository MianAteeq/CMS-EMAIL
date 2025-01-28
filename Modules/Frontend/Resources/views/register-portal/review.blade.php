@extends('frontend::new-layouts.master')

@section('css')

<style>
    .collapse-icon [data-toggle="collapse"]:after {
    position: absolute;
    top: 48%;
    right: 20px;
    margin-top: -8px;
    font-family: 'feather';
    content: "\e845";
    transition: all 300ms linear 0s;
}
.collapse-icon [data-toggle="collapse"]:before {
    position: absolute;
    top: 48%;
    right: 20px;
    margin-top: -8px;
    font-family: 'feather';
    content: "\e842";
    transition: all 300ms linear 0s;
}

.accordinbody{
    border-left: 2px solid black;
    margin-top: -4px;
    border-right: 2px solid black;
    border-bottom: 2px solid black;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
}
.accordin_style{
    border-left: 2px solid black;
    margin-top: -4px;
    border-right: 2px solid black;
    border-bottom: 2px solid black;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
}
</style>

@endsection


@section('content')

<div class="content-body">
    <div  class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12">
           <h3 class="h3">Business registration application</h3>
        </div>

    </div>

    <div class="row" style="margin-top: 10px;">
        <div class="col-md-4" id="contens">

            <div  @if($user['application_status']=="IN_REVIEW" && $user['profile']['business_status']!=3 && $user['profile']['trading_name_status']!=3 && $user['profile']['business_activities_status']!=3 && $user['profile']['vat_status']!=3 && $user['profile']['trade_unit_status']!=3 &&  $user['profile']['main_account_status']!=3 && $user['profile']['subscription_status']!=3) style="border-radius: 7px;border: 2px solid black;padding: 10px;" @else style="border-radius: 7px;border: 2px solid black;padding: 10px;"  @endif>
                <h4 class="h3" style="font-weight: 600;
                font-size: 17px; "> <img src="/home.png" style="width: 22px;margin-top: -5px;" > Review and submit</h2>

                @if($user['application_status']!="IN_REVIEW"  || $user['profile']['business_status']==3 || $user['profile']['trading_name_status']==3 || $user['profile']['business_activities_status']==3 || $user['profile']['vat_status']==3 || $user['profile']['trade_unit_status']==3 ||  $user['profile']['main_account_status']==3 || $user['profile']['subscription_status']==3 )
               <div text-center>  <span class="badge badge-info " style="background-color: darkblue;margin-left: 28px "> Request for Info </span></div>
                <p style="justify-content: center;padding-top: 19px;padding-bottom: 14px;">
                    You have answered all the required questions. Please review your supplied information. If you are happy with it, then please submit the application.

                </p>
                <ul style="margin-left: -10px;">
                    @if($user['profile']['is_business_info']==0)
                    <li style="color:red">
                        Your business information
                    </li>
                    @endif
                    @if($user['profile']['is_vat']==0)
                    <li style="color:red">
                        Your VAT
                    </li>
                    @endif
                    @if($user['profile']['is_trading_names']==0)
                    <li style="color:red">
                        Your Trading Name
                    </li>
                    @endif
                    @if($user['profile']['is_business_activity']==0)
                    <li style="color:red">
                        Your Business Activity
                    </li>
                    @endif
                    @if($user['profile']['is_trading_unit']==0)
                    <li style="color:red">
                        Your Trading Unit
                    </li>
                    @endif
                    @if($user['profile']['is_main_account']==0)
                    <li style="color:red">
                        Your Mian Contact
                    </li>
                    @endif
                    @if($user['profile']['is_subscription']==0)
                    <li style="color:red">
                        Your Subscription
                    </li>
                    @endif
                    @if($user['profile']['is_direct_debit']==0)
                    <li style="color:red">
                        Your Direct Debit Info
                    </li>
                    @endif
                    @if($user['profile']['is_bank']==0)
                    <li style="color:red">
                        Your Bank Info
                    </li>
                    @endif
                    @if($user['profile']['is_terms']==0)
                    <li style="color:red">
                        Your Term
                    </li>
                    @endif
                </ul>
                <div


                @if($user['profile']['is_business_info']==0 || $user['profile']['is_bank']==0  || $user['profile']['is_vat']==0 || $user['profile']['is_trading_names']==0
                  || $user['profile']['is_business_activity']==0 ||  $user['profile']['is_trading_unit']==0 ||  $user['profile']['is_main_account']==0 ||  $user['profile']['is_subscription']==0 ||  $user['profile']['is_terms']==0 || $user['profile']['is_direct_debit']==0)  class="foote d-none" @else class="foote" @endif style="border-top: 2px solid black;padding: 5px !important;text-align: center;margin: -11px ">
                    <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1" onclick="window.location.href=`{{route('vender.profile.submit')}}`" >SUBMIT APPLICATION</button>


                </div>
                @else
                <div text-center>  <span class="badge badge-info " style="background-color: green;margin-left: 28px "> In review </span></div>
                <p>Thank you for submitting the
                    required information. </p>
                    <p>We have received all the
                        information we need. The
                        supplied information is being
                        reviewed by us. Please kindly
                        wait patiently. We will be in
                        touch with you soon.</p>
                        <p>In the meantime, you can
                            review your application.</p>
                            <p>
                                Submission date and time: {{\Carbon\Carbon::parse($user['updated_at'])->format('d/m/y H:i')}}

                            </p>

                @endif

            </div>





        </div>

        <div class="col-md-8" style="height: auto;border: 2px solid black;border-radius: 8px;">
            <div class="link-body">
                <div class="card default-collapse collapse-icon accordion-icon-rotate" style="box-shadow: none;">



                    <a id="headingCollapse14" class="card-header info collapsed" @if ($user['profile']['is_business_info']===1) style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" @else style="border: 2px solid red;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" @endif
                     data-toggle="collapse" href="#collapse14" aria-expanded="false" aria-controls="collapse14">
                        <div class="card-title lead collapsed">Business information</div>
                    </a>
                    <div id="collapse14"  role="tabpanel" aria-labelledby="headingCollapse14" class="collapse accordin_style" @if ($user['profile']['is_business_info']===1) style="border-color:black;" @else style="border-color: red;"  @endif aria-expanded="false" style="">
                        <div class="card-content">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Organisation Structure</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                       {{$user['profile']['organization_status']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Address Line 1</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['address_line_1']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Address Line 2</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['address_line_2']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Address Line 3</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['address_line_3']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Address Line 4</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['address_line_4']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">City</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['city']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Postcode</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['postcode']}}
                                    </div>
                                </div>
                                {{-- <hr> --}}

                                @if($user['profile']['organization_status']==="Sole Trader / Self Employed")

                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Proof of Sole Trader / Self Employed Status</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                       <a href="{{URL::to($user['profile']['document_proof'])}}" style=" background-color: black !important;
                                       border-color: black !important;" class="btn btn-primary"> View</a>
                                    </div>
                                </div>
                                @endif
                                @if($user['application_status']!="IN_REVIEW" || $user['profile']['business_status']==3)

                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Action</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                       <a href="{{route('vender.profile.step',1)}}" style=" background-color: black !important;
                                       border-color: black !important;" class="btn btn-primary"> Edit</a>
                                    </div>
                                </div>
                                @endif





                            </div>
                        </div>
                    </div>

                    <a id="headingCollapsevat" class="card-header info mt-2" @if ($user['profile']['is_vat']===1) style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" @else style="border: 2px solid red;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" @endif data-toggle="collapse" href="#collapsevats" aria-expanded="false" aria-controls="collapsevats">
                        <div class="card-title lead collapsed">VAT</div>
                    </a>
                    <div id="collapsevats"  role="tabpanel" aria-labelledby="headingCollapsevats" class="collapse accordin_style"  @if ($user['profile']['is_vat']===1) style="border-color:black;" @else style="border-color: red;"  @endif aria-expanded="false" >
                        <div class="card-content">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Is your business UK VAT registered</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                       {{$user['profile']['vat_register']}}
                                    </div>
                                </div>

                                @if($user['profile']['vat_register']=="YES")
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">UK VAT Number</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['uk_vat_no']}}
                                    </div>
                                </div>

                                @endif
                                @if($user['application_status']!="IN_REVIEW" || $user['profile']['vat_status']==3)

                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Action</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                       <a href="{{route('vender.profile.step',2)}}" style=" background-color: black !important;
                                       border-color: black !important;" class="btn btn-primary"> Edit</a>
                                    </div>
                                </div>
                                @endif






                            </div>
                        </div>
                    </div>
                    <a id="headingCollapse14" class="card-header info mt-2" @if ($user['profile']['is_trading_names']===1) style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" @else style="border: 2px solid red;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" @endif data-toggle="collapse" href="#collaptr_name" aria-expanded="false" aria-controls="collaptr_name">
                        <div class="card-title lead collapsed">Trading names</div>
                    </a>
                    <div id="collaptr_name" role="tabpanel" aria-labelledby="headingCollaptr_name"  @if ($user['profile']['is_trading_names']===1) style="border-color:black;" @else style="border-color:red;"  @endif class="collapse accordin_style" aria-expanded="false" >
                        <div class="card-content">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Does your business use any trading
                                            names? *</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                       {{$user['profile']['is_trading_name']}}
                                    </div>
                                </div>

                                @if($user['profile']['is_trading_name']="YES")
                                <hr>
                                @foreach ($user['trading_names'] as $name)


                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Trading Name</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <div class="form-group rm-{{$name['id']}}" style="width: 100%">
                                            <p style="width: 30%;
                                            float: left;">{{$name['name']}}</p>
                                            <button class="btn btn-primary btn-sm view-btn-black"><a href="{{URL::to($name['proof'])}}" target="_blank" style="color: white"> View</a></button>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                @endforeach

                                @endif
                                @if($user['application_status']!="IN_REVIEW" || $user['profile']['trading_name_status']==3)

                                {{-- <hr> --}}
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Action</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                       <a href="{{route('vender.profile.step',3)}}" style=" background-color: black !important;
                                       border-color: black !important;" class="btn btn-primary"> Edit</a>
                                    </div>
                                </div>
                                @endif






                            </div>
                        </div>
                    </div>
                    <a id="headingCollapse14" class="card-header info mt-2" @if ($user['profile']['is_business_activity']===1) style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" @else style="border: 2px solid red;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" @endif data-toggle="collapse" href="#collapbs_name" aria-expanded="false" aria-controls="collapbs_name">
                        <div class="card-title lead collapsed">Business activities</div>
                    </a>
                    <div id="collapbs_name" role="tabpanel" aria-labelledby="headingCollapbs_name"  @if ($user['profile']['is_business_activity']===1) style="border-color:black;" @else style="border-color:red;"  @endif class="collapse accordin_style" aria-expanded="false" >
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Servies </h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        @foreach ($user['services'] as $service)

                                <span class="badge badge-success mt-1" style="padding: 0.5em 1.6em;background-color: black;">{{$service['service']['name']}}</span>
                                @endforeach
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Proof of business activities trading </h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <div class="form-group" style="width: 100%">
                                            <p style="width: 30%;
                                            float: left;">{{$user['profile']['business_proof_name']}}</p>
                                            <button class="btn btn-primary btn-sm view-btn-black"><a href="{{URL::to($user['profile']['business_proof'])}}" target="_blank" style="color: white"> View</a></button>

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                @if($user['application_status']!="IN_REVIEW" || $user['profile']['business_activities_status']==3)

                                {{-- <hr> --}}
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Action</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                       <a href="{{route('vender.profile.step',4)}}" style=" background-color: black !important;
                                       border-color: black !important;" class="btn btn-primary"> Edit</a>
                                    </div>
                                </div>
                                @endif

                            </div>
                        </div>
                    </div>
                    <a id="headingCollapse14" class="card-header info mt-2" @if ($user['profile']['is_trading_unit']===1) style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" @else style="border: 2px solid red;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" @endif data-toggle="collapse" href="#collaptr_unit" aria-expanded="false" aria-controls="collaptr_unit" >
                        <div class="card-title lead collapsed">Trade unit</div>
                    </a>
                    <div id="collaptr_unit" role="tabpanel" aria-labelledby="headingCollaptr_unit" class="collapse accordin_style"  @if ($user['profile']['is_trading_unit']===1) style="border-color:black;" @else style="border-color:red;"  @endif aria-expanded="false" >
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Does your business use any trading
                                            names? *</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                       {{$user['profile']['operation_type']}}
                                    </div>
                                </div>
                                @if ($user['site_address'] && $user['profile']['operation_type']!="Mobile")


                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Address Line 1</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['site_address']['address_line_1']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Address Line 2</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['site_address']['address_line_2']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Address Line 3</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['site_address']['address_line_3']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Address Line 4</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['site_address']['address_line_4']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">City</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['site_address']['city']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Postcode</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['site_address']['postcode']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Proof of trading at site address </h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <div class="form-group" style="width: 100%">
                                            <p style="width: 30%;
                                            float: left;">{{$user['site_address']['proof_name']}}</p>
                                            <button class="btn btn-primary btn-sm view-btn-black"><a href="{{URL::to($user['site_address']['proof'])}}" target="_blank" style="color: white"> View</a></button>

                                        </div>
                                    </div>
                                </div>
                                @endif
                                @if($user['application_status']!="IN_REVIEW" || $user['profile']['trade_unit_status']==3)

                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Action</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                       <a href="{{route('vender.profile.step',5)}}" style=" background-color: black !important;
                                       border-color: black !important;" class="btn btn-primary"> Edit</a>
                                    </div>
                                </div>
                                @endif

                            </div>
                        </div>
                    </div>
                    <a id="headingCollapse14" class="card-header info mt-2" @if ($user['profile']['is_main_account']===1) style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" @else style="border: 2px solid red;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" @endif data-toggle="collapse" href="#collapmain_conatct" aria-expanded="false" aria-controls="collapmain_conatct">
                        <div class="card-title lead collapsed">Main contact</div>
                    </a>
                    <div id="collapmain_conatct" role="tabpanel" aria-labelledby="headingCollapmain_conatct" class="collapse accordin_style"  @if ($user['profile']['is_main_account']===1) style="border-color:  black;" @else style="border-color:  red;"  @endif aria-expanded="false" >
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">First Name</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['name']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Middle  Name</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['middle_name']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Last  Name</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['last_name']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['email']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Phone No</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['phone_no']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Is this person authorised to act on
                                            behalf of this business</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['person_authorised']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Proof main contact person is
                                            authorised to act on behalf of this
                                            business </h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <div class="form-group" style="width: 100%">
                                            <p style="width: 30%;
                                            float: left;">{{$user['profile']['proof_of_main_contact_name']}}</p>
                                            <button class="btn btn-primary btn-sm view-btn-black"><a href="{{URL::to($user['profile']['proof_of_main_contact'])}}" target="_blank" style="color: white"> View</a></button>

                                        </div>
                                    </div>
                                </div>
                                @if($user['application_status']!="IN_REVIEW" || $user['profile']['main_account_status']==3)

                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Action</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                       <a href="{{route('vender.profile.step',6)}}" style=" background-color: black !important;
                                       border-color: black !important;" class="btn btn-primary"> Edit</a>
                                    </div>
                                </div>
                                @endif

                            </div>
                        </div>
                    </div>

                    <a id="headingCollapse14" class="card-header info mt-2" @if ($user['profile']['is_subscription']===1) style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" @else style="border: 2px solid red;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" @endif data-toggle="collapse" href="#collapsubs" aria-expanded="false" aria-controls="collapsubs">
                        <div class="card-title lead collapsed">Subscription</div>
                    </a>
                    <div id="collapsubs" role="tabpanel" aria-labelledby="headingCollapsubs"  @if ($user['profile']['is_subscription']===1) style="border-color:  black;" @else style="border-color:  red;"  @endif class="collapse accordin_style" aria-expanded="false" >
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Product Name</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['product_name']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Package Name</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['package']['name']??'N/A'}}
                                    </div>
                                </div>

                                @if($user['application_status']!="IN_REVIEW" || $user['profile']['subscription_status']==3)

                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Action</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                       <a href="{{route('vender.profile.step',7)}}" style=" background-color: black !important;
                                       border-color: black !important;" class="btn btn-primary"> Edit</a>
                                    </div>
                                </div>
                                @endif

                            </div>
                        </div>
                    </div>
                    <a id="headingCollapse14" class="card-header info mt-2" @if ($user['profile']['is_bank']===1) style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" @else style="border: 2px solid red;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" @endif data-toggle="collapse" href="#collapmain_bank" aria-expanded="false" aria-controls="collapmain_bank">
                        <div class="card-title lead collapsed">Bank Info</div>
                    </a>
                    <div id="collapmain_bank" role="tabpanel" aria-labelledby="headingCollapmain_bank"  @if ($user['profile']['is_bank']===1) style="border-color:  black;" @else style="border-color:  red;"  @endif class="collapse accordin_style" aria-expanded="false" >
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Account_name</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['account_name']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Sort code</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['sort_code']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Account number</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['account_number']}}
                                    </div>
                                </div>
                                <hr>


                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Bank proof</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        <div class="form-group" style="width: 100%">
                                            <p style="width: 30%;
                                            float: left;">{{$user['profile']['bank_proof_name']}}</p>
                                            <button class="btn btn-primary btn-sm view-btn-black"><a href="{{URL::to($user['profile']['bank_proof'])}}" target="_blank" style="color: white"> View</a></button>

                                        </div>
                                    </div>
                                </div>
                                @if($user['application_status']!="IN_REVIEW" || $user['profile']['bank_status']==3)

                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Action</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                       <a href="{{route('vender.profile.step',9)}}" style=" background-color: black !important;
                                       border-color: black !important;" class="btn btn-primary"> Edit</a>
                                    </div>
                                </div>
                                @endif

                            </div>
                        </div>
                    </div>
                    <a id="headingCollapse14" class="card-header info mt-2" @if ($user['profile']['is_terms']===1) style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" @else style="border: 2px solid red;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" @endif data-toggle="collapse" href="#term" aria-expanded="false" aria-controls="term">
                        <div class="card-title lead collapsed">Terms and conditions</div>
                    </a>
                    <div id="term" role="tabpanel" aria-labelledby="headingterm"  @if ($user['profile']['is_term']===1) style="border-color:  black;" @else style="border-color:  red;"  @endif class="collapse accordin_style" aria-expanded="false" >
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Term Approved</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        YES
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>

</div>
@endsection
@section('js')

<script>
    $(document).ready(function() {
    var contentHeight = $('#contens').height();
    $('#contens').height(contentHeight+50);
});
</script>
@endsection

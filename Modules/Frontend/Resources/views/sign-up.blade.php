 @extends('frontend::layout.app')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<link href="{{ URL::to('front/assets/vendors/nice-select/css/nice-select.css') }}"
    rel="stylesheet">
<link href="{{ URL::to('front/assets/vendors/elagent-icon/style.css') }}"
    rel="stylesheet">
<link href="{{ URL::to('front/assets/css/style.css') }}" rel="stylesheet">
<link href="{{ URL::to('front/assets/css/responsive.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



<style>
    .formify_signup_fullwidth_two .formify_right_fullwidth {
        width: 100%;
    }

    .formify_signup_fullwidth_two .form_tab_two .formify_box {
        max-width: 100%;
    margin-top: 0;
    padding: 0px;
    margin-bottom: 0;
    width: 100%;
    }
    @media (min-width: 768px)
{.frm-vh-md-100 {
    height: 100%;
}}
    @media (max-width: 1440px)
{

    .select2-container--default .select2-results>.select2-results__options {
    max-height: 200px;
    overflow-y: auto;
    width: 548px!important;
}
}
    @media (max-width: 1024px)
{

    .select2-container--default .select2-results>.select2-results__options {
    max-height: 200px;
    overflow-y: auto;
    width: 394px!important;
}
}
    @media (max-width: 768px)
{

    .select2-container--default .select2-results>.select2-results__options {
    max-height: 200px;
    overflow-y: auto;
    width: 312px!important;
}
}
    @media (max-width: 480px)
    {
        .formify_signup_fullwidth_two .form_tab_two .formify_box {
                max-width: 100%;
                margin-top: 0;
                padding: 0px;
                margin-bottom: 0;
                width: 100%;
            }
            .signup_form {

                width: 100%!important;
            }
            .form_inline{
                width: 100%!important;
            }
    }
.formify_signup_fullwidth_two .form_tab_two .formify_box .signup_form .form-group .form-control {
    height: 45px;
    line-height: 45px;
    background: white;
    border-color: black;
    font-size: 15px;
    border-radius: 10px;
    padding-left: 15px;
}
.select2-container{
    width: 77%!important;
}
.select2-container .select2-selection--multiple {

    height: 45px;

}
.select2-container--default .select2-selection--multiple .select2-selection__rendered {

    line-height: 30px;

}
.select2-container--default .select2-selection--multiple .select2-selection__arrow {

    top: 10px;

}
.select2-container--default .select2-selection--multiple {
    background-color: #fff;
    border: 2px solid black;
    border-radius: 10px;
}
.select2-container--default.select2-container--focus .select2-selection--multiple{

    height: auto;
}

</style>

<style>
    .formify_signup_fullwidth_two .form_tab_two .formify_box .signup_form .form-group {
    margin-top: 10px;
}
.select2-container--default .select2-search--inline .select2-search__field{
    width: 100%;
    padding-left: 10px;
    padding-top: 8px;
    z-index: 50;
    height: 30px;
}
.select2-default {
  color: #a4b2c7 !important;
}
.select2-container--default .select2-selection--multiple {
    background-color: #fff;
    border: 2px solid black;
    border-radius: 10px;
    height: auto;
}
.formify_signup_fullwidth_two .form_tab_two .formify_box .signup_form .form-group .form-control {

    border: 2px solid;
}
.select2-container--default.select2-container--focus .select2-selection--multiple {
    border: 2px solid black;
    outline: 0;
}
.formify_signup_fullwidth_two .form_tab_two .formify_box .signup_form .form-group .form-control {
    border: 2px solid;
    width: 58%;
}
.select2-container--default .select2-selection--multiple {
    background-color: #fff;
    border: 2px solid black;
    border-radius: 10px;
    height: auto;
    width: 74%;
}
@media only screen and (min-width: 700px) and (max-width: 770px)  {

    #hover_div{
        margin-left: 349px!important;
    }
    .select2-container--default .select2-selection--multiple {
    background-color: #fff;
    border: 2px solid black;
    border-radius: 10px;
    height: auto;
    width: 80%;
}
.formify_signup_fullwidth_two .form_tab_two .formify_box .signup_form .form-group .form-control {
    border: 2px solid;
    width: 62%;
}
#address_operate_div{
    width: 50%!important;
}
.name_with{
    width: 21%!important;
}
#phone_code{
    width: 10%!important;
}
#phone_number{
    width: 83%!important;
}

}
@media only screen and (min-width: 400px) and (max-width: 430px)  {

    #hover_div{
        margin-left: 104px !important;
    z-index: 10000000000;
    background: white;
    margin-top: -33px !important;
    width: 68% !important;
    }
    .select2-container--default .select2-selection--multiple {
    background-color: #fff;
    border: 2px solid black;
    border-radius: 10px;
    height: auto;
    width: 100%!important;
}
    .select2-container {
        width: 80% !important;
    }
.select2-container--default .select2-results>.select2-results__options {
    max-height: 200px;
    overflow-y: auto;
    width: 295px !important;
}
.formify_signup_fullwidth_two .form_tab_two .formify_box .signup_form .form-group .form-control {
    border: 2px solid;
    width: 80%!important;
}
#address_operate_div{
    width: 60%!important;
}
#phone_code{
    width: 16%!important;
}
#phone_number{
    width: 79%!important;
}
#submit_btn{
    float: none!important;
}
.red_btn{
    width: 46%;
    padding: 11px 29px!important;
}
.next_tab{
    width: 100%!important;




}
#next_btn{
    text-align: end!important;
    float: right!important;
}
.formify_right_fullwidth  {
    margin-top: 2px!important;
}

.formify_body {
    height: auto!important;
}
}
@media only screen  and (min-width: 320px) and (max-width: 380px)  {

    #hover_div{
        margin-left: 79px !important;
    z-index: 10000000000;
    background: white;
    margin-top: -29px !important;
    width: 68% !important;
    }
    .select2-container--default .select2-selection--multiple {
    background-color: #fff;
    border: 2px solid black;
    border-radius: 10px;
    height: auto;
    width: 100%;
}
.formify_signup_fullwidth_two .form_tab_two .formify_box .signup_form .form-group .form-control {
    border: 2px solid;
    width: 100%;
}
.select2-container {
        width: 100% !important;
    }
    .select2-container--default .select2-results>.select2-results__options {
    max-height: 200px;
    overflow-y: auto;
    width: 312px !important;
}
#address_operate_div{
    width: 60%!important;
}
#phone_code{
    width: 18%!important;
}
#phone_number{
    width: 80%!important;
}
#submit_btn{
    float: none!important;
}
.red_btn{
    width: 46%;
    padding: 11px 27px!important;
}
.next_tab{
    width: 100%!important;

}
#next_btn{
    text-align: end!important;
    float: right!important;
}

.formify_right_fullwidth  {
    margin-top: 2px!important;
}

.formify_body {
    height: auto!important;
}

}
@media only screen  and (min-width: 100px) and (max-width: 320px)  {

#hover_div{
    margin-left: 79px !important;
z-index: 10000000000;
background: white;
margin-top: -29px !important;
width: 68% !important;
}
.select2-container--default .select2-selection--multiple {
background-color: #fff;
border: 2px solid black;
border-radius: 10px;
height: auto;
width: 100%;
}
.formify_signup_fullwidth_two .form_tab_two .formify_box .signup_form .form-group .form-control {
border: 2px solid;
width: 100%;
}
.select2-container {
    width: 100% !important;
}
.select2-container--default .select2-results>.select2-results__options {
max-height: 200px;
overflow-y: auto;
width: 260px !important;
}
#address_operate_div{
width: 60%!important;
}
#phone_code{
width: 18%!important;
}
#phone_number{
width: 80%!important;
}
#submit_btn{
float: none!important;
}
.red_btn{
width: 46%;
padding: 11px 27px!important;
}
.next_tab{
width: 100%!important;

}
#next_btn{
text-align: end!important;
float: right!important;
}

.formify_right_fullwidth  {
margin-top: 2px!important;
}

.formify_body {
height: auto!important;
}

}
.select2-container--open .select2-dropdown--above {
    border-bottom: none;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    width: auto!important;
}
.select2-container--open .select2-dropdown--below {
    border-top: none;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    width: auto !important;
}
.select2-container--default .select2-results>.select2-results__options {
    max-height: 200px;
    overflow-y: auto;
    width: 548px;
}
</style>


@endsection
@section('content')
<form method="POST" action="{{ route('website.subscription.checkout.submit') }}"
    enctype="multipart/form-data">
    @csrf
    <div class="body_wrapper frm-vh-md-100 mt-5 mb-5">
        <div class="formify_body formify_signup_fullwidth formify_signup_fullwidth_two d-flex">




            <div class="container formify_right_fullwidth  align-items-center justify-content-center " style="margin-top: 100px">
                <div class="form_tab_two row">
                    <div class="col-md-2"></div>
                    <div class="col-md-9">
                        <div class="formify_box">
                            <h4 class="form_title" id="index_focus" tabindex='1' style="font-size: 25px;">Register your interest to join the LinkMoto platform as a business
                            </span></h4>
                            <h5 class="form_title " id="busniess_title" style="font-size: 21px;" style="font-size: 17px">Tell us about your business</span></h5>
                            <div action="#" class="signup_form row" >
                             <div id="step_one">
                                <div class="form-group col-md-12">
                                    <label class="input_title" for="inputName">Business Name or Trading Name <span style="color: red;padding-right: 3px">*</span> <span data-toggle='tooltip' title=''>(?)</span> </label>
                                    <input type="text" class="form-control" onkeyup="lookup(this);" name="trading_name" id="trading_name" placeholder=" " required>
                                    <p class="text-danger trading_name" style="padding-left: 10px;display: none">This field is required !</p>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="input_title" for="inputName">Which services do you provide? <span style="color: red;padding-right: 3px">*</span><span data-toggle='tooltip' title=''>(?)</span> </label>
                                    <select class="js-example-basic-single" multiple="multiple" placeholder="Slect Your Services" onkeyup="lookup(this);" id="service_id" name="service_id[]">
                                        {{-- <option value="" disabled>Slect Your Services</option> --}}
                                        @foreach ($types as $service)
                                        <option value="{{$service['id']}}">{{$service['name']}}</option>
                                        @endforeach

                                      </select>
                                    <p class="text-danger service_id" style="padding-left: 10px;display: none">This field is required !</p>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="input_title" for="inputName">How do you provide and offer your services to your customers? <span style="color: red;padding-right: 3px">*</span><a  id="output" style="cursor: pointer" onclick="showHideDiv('hover_operate')"><span >(?)</span></a></label>
                                   <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" checked name="operation_type"
                                            id="inlineRadio1" value="On-site">
                                        <label class="form-check-label" for="inlineRadio1">On-site</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="operation_type"
                                            id="inlineRadio2" value="Mobile">
                                        <label class="form-check-label" for="inlineRadio2">Mobile</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="operation_type"
                                            id="inlineRadio3" value="Both">
                                        <label class="form-check-label" for="inlineRadio3">Both</label>
                                    </div>
                                   </div>


                                </div>
                                <div id="hover_operate" style="display: none">
                                   <div id="hover_div" style="position: absolute;
                                   border: 2px solid black;
                                   margin-left: 448px;
                                   padding: 7px;
                                   border-radius: 7px;
                                   margin-top: -18px;width: 33%;background: white;
    z-index: 10000000;">
                                    <h5>How do you provide your services (?):</h5>
                                    <p>If you trade from a site, i.e. from your
                                        garage workshop, shop, etc then select
                                        ‘On-site’</p>
                                    <p>If you do not operate from a premises,
                                            i.e. you are a mobile mechanic, etc
                                            then select ‘Mobile’.</p>
                                    <p>If you provide services via both
                                        options, then select ‘Both’</p>
                                   </div>
                                </div>
                                <div id="address_operate" style="display: none;position: relative;z-index: 1000000;">
                                    <div id="address_operate_div" style="margin-top: 31px; border: 2px solid black; padding: 4px; background: white; width: 32%; border-radius: 7px; margin-left: 71px; position: absolute;">
                                      <h5>Address (?):</h5>
                                      <p>This is the address the LinkMoto team
                                          will use for correspondence to this
                                          account.</p>
                                     </div>
                                  </div>
                                <div class="form-group col-md-12">
                                    <label class="input_title" for="inputName">Address <span style="color: red;padding-right: 3px">*</span><a  style="cursor: pointer" onclick="showHideDiv('address_operate')"><span >(?)</span></a></label>
                                    <input type="text" class="form-control" name="address_line_1" onkeyup="lookup(this);" id="address_line_1" placeholder="Address Line one *" required>
                                    <p class="text-danger address" style="padding-left: 10px;display: none">This field is required </p>
                                    <input type="text" class="form-control" name="address_line_2"  id="address_line_2" style="margin-top: 10px " placeholder="Address Line two " required>
                                    <input type="text" class="form-control" name="address_line_3" id="address_line_3" style="margin-top: 10px " placeholder="Address Line three" >
                                    <input type="text" class="form-control" name="address_line_4" id="address_line_4" style="margin-top: 10px " placeholder="Address Line four" >
                                    <input type="text" class="form-control" name="city" onkeyup="lookup(this);" id="city" style="margin-top: 10px " placeholder="City / Town *" required>
                                    <p class="text-danger city" style="padding-left: 10px;display: none">This field is required </p>
                                    <input type="text" class="form-control" name="postcode" onkeyup="lookup(this);" id="postcode" style="margin-top: 10px " placeholder="Postcode *" required>
                                    <p class="text-danger postcode" style="padding-left: 10px;display: none">This field is required </p>

                                </div>

                                <div class="form-group col-md-12">
                                    <label class="input_title" for="inputName">Please select the appropriate organisation status for your business *<span data-toggle='tooltip' title='' >(?)</span></label>
                                   <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" checked name="organization_status"
                                            id="organization_status1" value="Limited Company">
                                        <label class="form-check-label" for="organization_status1">Limited Company</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="organization_status"
                                            id="organization_status2" value="Sole Trader / Self Employed">
                                        <label class="form-check-label" for="organization_status2">Sole Trader / Self Employed
                                        </label>
                                    </div>

                                   </div>

                                </div>

                                <div class="form-group col-md-12">
                                    <label class="input_title" for="inputName">Are you UK VAT registered? <span style="color: red;padding-right: 3px">*</span><span data-toggle='tooltip' title='' >(?)</span></label>
                                   <div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="vat_register"
                                            id="vat_register1" value="YES">
                                        <label class="form-check-label" for="vat_register1">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" checked name="vat_register"
                                            id="vat_register2" value="NO">
                                        <label class="form-check-label" for="vat_register2">No
                                        </label>
                                    </div>

                                   </div>

                                </div>
                             </div>
                                <div id="step_two"  style="display: none">
                                    <h5 class="form_title" style="font-size: 17px;margin-top: 10px">Register your interest to join the LinkMoto platform as a business

                                    </span></h5>
                                    <p>Please provide the name and details of the main contact that LinkMoto should use for this account. This
                                        will also be the person who will receive the username and password to enable them to access LinkMoto
                                        and set up other users of LinkMoto.
                                    </p>

                                    <div class="form-group col-md-12">
                                        <div class="form-check form-check-inline form_inline name_with" style="    padding-left: 0;margin-right: 0;width: 19%;">
                                            <label class="input_title" for="inputName">First Name <span style="color: red;padding-right: 3px">*</span></label>
                                            <input type="text" class="form-control" style="width: 100%" name="name"  onkeyup="lookup(this);" id="first_name"  >
                                        </div>

                                        <div class="form-check form-check-inline form_inline" style="padding-left: 0;margin-right: 0;width: 19%;
                                        ">
                                            <label class="input_title" for="inputName name_with">Middle Name </label>
                                            <input type="text" class="form-control" style="width: 100%" name="middle_name"   id="middle_name" >

                                          </div>
                                        <div class="form-check form-check-inline form_inline name_with" style="    padding-left: 0;margin-right: 0;width: 19%;
                                        ">
                                            <label class="input_title" for="inputName">Last Name<span style="color: red;padding-right: 3px">*</span> </label>
                                            <input type="text" class="form-control" style="width: 100%" name="last_name"  onkeyup="lookup(this);" id="last_name"  >
                                        </div>
                                        <p class="text-danger name" style="padding-left: 10px;display: none">This field is Required !</p>

                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="input_title" for="inputName">Email<span style="color: red;padding-right: 3px">*</span></label>
                                        <input type="text" class="form-control" name="email"  onkeyup="lookup(this);" id="email" >
                                        <p class="text-danger email" style="padding-left: 10px;display: none">This field is required !</p>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="input_title" for="inputName">Mobile <span style="color: red;padding-right: 3px">*</span> </label>
                                        <div>
                                            <div class="form-check form-check-inline " id="phone_code" style="padding-left: 0;width: 8%;margin-right: 0;">
                                                <input type="text" class="form-control" disabled  value="+44" style="width: 100%" required>
                                              </div>
                                            <div class="form-check form-check-inline" id="phone_number" style="padding-left: 0;width: 85%;margin-right: 0">
                                                <input type="text" class="form-control"  onkeyup="lookup(this);" name="phone_no" id="phone_no" >
                                            </div>
                                            <p class="text-danger phone_no" style="padding-left: 10px;display: none">This field is required !</p>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="input_title" for="inputName">Position or job title in relation to this business <span style="color: red;padding-right: 3px">*</span>
                                        </label>
                                        <input type="text" class="form-control" onkeyup="lookup(this);" name="job_title" id="job_title" required>
                                        <p class="text-danger job_title" style="padding-left: 10px;display: none">This field is required !</p>
                                    </div>
                                </div>

                            </div>
                            <div class="next_button text-right " id="next_btn" style="text-align: center">
                                <button type="button" style="background: black" onclick="NextPage()" class="btn thm_btn red_btn next_tab">Next
                                    <i class="arrow_right"></i></button>
                            </div>
                            <div class="next_button text-right" id="submit_btn" style="text-align: center;display: none">
                                <button type="button" onclick="PrePage()" style="background: black" class="btn thm_btn red_btn ">Back
                                    <i class="arrow_left"></i></button>
                                <button type="button" onClick='submitDetailsForm()' style="background: black" class="btn thm_btn red_btn ">Submit
                                    <i class="arrow_right"></i></button>
                            </div>
                        </div>

                    </div>






                </div>
            </div>

        </div>
    </div>
</form>

@endsection

@section('js')


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{ URL::to('front/assets/vendors/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ URL::to('front/assets/vendors/bootstrap/js/bootstrap.min.js') }}">
</script>
<script
    src="{{ URL::to('front/assets/vendors/nice-select/js/jquery.nice-select.min.js') }}">
</script>
<script
    src="{{ URL::to('modules/admin/app-assets/vendors/js/forms/extended/inputmask/jquery.inputmask.bundle.min.js') }}">
</script>
<script
    src="{{ URL::to('modules/admin/app-assets/js/scripts/forms/extended/form-inputmask.js') }}">
</script>
<script data-main="dist/js/"
    src="{{ URL::to('front/assets/js/bootstrap-multiselect.min.js') }}"></script>

<script>




async function  submitDetailsForm() {
    let check=setTwoValidate();

    if(check===true){


        let record = {

                email: $('#email').val(),
                _token: $('meta[name="csrf-token"]').attr('content')
            }

            const result = await $.ajax({
                type: 'POST',
                url: '{{ route('website.vender.validate') }}',
                data: record,
            });

            if(result==1){

                $("form").submit();
            }else{

                $(`.email`).show();
                $(`.email`).text('The email has already been taken');
            }

    }
    }

</script>
<script src="{{ URL::to('front/assets/js/main.js') }}"></script>




<script>
    function NextPage(){


      let check=setOneValidate();

      if(check===true){
        $('#next_btn').hide();
        $('#step_one').hide();
        $('#busniess_title').hide();

        $('#step_two').toggle();
        $('#index_focus').focus();
        // $('#step_two').toggle();
        $('#submit_btn').show();
      }






    }
    function PrePage(){


      let check=setOneValidate();

    //   if(check===true){
        $('#next_btn').show();
        $('#step_one').show();
        $('#busniess_title').show();

        $('#step_two').hide();
        $('#index_focus').focus();
        // $('#step_two').toggle();
        $('#submit_btn').hide();
    //   }






    }

    function setOneValidate(){

        let trading_name = $('#trading_name').val();
        let service_id = $('#service_id').val();
        let address_line_1 = $('#address_line_1').val();

        let city = $('#city').val();
        let postcode = $('#postcode').val();
        let status=false;




        if(trading_name===""){
            $('.trading_name').show();
            $('#trading_name').css("border","2px solid red");
            status=false;

        }else{
            $('.trading_name').hide();
            $('#trading_name').css("border","2px solid black");
            status=true;


        }
        if(address_line_1===""){
            $('.address').show();
            $('#address_line_1').css("border","2px solid red");
            status=false;


        }else{
            $('.address').hide();
            $('#address_line_1').css("border","2px solid black");
            status=true;


        }

        if(city===""){
            $('.city').show();
            $('#city').css("border","2px solid red");
            status=false;

        }else{
            $('.city').hide();
            $('#city').css("border","2px solid black");
            status=true;


        }
        if(postcode===""){
            $('.postcode').show();
            $('#postcode').css("border","2px solid red");
            status=false;

        }else{
            $('.postcode').hide();
            $('#postcode').css("border","2px solid black");
            status=true;

        }
        if(service_id.length===0){
            $('.service_id').show();
            $('.select2-selection--multiple').css("border","2px solid red");
            status=false;

        }else{
            $('.service_id').hide();
            $('.select2-selection--multiple').css("border","2px solid black");
            status=true;


        }



        if(trading_name===""){
          return false;

        }
        if(address_line_1===""){
            return false;


        }

        if(city===""){
            return false;

        }
        if(postcode===""){
            return false;

        }
        if(service_id.length===0){
            return false;

        }


        return status;
    }
    function setTwoValidate(){

        let first_name = $('#first_name').val();
        let job_title = $('#job_title').val();
        let service_id = $('#service_id').val();
        let last_name = $('#last_name').val();
        let middle_name = $('#middle_name').val();
        let email = $('#email').val();
        let phone_no = $('#phone_no').val();
        let status=false;




        if(first_name===""){
            $('.name').show();
            $('#first_name').css("border","2px solid red");
            status=false;

        }else{
            $('.first_name').hide();
            $('#first_name').css("border","2px solid black");
            status=true;


        }
        if(phone_no===""){
            $('.phone_no').show();
            $('#phone_no').css("border","2px solid red");
            status=false;

        }else{
            $('.phone_no').hide();
            $('#phone_no').css("border","2px solid black");
            status=true;


        }
        if(email===""){
            $('.email').show();
            $('#email').css("border","2px solid red");
            status=false;

        }else{
            $('.email').hide();
            $('#email').css("border","2px solid black");
            status=true;


        }
        if(job_title===""){
            $('.job_title').show();
            $('#job_title').css("border","2px solid red");
            status=false;

        }else{
            $('.job_title').hide();
            $('#job_title').css("border","2px solid black");
            status=true;


        }
        if(last_name===""){
            $('.name').show();
            $('#last_name').css("border","2px solid red");
            status=false;


        }else{
            $('.name').hide();
            $('#last_name').css("border","2px solid black");
            status=true;


        }
        // if(middle_name===""){
        //     $('.name').show();
        //     $('#middle_name').css("border","2px solid red");
        //     status=false;

        // }else{
        //     $('.middle_name').hide();
        //     $('#middle_name').css("border","2px solid black");
        //     status=true;


        // }
        if(first_name===""){



            return false;

        }
        if(last_name===""){



            return false;

        }
        if(email===""){



            return false;

        }

        if(phone_no===""){


            return false;

        }
        if(job_title===""){

            return false;

        }



        return status;
    }
</script>


<script>

  async  function lookup(arg){
    var id = arg.getAttribute('id');
    var value = arg.value;

 let trading_name = $(`#${id}`).val();
    if(trading_name===""){

        $(`#${id}`).css("border","2px solid red");
        status=false;

        }
    else{

        if(id==="email"){
            if(isEmail(value)){
                $(`#${id}`).css("border","2px solid black");
                $(`.${id}`).hide();

            }else{
                $(`.${id}`).show();
                $(`.${id}`).text('Email Not Valid');
            }

        }else{
            $(`#${id}`).css("border","2px solid black");
        $(`.${id}`).hide();
        status=true;

        if (id.indexOf("address") >= 0){
            let address_line_1 = $('#address_line_1').val();
            let address_line_2 = $('#address_line_2').val();
            let city = $('#city').val();
            let postcode = $('#postcode').val();
            if(address_line_1!=="" &&  city!=="" && postcode!==""){
            $(`.address`).hide();
            }
        }
        if (id.indexOf("city") >= 0){
           let address_line_1 = $('#address_line_1').val();
            let address_line_2 = $('#address_line_2').val();
            let city = $('#city').val();
            let postcode = $('#postcode').val();
            if(address_line_1!=="" &&  city!=="" && postcode!==""){
            $(`.address`).hide();
            }
        }
        if (id.indexOf("postcode") >= 0){
           let address_line_1 = $('#address_line_1').val();
            let address_line_2 = $('#address_line_2').val();
            let city = $('#city').val();
            let postcode = $('#postcode').val();
            if(address_line_1!=="" &&  city!=="" && postcode!==""){
            $(`.address`).hide();
            }
        }
        if (id.indexOf("name") >= 0){
            let first_name = $('#first_name').val();
            let last_name = $('#last_name').val();
            let middle_name = $('#middle_name').val();

            if(first_name!=="" && last_name!=="" ){
            $(`.name`).hide();
            }
        }
        if (id.indexOf("city") >= 0){
            let first_name = $('#first_name').val();
            let last_name = $('#last_name').val();
            let middle_name = $('#middle_name').val();

            if(first_name!=="" && last_name!==""){
            $(`.name`).hide();
            }
        }
        if (id.indexOf("postcode") >= 0){
            let first_name = $('#first_name').val();
            let last_name = $('#last_name').val();
            let middle_name = $('#middle_name').val();

            if(first_name!=="" && last_name!=="" ){
            $(`.name`).hide();
            }
        }
     }





    }
}

$("#service_id").change(function(){
        var service_id = $('#service_id').val();

        console.log(service_id.length)

       if(service_id.length===0){
        $(`.select2-selection--multiple`).css("border","2px solid red");
       }else{

        $(`.select2-selection--multiple`).css("border","2px solid black");
        $(`.service_id`).hide();
       }


    });

</script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}
</script>

<script>

let is_show=false;
    function showHideDiv(id){


        $(`#${id}`).toggle();




    }
</script>

<script>
    $(document).mouseup(function(e)
{
    var container = $("YOUR CONTAINER SELECTOR");

// if the target of the click isn't the container nor a descendant of the container
if (!container.is(e.target) && container.has(e.target).length === 0)
{
   $('#hover_operate').hide();
   $('#address_operate').hide();
}
});

$("body").click(function(e) {
    // $('#hover_a').hide();
  }
);
</script>

<script>
    let output = document.getElementById('output');
      $('body').click((event) => {
         if (event.target.id == "output"){
            alert(1);
         }

      });
</script>

@endsection



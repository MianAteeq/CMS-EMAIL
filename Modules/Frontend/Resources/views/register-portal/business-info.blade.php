@extends('frontend::new-layouts.master')

@section('css')

<style>
    hr {
    margin-top: 0rem;
    margin-bottom: 0rem;
    border: 0;
    border-top: 2px solid rgba(0, 0, 0, 0.1);
}
</style>

@endsection

@section('content')

<div class="content-body">
    <div class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12">
            <h3 class="h3">Business registration application</h3>
        </div>

    </div>

    <div class="row" style="margin-top: 10px;">
        <div class="col-md-4">

            <div style="border-radius: 7px;border: 2px solid black;">
                <h4 class="h3" style="padding: 10px;font-weight: 600;
                font-size: 17px; "> <img src="/home.png" style="width: 22px;margin-top: -5px;"> Your business information
                </h4>

                    <div class="footers">
                        <h4 style="padding-left: 13px;
                        color: black;
                        font-weight: 600;">Help information: </h4>
                        <div id="accordionWrap1" role="tablist" aria-multiselectable="true">
                        <div class="card accordion collapse-icon accordion-icon-rotate" style="box-shadow: none;margin-right: 10px;margin-left: 10px;">
                            <a id="business_setup" class="card-header info collapsed" data-toggle="collapse" href="#collapsebusiness" aria-expanded="false" aria-controls="collapsebusiness">
                                <div class="card-title lead">Business setup (?)</div>
                            </a>
                            <div id="collapsebusiness" data-parent="#accordionWrap1" role="tabpanel" aria-labelledby="business_setup" class="collapse" style="">
                                <div class="card-content">
                                    <div class="card-body">
                                       No Information
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <a id="ac_company_name" class="card-header info collapsed" data-toggle="collapse" href="#collapsec_name" aria-expanded="false" aria-controls="collapsec_name">
                                <div class="card-title lead">Registered company name (?)</div>
                            </a>
                            <div id="collapsec_name" data-parent="#accordionWrap1" role="tabpanel" aria-labelledby="ac_company_name" class="collapse" style="">
                                <div class="card-content">
                                    <div class="card-body">
                                       No Information
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <a id="company_number" class="card-header info collapsed" data-toggle="collapse" href="#collapsec_c_number" aria-expanded="false" aria-controls="collapsec_c_number">
                                <div class="card-title lead">Registered company number (?)</div>
                            </a>
                            <div id="collapsec_c_number" data-parent="#accordionWrap1" role="tabpanel" aria-labelledby="company_number" class="collapse" style="">
                                <div class="card-content">
                                    <div class="card-body">
                                       No Information
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <a id="company_address" class="card-header info collapsed" data-toggle="collapse" href="#collapsec_c_address" aria-expanded="false" aria-controls="collapsec_c_address">
                                <div class="card-title lead">Registered company address (?)</div>
                            </a>
                            <div id="collapsec_c_address" data-parent="#accordionWrap1" role="tabpanel" aria-labelledby="company_address" class="collapse" style="">
                                <div class="card-content">
                                    <div class="card-body">
                                       No Information
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <a id="company_proof" class="card-header info collapsed" data-toggle="collapse" href="#collapsec_c_proof" aria-expanded="false" aria-controls="collapsec_c_proof">
                                <div class="card-title lead" style="width: 61%;">Proof of Sole Trader / Self Employed status (?)</div>
                            </a>
                            <div id="collapsec_c_proof" data-parent="#accordionWrap1" role="tabpanel" aria-labelledby="company_proof" class="collapse" style="">
                                <div class="card-content">
                                    <div class="card-body">
                                        <h6 class="h3" style="font-size: 14px;font-weight: bold;">Acceptable proof (any 1 of the
                                            following):</h6>

                                        <ul>
                                            <li>Letter from Solicitor confirming
                                                Sole Trader / Self Employed
                                                status</li>
                                            <li>
                                                Letter from Accountant
                                                confirming Sole Trader / Self
                                                Employed status
                                            </li>
                                            <li>
                                                Most recent submitted accounts
                                            </li>
                                            <li>
                                                UTR confirmation letter from HMRC

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    </div>






            </div>



                {{-- <div  class="cname_info"
                    @if($user['profile']['organization_status']=="Limited Company" ) style="display: none;padding: 30px" @endif>
                    <h6 class="h3" style="font-size: 14px;font-weight: bold;">Proof of Sole Trader / Self Employed
                        status</h6>
                    <p>Acceptable documents:</p>
                    <ul>
                        <li>Letter from Solicitor confirming
                            Sole Trader / Self Employed
                            status</li>
                        <li>
                            Letter from Accountant
                            confirming Sole Trader / Self
                            Employed status
                        </li>
                        <li>
                            Most recent submitted accounts
                        </li>
                    </ul>

                </div> --}}


        </div>

        <div class="col-md-8"  id="contens" style="border: 2px solid black;border-radius: 8px;padding: inherit">
            <form action="{{ route('vender.profile.business.info') }}" method="POST"
                enctype="multipart/form-data"  >
                @csrf
                <input type="hidden" id="is_save_later" name="is_save_later" value="0">
                <div class="link-body" style="padding: 10px">
                    <div class="form-group row">
                        <label class="col-md-4 label-control">Business setup <span style="color: red">*</span> <a style="color: black" href="#collapsebusiness" data-toggle="collapse" aria-expanded="false" aria-controls="collapsebusiness">(?)</a></label>
                        <div class="col-md-8 mx-auto">
                            <div class="input-group">
                                <div class="d-inline-block custom-control custom-radio mr-1">
                                    <input type="radio" name="organization_status" class="custom-control-input"
                                        @if($user['profile']['organization_status']=="Limited Company" ) checked @endif
                                        value="Limited Company" id="Limited Company">
                                    <label class="custom-control-label" for="Limited Company">Limited Company</label>
                                </div>
                                <div class="d-inline-block custom-control custom-radio">
                                    <input type="radio" name="organization_status" class="custom-control-input"
                                        @if($user['profile']['organization_status']=="Sole Trader / Self Employed" )
                                        checked @endif value="Sole Trader / Self Employed"
                                        id="Sole Trader / Self Employed">
                                    <label class="custom-control-label" for="Sole Trader / Self Employed">Sole Trader /
                                        Self Employed</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="eventRegInput5">Registered <span class="cname"
                                @if($user['profile']['organization_status']!="Limited Company" ) style="display: none"
                                @endif>company</span> name <span style="color: red">*</span> <a style="color: black" href="#collapsec_name" data-toggle="collapse" aria-expanded="false" aria-controls="collapsec_name">(?)</a></label>
                        <div class="col-md-8 mx-auto">
                            <input type="tel" id="company_name" value="{{$user['profile']['company_name']}}" class="form-control" onkeyup="lookup(this);" name="company_name" required
                                placeholder=" ">
                                <p class="text-danger company_name" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="eventRegInput5">Registered <span class="cname"
                                @if($user['profile']['organization_status']!="Limited Company" ) style="display: none"
                                @endif>company</span> number <span style="color: red">*</span> <a style="color: black" href="#collapsec_c_number" data-toggle="collapse" aria-expanded="false" aria-controls="company_number">(?)</a></label>
                        <div class="col-md-8 mx-auto">
                            <input type="text" id="registration_no" class="form-control" value="{{$user['profile']['registration_no']}}" onkeyup="lookup(this);" name="registration_no" required
                                placeholder=" ">
                                <p class="text-danger registration_no" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="eventRegInput5">Registered <span class="cname"
                                @if($user['profile']['organization_status']!="Limited Company" ) style="display: none"
                                @endif>company</span> address <span style="color: red">*</span> <a style="color: black" href="#collapsec_c_address" data-toggle="collapse" aria-expanded="false" aria-controls="collapsec_c_address">(?)</a></label>
                        <div class="col-md-8 mx-auto">
                            <input type="tel" id="address_line_1" onkeyup="lookup(this);" class="form-control"  name="address_line_1" required
                                value="{{ $user['profile']['address_line_1'] }}"
                                placeholder="Address line one *">
                            <input type="tel" id="address_line_2"  class="form-control" name="address_line_2" required
                                value="{{ $user['profile']['address_line_2'] }}"
                                style="margin-top: 5px " placeholder="Address line two ">
                            <input type="tel" id="eventRegInput5" class="form-control" name="address_line_3"
                                value="{{ $user['profile']['address_line_3'] }}"
                                style="margin-top: 5px " placeholder="Address line three ">
                            <input type="tel" id="eventRegInput5" class="form-control" name="address_line_4"
                                value="{{ $user['profile']['address_line_4'] }}"
                                style="margin-top: 5px " placeholder="Address line four ">
                            <input type="tel" id="city" class="form-control" onkeyup="lookup(this);" name="city" required
                                value="{{ $user['profile']['city'] }}"
                                style="margin-top: 5px " placeholder="City / Town *">
                            <input type="tel" id="postcode" class="form-control" onkeyup="lookup(this);" name="postcode" required
                                value="{{ $user['profile']['postcode'] }}"
                                style="margin-top: 5px " placeholder="postcode *">

                                <p class="text-danger address" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">Address Field  is Required !</p>

                        </div>
                    </div>
                    <div class="form-group row" id="proof_doc"
                        @if($user['profile']['organization_status']=="Limited Company" ) style="display: none" @endif>
                        <label class="col-md-4 label-control" for="eventRegInput5">Proof of Sole Trader / Self Employed
                            status <span style="color: red">*</span> <a style="color: black" href="#collapsec_c_proof" data-toggle="collapse" aria-expanded="false" aria-controls="collapsec_c_proof">(?)</a></label>
                        <div class="col-md-8 mx-auto">
                            <div>
                                <input type="file" class="d-none" name="document_proof"
                                    accept="image/*,.doc, .docx,.pdf" id="">
                                <input type="button" id="eventRegInput5" class="form-control form-btn"
                                    value="{{$user['profile']['document_proof_name']??'Document Upload'}}" name="contact" placeholder="Document Upload ">
                                <button type="button" class="btn btn-primary btn-sm view-btn" @if($user['profile']['document_proof_name']==null) style="display: none" @endif> <a href="{{URL::to($user['profile']['document_proof'])}}"
                                        id="view_file" target="_blank" style="color: white">View</a></button>
                            </div>
                            <br>
                            <br>
                            <p class="text-danger file_proof" style="padding-left: 10px;width:100%;display: none">Proof
                                of Sole Trader / Self Employed status is Required !</p>
                        </div>
                    </div>


                </div>
                <div class="footers" id="footers" style="position: absolute">
                    @if($user['profile']['edit_step']==0)
                    <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                        onclick="submitDetailsForm()" style="float: right;">  NEXT</button>
                    <button onclick="saveforlater()" type="button" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">SAVE AND EXIT</button>
                  <a href="{{route('vender.profile.back',$user['profile']['step'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                    style="float: right;">PREVIOUS</button></a>

                    @else
                    <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                    onclick="submitDetailsForm()" style="float: right;">  UPDATE</button>

                    @endif

                </div>
            </form>

        </div>

    </div>

</div>
@endsection

@section('js')
<script>
    $(document).ready(function() {
     let value= $('input[type=radio][name=organization_status]:checked').val();
        if (value == 'Limited Company') {

            $('#proof_doc').hide();
            $('.cname').show();
            $('.cname_info').hide();

            $('#contens').height('510px');
            $('#footers').css("position","absolute");
            } else {
            $('#proof_doc').show();
            $('.cname').hide();
            $('.cname_info').show();

            $('#contens').height('580px');
            $('#footers').css("position","relative");
            }
            });
</script>
<script>
     var contentHeight = $('#contens').height();
    $('input[type=radio][name=organization_status]').change(function () {
        if (this.value == 'Limited Company') {

            $('#proof_doc').hide();
            $('.cname').show();
            $('.cname_info').hide();

             $('#contens').height('510px');
             $('#footers').css("position","absolute");
        } else {
            $('#proof_doc').show();
            $('.cname').hide();
            $('.cname_info').show();

            $('#contens').height('580px');
            $('#footers').css("position","relative");
        }
    });

</script>

<script>
    $('.form-btn').click(function () {
        $('input[type=file]').trigger('click');
    });

</script>

<script>
    $(document).ready(function () {
        $('input[type="file"]').change(function (e) {
            var fileName = e.target.files[0].name;
            $('.form-btn').val(fileName);

            $('.view-btn').show();
            $('#view_file').attr('href', URL.createObjectURL(e.target.files[0]));
            $('.file_proof').hide();
        });
    });

</script>

<script>
    function submitDetailsForm() {
        let organization_status = $('input[type=radio][name=organization_status]:checked').val();

        let status=false;
        let company_name = $('#company_name').val();
        let registration_no = $('#registration_no').val();

        let address_line_1 = $('#address_line_1').val();
        let address_line_2 = $('#address_line_2').val();
        let city = $('#city').val();
        let postcode = $('#postcode').val();

        if(company_name===""){

            $('.company_name').show();
            $('#company_name').attr('style','border:2px solid red!important');

            status=false;
             return false;

        }else{
            $('.company_name').hide();
            $('#company_name').attr('style','border:2px solid black!important');
            status=true;

        }
        if(registration_no===""){

            $('.registration_no').show();
            $('#registration_no').attr('style','border:2px solid red!important');

            status=false;
             return false;

        }else{
            $('.registration_no').hide();
            $('#registration_no').attr('style','border:2px solid black!important');
            status=true;
        }

        if(address_line_1===""){
            $('.address').show();
            $('#address_line_1').attr('style','border:2px solid red!important;margin-top: 5px ');
            status=false;
             return false;


        }else{
            // $('.address').hide();
            $('#address_line_1').attr('style','border:2px solid black!important;margin-top: 5px ');
            status=true;


        }

        // if(address_line_2===""){
        //     $('.address').show();
        //     $('#address_line_2').attr('style','border:2px solid black!important;margin-top: 5px ');
        //     status=false;
        //      return false;

        // }else{
        //     // $('.address').hide();
        //     $('#address_line_2').attr('style','border:2px solid black!important;margin-top: 5px ');
        //     status=true;


        // }
        if(city===""){
            $('.address').show();
            $('#city').attr('style','border:2px solid black!important;margin-top: 5px ');
            status=false;
             return false;

        }else{
            // $('.address').hide();
            $('#city').attr('style','border:2px solid black!important;margin-top: 5px ');
            status=true;


        }
        if(postcode===""){
            $('.address').show();
            $('#postcode').attr('style','border:2px solid black!important;margin-top: 5px ');
            status=false;
             return false;

        }else{
            // $('.address').hide();
            $('#postcode').attr('style','border:2px solid black!important;margin-top: 5px ');
            status=true;

        }
        if(postcode!=="" && city!=="" && address_line_1!=="" && address_line_2!==""){
            $('.address').hide();
        }

        if (organization_status === "Sole Trader / Self Employed") {
            let file = $('input[type=file]').val();
            if (file === "" && @json($user['profile']['document_proof'])==null) {

                $('.file_proof').show();
                status=false;
                 return false;

            }else{
                status=true;
            }
        }






        $("form").submit();




    }

</script>

<script>
      async  function lookup(arg){
    var id = arg.getAttribute('id');
    var value = arg.value;


 let trading_name = $(`#${id}`).val();
 if(id!=="address_line_2" && id!=="city" && id!=="postcode"){
            if (trading_name === "") {


            $(`#${id}`).attr("style", "border:2px solid red!important;");
            status = false;

        } else {
            $(`#${id}`).attr("style", "border:2px solid black!important;");
            $(`.${id}`).hide();
        }
    }else{
        if (trading_name === "") {


        $(`#${id}`).attr("style", "border:2px solid red!important;margin-top: 5px ");
        status = false;

        } else {
        $(`#${id}`).attr("style", "border:2px solid black!important;margin-top: 5px;");
        $(`.${id}`).hide();
        }
    }





        if (id.indexOf("address") >= 0){
            let address_line_1 = $('#address_line_1').val();
            let address_line_2 = $('#address_line_2').val();
            let city = $('#city').val();
            let postcode = $('#postcode').val();
            if(address_line_1!=="" && address_line_2!=="" && city!=="" && postcode!==""){
            $(`.address`).hide();
            }
        }
        if (id.indexOf("city") >= 0){
           let address_line_1 = $('#address_line_1').val();
            let address_line_2 = $('#address_line_2').val();
            let city = $('#city').val();
            let postcode = $('#postcode').val();
            if(address_line_1!=="" && address_line_2!=="" && city!=="" && postcode!==""){
            $(`.address`).hide();
            }
        }
        if (id.indexOf("postcode") >= 0){
           let address_line_1 = $('#address_line_1').val();
            let address_line_2 = $('#address_line_2').val();
            let city = $('#city').val();
            let postcode = $('#postcode').val();
            if(address_line_1!=="" && address_line_2!=="" && city!=="" && postcode!==""){
            $(`.address`).hide();
            }
        }
        if (id.indexOf("name") >= 0){
            let first_name = $('#first_name').val();
            let last_name = $('#last_name').val();
            let middle_name = $('#middle_name').val();

            if(first_name!=="" && last_name!=="" && middle_name!==""){
            $(`.name`).hide();
            }
        }
        if (id.indexOf("city") >= 0){
            let first_name = $('#first_name').val();
            let last_name = $('#last_name').val();
            let middle_name = $('#middle_name').val();

            if(first_name!=="" && last_name!=="" && middle_name!==""){
            $(`.name`).hide();
            }
        }
        if (id.indexOf("postcode") >= 0){
            let first_name = $('#first_name').val();
            let last_name = $('#last_name').val();
            let middle_name = $('#middle_name').val();

            if(first_name!=="" && last_name!=="" && middle_name!==""){
            $(`.name`).hide();
            }
        }








}
</script>
<script>
    function saveforlater(){
        $('#is_save_later').val(1);
        $("form").submit();
    }
</script>

@endsection

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
    <div  class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12">
           <h3 class="h3">Business registration application</h3>
        </div>

    </div>

    <div class="row" style="margin-top: 10px;">
        <div class="col-md-4">

            <div style="border-radius: 7px;border: 2px solid black;">
                <h4 class="h3" style="padding: 10px;font-weight: 600;font-size: 17px; "> <img src="/home.png" style="width: 22px;margin-top: -5px;"> VAT
                </h4>

                    <div class="footers">
                        <h4 style="padding-left: 13px;
                        color: black;
                        font-weight: 600;">Help information: </h4>
                        <div id="accordionWrap1" role="tablist" aria-multiselectable="true">
                        <div class="card accordion collapse-icon accordion-icon-rotate" style="box-shadow: none;margin-right: 10px;margin-left: 10px;">
                            <a id="business_VAT" class="card-header info collapsed" data-toggle="collapse" href="#collapsebusiness_vat" aria-expanded="false" aria-controls="collapsebusiness_vat">
                                <div class="card-title lead">UK VAT Number (?)</div>
                            </a>
                            <div id="collapsebusiness_vat" data-parent="#accordionWrap1" role="tabpanel" aria-labelledby="business_VAT" class="collapse" style="">
                                <div class="card-content">
                                    <div class="card-body">
                                        A VAT number is a unique
                                        identification number given to VAT registered Business. In England,
                                        Scotland and Wales, a VAT number
                                        is a nine-digit code with the prefix
                                        ‘GB’. VAT numbers are issued by
                                        HMRC.

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    </div>






            </div>




        </div>

        <div class="col-md-8" style="border: 2px solid black;border-radius: 8px;padding:inherit" id="contens" >
            <form action="{{route('vender.profile.vat')}}" method="POST"  >
                @csrf
                <input type="hidden" id="is_save_later" name="is_save_later" value="0">
                <div class="link-body" style="padding: 10px">
                    <div class="form-group row">
                        <label class="col-md-4 label-control">Is your business UK VAT registered <span style="color: red">*</span> </label>
                        <div class="col-md-8 mx-auto">
                            <div class="input-group">
                                <div class="d-inline-block custom-control custom-radio mr-1">
                                    <input type="radio" name="vat_register" value="YES" class="custom-control-input" @if ($user['profile']['vat_register']=="YES") checked @endif checked="" id="Yes">
                                    <label class="custom-control-label" for="Yes">Yes</label>
                                </div>
                                <div class="d-inline-block custom-control custom-radio">
                                    <input type="radio" name="vat_register" value="NO" @if ($user['profile']['vat_register']=="NO") checked @endif class="custom-control-input" id="No">
                                    <label class="custom-control-label" for="No">No</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row uk-vat-form" @if ($user['profile']['vat_register']=="NO") style="display: none" @endif>
                        <label class="col-md-4 label-control" for="eventRegInput5">UK VAT Number <span style="color: red">*</span> <a style="color: black" href="#collapsebusiness_vat" data-toggle="collapse" aria-expanded="false" aria-controls="collapsebusiness">(?)</a></label>
                        <div class="col-md-8 mx-auto">
                            <input type="tel" id="uk_vat_no" onkeyup="lookup(this);" value="{{$user['profile']['uk_vat_no']}}" class="form-control" name="uk_vat_no" required placeholder="">
                            <p class="text-danger uk_vat_no" style="padding-left: 10px;width:100%;display: none">UK VAT Number is Required !</p>
                        </div>
                    </div>



                </div>
                <div class="footers" style="position: absolute">
                    @if($user['profile']['edit_step']==0)
                    <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1" onclick="submitDetailsForm()" style="float: right;">NEXT</button>
                    <button type="button" onclick="saveforlater()"  class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">SAVE AND EXIT</button>
                    <a href="{{route('vender.profile.back',$user['profile']['step'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                        style="float: right;">PREVIOUS</button></a>

                        @else
                        <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1" onclick="submitDetailsForm()" style="float: right;">Update</button>
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
        var contentHeight = $('#contens').height();
        let value=$('input[type=radio]:checked').val();

        if (value == 'YES') {


            $('#uk_vat_no').attr("required",true);

            $('#contens').height('231');

            } else {

            $('#uk_vat_no').attr("required",false);

            $('#contens').height(contentHeight);
            }
            });
</script>

<script>
     var contentHeight = $('#contens').height();
    $('input[type=radio]').change(function () {
        if (this.value == 'YES') {

            $('.uk-vat-form').show();
            $('#uk_vat_no').attr("required",true);

    $('#contens').height(contentHeight+70);

        } else {
            $('.uk-vat-form').hide();
            $('#uk_vat_no').attr("required",false);

    $('#contens').height(contentHeight);

        }
    });

</script>
<script>
    function submitDetailsForm() {
        let is_vat = $('input[type=radio]:checked').val();
        console.log(is_vat);

        if(is_vat=="NO"){


        }else{
            let uk_vat_no = $('#uk_vat_no').val();
            if(uk_vat_no===""){

                $('.uk_vat_no').show();
                $('#uk_vat_no').attr('style','border:2px solid red!important');

                status=false;
                return false;

                }else{
                $('.uk_vat_no').hide();
                $('#uk_vat_no').attr('style','border:2px solid black!important');
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
            if (trading_name === "") {

                   $(`#${id}`).attr("style", "border:2px solid red!important;");


                }

                else {


                    $(`#${id}`).attr("style", "border:2px solid black!important;");

                    $(`.${id}`).hide();
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

@extends('frontend::new-layouts.master')


@section('content')

<div class="content-body">
    <div  class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12">
           <h3 class="h3">Business registration application</h3>
        </div>

    </div>

    <div class="row" style="margin-top: 10px;">
        <div class="col-md-4">

            <h4 class="h3" style="border-radius: 7px;border: 2px solid black;padding: 10px;font-weight: 600;
            font-size: 17px; "> <img src="/home.png" style="width: 22px;margin-top: -5px;" > Terms and conditions</h2>




        </div>

        <div class="col-md-8" style="border: 2px solid black;border-radius: 8px;padding:inherit">
            <form action="{{route('vender.profile.terms')}}" method="POST" id="contens"> @csrf

                <input type="hidden" id="is_save_later" name="is_save_later" value="0">
            <div class="link-body" style="padding: 10px">
              <h3 class="h3" style="font-size: 16px;">Terms and Conditions for Vehicle Application:</h3>
              <ul>
                <li>
                    Acceptance of Terms: By accessing or using our vehicle application ("the App"), you agree to abide by these terms and conditions. If you do not agree with any part of these terms, you may not use the App.
                </li>
                <li>
                    Use of the App: The App is designed to provide users with information and services related to vehicles. You agree to use the App only for lawful purposes and in accordance with these terms.
                </li>
                <li>
                    User Accounts: Some features of the App may require you to create a user account. You are responsible for maintaining the confidentiality of your account information and for all activities that occur under your account.
                </li>
              </ul>

              <fieldset class="checkboxsas">
                <label>
                    <input type="checkbox" name="is_agree"  value="1">
                    Please Agree Above Term and Condition
                </label>
            </fieldset>
            <p class="text-danger agree" style="padding-left: 10px;width:100%;display: none">Please Agree Term and Condition </p>

            </div>
            <div class="footers">
                <button type="button" onclick="submitDetailsForm()" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">NEXT</button>
                <button onclick="saveforlater()" type="button" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">SAVE AND EXIT</button>
                <a href="{{route('vender.profile.back',$user['profile']['step'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                    style="float: right;">PREVIOUS</button></a>

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
    $('#contens').height(contentHeight);
});
</script>
<script>
     function submitDetailsForm() {
        var checked = $('input[name=is_agree]').is(":checked");


        if(checked===true){

            $("form").submit();
        }else{

            $('.agree').show();

        }










    }

    $('input[type=checkbox]').change(function () {
        var checked = $('input[name=is_agree]').is(":checked");

        console.log(checked)


        if(checked===true){
            $('.agree').hide();

        }else{

            $('.agree').show();

        }
    });
</script>

<script>
    function saveforlater(){
        $('#is_save_later').val(1);
        $("form").submit();
    }
</script>

@endsection

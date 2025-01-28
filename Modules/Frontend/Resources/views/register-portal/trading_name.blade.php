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
                <h4 class="h3" style="padding: 10px;font-weight: 600;font-size: 17px; "> <img src="/home.png" style="width: 22px;margin-top: -5px;"> Trading Name
                </h4>
                <p style="padding-left: 10px; padding-right: 10px;">Please let us know if you trade
                    using a different name to your
                    registered name. This is also
                    known as a ‘business name’.
                    </p>

                    <div class="footers cname_info">
                        <h4 style="padding-left: 13px;
                        color: black;
                        font-weight: 600;">Help information: </h4>
                        <div id="accordionWrap1" role="tablist" aria-multiselectable="true">
                        <div class="card accordion collapse-icon accordion-icon-rotate" style="box-shadow: none;margin-right: 10px;margin-left: 10px;">
                            <a id="business_VAT" class="card-header info  collapsed" data-toggle="collapse" href="#collapsebusiness_vat" aria-expanded="false" aria-controls="collapsebusiness_vat">
                                <div class="card-title lead">Proof of trading name (?)</div>
                            </a>
                            <div id="collapsebusiness_vat" data-parent="#accordionWrap1" role="tabpanel" aria-labelledby="business_VAT" class="collapse" style="">
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Acceptable proof (any 1 of the
                                            following):</p>
                                        <ul>
                                            <li>Sales invoice for work completed in
                                                your trading name, dated within the
                                                last 1 month</li>
                                                <li>
                                                    Bank Statement in your trading
                                                    name, dated within last 3 months
                                                </li>

                                        </ul>

                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                    </div>






            </div>




        </div>

        <div class="col-md-8 body-height"   @if ($user['profile']['is_trading_name']=="NO")  style="border: 2px solid black;border-radius: 8px;padding: inherit;" @else  style="border: 2px solid black;border-radius: 8px;padding: inherit;" @endif >
            {{-- <form action="{{route('vender.profile.trading.name.NEXT')}}" method="POST">
                @csrf --}}
                <div id="contens" >
                <div class="link-body"  style="padding: 10px">
                    <div class="form-group row">
                        <label class="col-md-4 label-control">Does your business use any trading names? <span style="color: red">*</span> (?)</label>
                        <div class="col-md-8 mx-auto">
                            <div class="input-group">
                                <div class="d-inline-block custom-control custom-radio mr-1">
                                    <input type="radio" name="is_trading_name" value="YES" @if ($user['profile']['is_trading_name']=="YES") checked @endif class="custom-control-input" checked="" id="Yes">
                                    <label class="custom-control-label" for="Yes">Yes</label>
                                </div>
                                <div class="d-inline-block custom-control custom-radio">
                                    <input type="radio" name="is_trading_name" value="NO" @if ($user['profile']['is_trading_name']=="NO") checked @endif class="custom-control-input" id="No">
                                    <label class="custom-control-label" for="No">No</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hide-form" @if ($user['profile']['is_trading_name']=="NO") style="display: none" @endif>
                        <form action="{{route('vender.profile.trading.name')}}" method="POST" enctype="multipart/form-data" id="form" >
                            @csrf

                            <input type="hidden" id="is_save_later" name="is_save_later" value="0">
                        <div class="form-group">
                            <label for="projectinput1" style="float: left;width: 100%;">Trading names <span style="color: red">*</span> <a style="color: black" href="#collapsebusiness_vat" data-toggle="collapse" aria-expanded="false" aria-controls="collapsebusiness">(?)</a></label>
                            <input type="text" id="name" style="float: left;width: 30%;" class="form-control" required placeholder="Trading names" name="name">
                            <input type="file" name="proof" accept="image/*,.doc, .docx,.pdf" class="d-none">
                            <input type="button" id="projectinput1" style="float: left;width: 30%;margin-left: 13px "  value="Proof of trading name" class="form-control form-btn form-btns" placeholder="Trading names" name="fname">
                            {{-- <button type="button" class="btn btn-primary btn-sm view-btn-black "> UPLOAD PROOF</button> --}}
                            <button type="submit" class="btn btn-primary btn-sm view-btn-black "> ADD</button>

                        </div>
                        <p class="text-danger file_proof" style="padding-left: 10px;width:100%;display: none">Proof of trading name is Required !</p>

                       </form>
                        <br>
                       <div id="append_data">
                        @foreach ($user['trading_names'] as $name)
                        <div class="form-group rm-{{$name['id']}}" style="width: 100%">
                            <p style="width: 30%;
                            float: left;">{{$loop->iteration}}. {{ucfirst($name['name'])}}</p>
                            <input type="button" id="projectinput1" style="width: 30%;margin-left: 13px " value="{{$name['proof_name']}}" disabled class="form-control form-btn" placeholder="Trading names" name="fname">
                            <button class="btn btn-primary btn-sm view-btn-black"><a href="{{URL::to($name['proof'])}}" target="_blank" style="color: white"> View</a></button>
                            <button class="btn btn-primary btn-sm view-btn-black" onclick="deleteAlert(`{{route('vender.profile.trading.delete',$name['id'])}}`,`{{$name['id']}}`)"> DELETE TRADING NAME</button>

                        </div>
                        @endforeach

                       </div>

                    </div>




                </div>
                <div class="footers"  id="footers" style="position: absolute">
                    @if($user['profile']['edit_step']==0)
                    <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1" onclick="movetoNEXT()" style="float: right;">NEXT</button>
                    <button onclick="saveforlater()" type="button" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">SAVE AND EXIT</button>
                    <a href="{{route('vender.profile.back',$user['profile']['step'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                        style="float: right;">PREVIOUS</button></a>

                        @else
                        <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1" onclick="movetoNEXT()" style="float: right;">Update</button>
                        @endif

                </div>
            </div>
            {{-- </form> --}}

        </div>

    </div>

</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    let count=@json(count($user['trading_names'])+1);
</script>
<script>
    $(document).ready(function() {
    var contentHeight = $('#contens').height();
    $('#contens').height(contentHeight);
});
    $(document).ready(function() {
        let value=$('input[type=radio]:checked').val();

        if (value == 'YES') {

            $('.hide-form').show();
            $('.cname_info').show();
            // $('.body-height').css('height','500px');
            $('.body-height_info').hide();
            var contentHeight = $('#contens').height();

            $('#contens').height(contentHeight);
            $('#footers').css("position","relative");
            $('.body-height').height('auto');
            } else {
            $('.hide-form').hide();
            // $('.body-height').css('height','200px');
            $('.cname_info').hide();
            var contentHeight = $('#contens').height();

            $('.body-height').height('150px');

            $('#footers').css("position","absolute");
            }
});
</script>

<script>
    $('.form-btn').click(function () {
        $('input[type=file]').trigger('click');
    });

</script>

<script>
    function movetoNEXT(){
        let is_trading_name = $('input[type=radio][name=is_trading_name]:checked').val();
        $.ajax({
                url: `{{route('vender.profile.trading.name.next')}}?is_trading_name=${is_trading_name}`,
                type: 'get',
                success: function(result) {
                   if(result.status){
                    toastr.success('Trading Name Info Save  Successfully',{
                    timeOut: 500000000,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    positionClass: "toast-top-right",
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                });
                    location.reload();
                   }
                }
            });
    }
</script>

<script>
    $(document).ready(function () {
        $('input[type="file"]').change(function (e) {
            var fileName = e.target.files[0].name;
            $('.form-btns').val(fileName);

            $('.view-btn').show();
            $('#view_file').attr('href', URL.createObjectURL(e.target.files[0]));
            $('.file_proof').hide();
        });
    });

</script>

<script>
    $("#form").submit(function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    let file = $('input[type=file]').val();
    if (file === "") {

        $('.file_proof').show();
            return false;

    }else{
        $('.file_proof').hide();
    }

    $.ajax({
        url: `{{route('vender.profile.trading.name')}}`,
        type: 'POST',
        data: formData,
        success: function (data) {
            if(data.status===false){
                toastr.error(data.error,{
            timeOut: 500000000,
            closeButton: !0,
            debug: !1,
            newestOnTop: !0,
            progressBar: !0,
            positionClass: "toast-top-right",
            preventDuplicates: !0,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
            tapToDismiss: !1
        });
            }else{
            toastr.success(data.message,{
            timeOut: 500000000,
            closeButton: !0,
            debug: !1,
            newestOnTop: !0,
            progressBar: !0,
            positionClass: "toast-top-right",
            preventDuplicates: !0,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
            tapToDismiss: !1
        });

        let html=`<div class="form-group rm-${data.name.id}" style="width: 100%">
                    <p style="width: 30%;
                    float: left;">${count}. ${data.name.name}</p>
                    <input type="button" id="projectinput1" style="width: 30%;margin-left: 13px " value="${data.name.proof_name}" class="form-control form-btn" placeholder="Trading names" name="fname">
                    <button class="btn btn-primary btn-sm view-btn-black"><a href="/${data.name.proof}" target="_blank" style="color: white"> View</a></button>
                    <button class="btn btn-primary btn-sm view-btn-black" onclick="deleteAlert('/vender/profile/trading/name/delete/${data.name.id}','${data.name.id}')"> DELETE TRADING NAME</button>

                </div>`;

                $('#append_data').append(html);

                $('form').trigger("reset");
                $('.form-btns').val('Proof of trading name');

                count=count+1;

            }
        },
        cache: false,
        contentType: false,
        processData: false
    });
});
</script>
<script>
    function deleteAlert(route,slug){
        Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
        }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            $.ajax({
                url: route,
                type: 'get',
                success: function(result) {
                   if(result.status){
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                        });

                        $('.rm-'+slug).remove();
                   }
                }
            });
        } else if (result.isDenied) {

        }
      });
}
</script>

<script>
    $('input[type=radio]').change(function () {
        if (this.value == 'YES') {

            $('.hide-form').show();
            $('.cname_info').show();
            // $('.body-height').css('height','500px');
            $('.body-height_info').hide();
            var contentHeight = $('#contens').height();

            $('#contens').height(contentHeight);
            $('#footers').css("position","relative");
            $('.body-height').height('auto');
        } else {
            $('.hide-form').hide();
            // $('.body-height').css('height','200px');
            $('.cname_info').hide();
            var contentHeight = $('#contens').height();

            $('.body-height').height('150px');

            $('#footers').css("position","absolute");
        }
    });

</script>

<script>
    function saveforlater(){
        $('#is_save_later').val(1);
        let is_trading_name = $('input[type=radio][name=is_trading_name]:checked').val();
        $.ajax({
                url: `{{route('vender.profile.trading.name.next')}}?is_save_later=1`,
                type: 'get',
                success: function(result) {
                   if(result.status){
                    toastr.success('Trading Name Info Save  Successfully',{
                    timeOut: 500000000,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    positionClass: "toast-top-right",
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                });
                    location.reload();
                   }
                }
            });
    }
</script>
@endsection

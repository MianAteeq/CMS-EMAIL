@extends('frontend::new-layouts.master')

@section('css')
<link href="/modules/admin/app-assets/vendors/css/forms/selects/select2.min.css" rel="stylesheet" />
<style>
    .select2-container {
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle;
    width: 63% !important;
}
.select2-container--default .select2-selection--multiple {
    background-color: #fff;
    border: 2px solid black;
    border-radius: 6px;
    border-color: black !important;
}
.select2-container--default .select2-selection--multiple .select2-selection__rendered{
    display: none!important;
}
hr {
    margin-top: 0rem;
    margin-bottom: 0rem;
    border: 0;
    border-top: 2px solid rgba(0, 0, 0, 0.1);
}
.select2-container--default .select2-results>.select2-results__options {
    max-height: 200px;
    overflow-y: auto;
    width: 350px;
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
                <h4 class="h3" style="padding: 10px;font-weight: 600;font-size: 17px; "> <img src="/home.png" style="width: 22px;margin-top: -5px;"> Your business activities
                </h4>


                    <div class="footers">
                        <h4 style="padding-left: 13px;
                        color: black;
                        font-weight: 600;">Help information: </h4>
                        <div id="accordionWrap1" role="tablist" aria-multiselectable="true">
                        <div class="card accordion collapse-icon accordion-icon-rotate" style="box-shadow: none;margin-right: 10px;margin-left: 10px;">
                            <a id="business_service" class="card-header info collapsed" data-toggle="collapse" href="#collapsebusiness_service" aria-expanded="false" aria-controls="collapsebusiness_service">
                                <div class="card-title lead">Which services do you
                                    provide? (?)</div>
                            </a>
                            <div id="collapsebusiness_service" data-parent="#accordionWrap1" role="tabpanel" aria-labelledby="business_service" class="collapse" style="">
                                <div class="card-content">
                                    <div class="card-body">


                                    </div>
                                </div>
                            </div>
                            <a id="business_proof" class="card-header info collapsed" data-toggle="collapse" href="#collapsebusiness_proof" aria-expanded="false" aria-controls="collapsebusiness_proof">
                                <div class="card-title lead">Proof of business activities
                                    trading</div>
                            </a>
                            <div id="collapsebusiness_proof" data-parent="#accordionWrap1" role="tabpanel" aria-labelledby="business_proof" class="collapse" style="">
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Acceptable proof (any 1 of the
                                            following):</p>
                                        <ul>
                                            <li>Sales invoice for work completed in
                                                your trading name, dated within the
                                                last 1 month</li>
                                                <li>
                                                    Bank Statement in your trading name, dated within last 3 months
                                                </li>
                                                <li>
                                                    Copy of your VAT registration
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

        <div class="col-md-8 body-height" style="border: 2px solid black;border-radius: 8px;padding:inherit;    height: 380px;">
            <form action="{{route('vender.profile.business.activities')}}" method="POST" enctype="multipart/form-data" id="contens" >
                @csrf
                <input type="hidden" id="is_save_later" name="is_save_later" value="0">
                <div class="link-body" style="padding: 10px">
                    <div class="form-group row" style="margin-bottom: 0.5rem ">
                        <label class="col-md-4 label-control" for="eventRegInput5">Which services do you provide? <span style="color: red">*</span> <a style="color: black" href="#collapsebusiness_service" data-toggle="collapse" aria-expanded="false" aria-controls="collapsebusiness">(?)</a>
                        </label>
                        <div class="col-md-8 mx-auto">
                            <select class="select2-placeholder-multiple" name="service_id[]" multiple>
                                @foreach ($types as $service)
                                <option value="{{$service['id']}}" @foreach ($user['services'] as $serv) @if($serv['service_id']==$service['id']) selected @endif @endforeach>{{$service['name']}}</option>
                                @endforeach
                              </select>

                        </div>
                    </div>
                    <div class="form-group row" >
                        <label class="col-md-4 label-control" for="eventRegInput5"></label>
                        <div class="col-md-8 mx-auto" id="html">
                            @foreach ($user['services'] as $service)

                            <span class="badge badge-success mt-1" style="padding: 0.5em 1.6em;background-color: #ff822f;">{{$service['service']['name']}}</span>
                            @endforeach


                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 label-control" for="eventRegInput5">Proof of business activities trading <span style="color: red">*</span> <a style="color: black" href="#collapsebusiness_proof" data-toggle="collapse" aria-expanded="false" aria-controls="collapsebusiness">(?)</a></label>
                        <div class="col-md-8 mx-auto">
                            <input type="file" name="business_proof" class="d-none" accept="image/*,.doc, .docx,.pdf" id="">
                            <input type="button" id="form-btn" class="form-control form-btn" value="{{$user['profile']['business_proof_name']??'Document Upload'}}" name="contact" placeholder="Document Upload ">
                            <button type="button" class="btn btn-primary btn-sm view-btn" @if($user['profile']['business_proof_name']==null) style="display: none" @endif> <a href="{{URL::to($user['profile']['business_proof'])}}"
                                id="view_file" target="_blank" style="color: white">View</a></button>
                                <br><br>
                                <p class="text-danger business_proof" style="padding-left: 10px;width:100%;display: none">Document Upload is Required !</p>

                        </div>
                    </div>






                </div>
                <div class="footers" style="position: absolute">
                    @if($user['profile']['edit_step']==0)
                    <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1" onclick="submitDetailsForm()" style="float: right;">NEXT</button>
                    <button onclick="saveforlater()" type="button" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">SAVE AND EXIT</button>
                    <a href="{{route('vender.profile.back',$user['profile']['step'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                        style="float: right;">PREVIOUS</button></a>

                        @else
                        <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1" onclick="submitDetailsForm()" style="float: right;">UPDATE</button>
                        @endif

                </div>

            </form>

        </div>

    </div>

</div>
@endsection

@section('js')
{{-- <script src="/modules/admin/app-assets/js/scripts/forms/select/form-select2.js"></script> --}}

<script>

    let count=@json($user['services'])


    $( document ).ready(function() {

    $(".select2-selection__rendered").html(`<li> ${count.length}  options selected </li>`);
    $('.select2-selection__rendered').attr('style',"display:block!important");
});
</script>

<script>
    $(".select2-placeholder-multiple").select2({
      dropdownAutoWidth: true,
      width: '100%',
      placeholder: "Select Option Please",
    });
    $(".select2-placeholder-multiple").on('select2-loaded', function (e) {
    items = e.items.results;

    if (items.length == 1) {
        $(this).val(items[0].text);
        $(".select").select2('close');
    }
});

$('.select2-placeholder-multiple').on('select2:close', function() {
  let select = $(this)
  $(this).next('span.select2').find('ul').html(function() {
    let count = select.select2('data').length;
     let records=select.select2('data');
    let html=``;

    records.forEach((item)=>{
        console.log(item);
        html+=` <span class="badge badge-success mt-1" style="padding: 0.5em 1.6em;background-color: #ff822f;">${item.text}</span>`
    });

    $('#html').html(html);
    // var contentHeight = $('#contens').height();
    // console.log(contentHeight);
    // $('#contens').height(contentHeight);


    return "<li>" + count + " options selected</li>"
  })
})
</script>


<script>

</script>

<script>
    $('#form-btn').click(function () {
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


        let file = $('input[type=file]').val();
            if (file === "" && @json($user['profile']['business_proof'])==null) {

                $('.business_proof').show();

                 return false;

            }else{
                status=true;
            }




        $("form").submit();




    }


</script>

<script>
    function saveforlater(){
        $('#is_save_later').val(1);
        $("form").submit();
    }
</script>


@endsection

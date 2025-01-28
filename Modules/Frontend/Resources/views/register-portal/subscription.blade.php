@extends('frontend::new-layouts.master')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .select2-container {
    box-sizing: border-box;
    display: inline-block;
    margin: 0;
    position: relative;
    vertical-align: middle;
    width: 53% !important;
}
.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 2px solid black;
    border-radius: 6px;
    border-color: black !important;
}
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

            <h4 class="h3" style="border-radius: 7px;border: 2px solid black;padding: 10px;font-weight: 600;
            font-size: 17px; "> <img src="/home.png" style="width: 22px;margin-top: -5px;" > Subscription</h2>




        </div>

        <div class="col-md-8" style="border: 2px solid black;border-radius: 8px;padding:inherit">
            <form action="{{route('vender.profile.plan.select')}}" method="POST" id="contens"> @csrf
                <input type="hidden" id="is_save_later" name="is_save_later" value="0">
            <div class="link-body" style="padding: 10px">
                <div class="form-group row">
                    <label class="col-md-4 label-control" for="eventRegInput5">Product <span style="color: red">*</span>
                    </label>
                    <div class="col-md-8 mx-auto">
                        <select class="js-example-basic-single" name="product_name">
                            <option value="Service Provider App">Service Provider App</option>


                          </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 label-control" for="eventRegInput5">Plan <span style="color: red">*</span>
                    </label>
                    <div class="col-md-8 mx-auto">
                        <select class="js-example-basic-single" name="package_id">

                            @foreach ($packages as $package)

                            <option value="{{$package['id']}}" @if($user['profile']['package_id']==$package['id']) selected @endif >{{$package['name']}} @if($package['price']>0) -  £ {{$package['price']}} @endif</option>
                            @endforeach


                          </select>
                    </div>
                </div>








            </div>
            <div class="footers">
                @if($user['profile']['edit_step']==0)
                <button type="submit" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">NEXT</button>
                <button type="button" onclick="saveforlater()" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">SAVE AND EXIT</button>
                <a href="{{route('vender.profile.back',$user['profile']['step'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                    style="float: right;">PREVIOUS</button></a>

                    @else
                    <button type="submit" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">Update</button>

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
    $('#contens').height(contentHeight);
});
</script>
<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>

<script>
       function saveforlater(){
        $('#is_save_later').val(1);
        $("form").submit();
    }
</script>

@endsection

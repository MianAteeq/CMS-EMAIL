@extends('vender::layouts.master')

@section('css_custom')

<link rel="stylesheet" type="text/css" href="/modules/admin/app-assets/vendors/css/forms/toggle/bootstrap-switch.min.css">
<link rel="stylesheet" type="text/css" href="/modules/admin/app-assets/vendors/css/forms/toggle/switchery.min.css">
<link rel="stylesheet" type="text/css" href="/modules/admin/app-assets/css/plugins/forms/switch.css">
<style>
    .footers{
    /* position: absolute; */
    bottom: 0;
    left: 0;
    border-top: 2px solid black;
    padding-top: 5px;
    width: 100%;
}
.btn-dark {
    border-color: black !important;
    background-color: black !important;
    color: #FFFFFF;
}
.round {
    border-radius: 0.5rem;
}
.btn-dark {
    border-color: black !important;
    background-color: black !important;
    color: #FFFFFF;
}
.round {
    border-radius: 0.5rem;
}
form .form-control {
    border: 2px solid #000000;
    color: #000000;
}
p{
    color: black;
}
.form-control:focus {
    color: #000000;
    background-color: #fff;
    border-color: #000000;
    outline: 0;
    box-shadow: none;
}
.btn-success {
    border-color: #ff6618 !important;
    background-color: #ff6800 !important;
    color: #FFFFFF;
}
.btn-success:active {
    border-color: #ff6618 !important;
    background-color: #ff6618 !important;
    color: #FFF !important;
}
.btn-success:hover {
    border-color: #ff6618 !important;
    background-color: #ff6618 !important;
    color: #FFF !important;
}
#headingCollapse1:before {
    position: absolute;
    top: 48%;
    right: 20px;
    margin-top: -8px;
    font-family: 'feather';
    content: "\e845"!important;
    transition: all 300ms linear 0s;
}
</style>

@endsection

@section('header')
<div class="content-header bg-white">
    <div class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12 bg-white headerbg" style="padding-left: 32px;padding-top: 13px;">
            <h3 class="h3">Edit online statuses</h3>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Products</a>
                    </li>

                    <li class="breadcrumb-item"><a style="color: black" href="{{route('vender.service.provider')}}">Service Provider</a>
                    </li>
                    <li class="breadcrumb-item"><a style="color: black" href="{{route('vender.service.provider.trading.unit')}}">Trade Units</a>
                    </li>
                    <li class="breadcrumb-item"><a style="color: black" href="{{route('vender.service.provider.trading.unit.view',$trading_unit['id'])}}"> {{$trading_unit['name']}}</a>
                    </li>
                    <li class="breadcrumb-item"> <a href="{{route('vender.service.provider.trading.unit.hub.setting',$trading_unit['id'])}}" style="color: black">Hub profile settings</a>
                    </li>
                    <li class="breadcrumb-item"> Edit opening hours
                    </li>




                </ol>
            </div>
        </div>

    </div>
</div>
@endsection

@section('content')

<div class="row">
    <div class="col-md-3">
        <div style="border-radius: 7px;border: 2px solid black; ">
            <h4 class="h3" style="font-weight: 600; font-size: 17px;padding: 10px; ">
        <div>
            <div style="float: left; width: 10%;">
                <img src="/trading_unit.png" style="width: 22px;margin-top: -5px;" >
            </div>
            <div style="float: left; width: 90%;">
                <span>Trading Unit : {{$trading_unit['name']}}</span>
            </div>



        </div>
        <div style="margin: 20px;margin-top: 53px;font-weight: 500;font-size: 13px;">
            <span>Trading Name : {{$trading_unit['trading_name']['name']??''}}</span>
        </div>
        <div style="margin: 20px;margin-top: 15px;font-weight: 500;font-size: 13px;">
            <span class="success">{{$trading_unit['status']}}</span>
        </div>
        <div style="margin: 20px;margin-top: 15px;font-weight: 500;font-size: 13px;">
            <span class="success">{{$trading_unit['active_status']}}</span>
        </div>
        <div style="margin: 20px;margin-top: 15px;font-weight: 500;font-size: 13px;margin-bottom:0px">
            <span >Created: {{\Carbon\Carbon::parse($trading_unit['created_at'])->format('d/m/Y') }} at  {{\Carbon\Carbon::parse($trading_unit['created_at'])->format('h:i') }}</span>
        </div>

        </h4>
        <div class="footers" style="text-align: center;">

            @if($trading_unit['status']=="PENDING" || $trading_unit['status']=="INACTIVE")
            <a href="{{route('vender.service.provider.trading.unit.active',$trading_unit['id'])}}">  <button type="button" style="width: 80%;" class="btn btn-dark round btn-min-width mr-1 mb-1">ACTIVATE TRADE UNIT</button></a>
            @else
            <a href="{{route('vender.service.provider.trading.unit.in.active',$trading_unit['id'])}}">  <button type="button" style="width: 80%;" class="btn btn-dark round btn-min-width mr-1 mb-1">INACTIVATE TRADE UNIT</button></a>

            @endif
            @if($trading_unit['active_status']=="OFFLINE")
            <a href="{{route('vender.service.provider.trading.unit.Online',$trading_unit['id'])}}">  <button type="button" style="width: 80%;" class="btn btn-dark round btn-min-width mr-1 mb-1"
               >SHOW ONLINE</button></a>

               @else
               <a href="{{route('vender.service.provider.trading.unit.offline',$trading_unit['id'])}}">  <button type="button" style="width: 80%;" class="btn btn-dark round btn-min-width mr-1 mb-1"
                  >SHOW OFFLINE</button></a>

               @endif



       </div>

        </div>
    </div>
    <div class="col-md-9" id="contens" style="border-radius: 6px;margin-bottom: 10px;padding-bottom: 10px;margin-top: 0px;">
        <div class="row ">
            <a href="{{route('vender.service.provider.trading.unit.view',$trading_unit['id'])}}"><h4 class="h3"  style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> Overview</h2></a>
                <a href="{{route('vender.service.provider.trading.unit.app.setting',$trading_unit['id'])}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> App settings</h2></a>
                <a href="{{route('vender.service.provider.trading.unit.app.data',$trading_unit['id'])}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> App data </h2> </a>
                <a href="{{route('vender.service.provider.trading.unit.hub.setting',$trading_unit['id'])}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid #ff6600; padding: 10px; font-weight: 600; font-size: 17px; color: #ff6600;margin-left: 15px;"> Hub profile settings </h2> </a>


        </div>

        <div class="card default-collapse collapse-icon accordion-icon-rotate" style="box-shadow: none;margin-top: -6px;">




            <a id="headingCollapse1" href="{{redirect()->back()->getTargetUrl()}}" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle=""  aria-expanded="false" >
                <div class="card-title lead collapsed">Edit opening hours</div>
            </a>
            <div id="collaptr_businesss_info" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
            style="border-left: 2px solid black;
            margin-top: -4px;
            border-right: 2px solid black;
            border-bottom: 2px solid black;
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;"
            class="collapse show" aria-expanded="false">
                <div class="card-content">
                    <form action="{{route('vender.service.provider.trading.unit.hub.setting.opening.hour.submit')}}" id="contens" method="POST" enctype="multipart/form-data" id="contens"> @csrf
                        <div class="link-body"  style="padding: 10px">

                            <input type="hidden" name="id" value="{{$trading_unit['id']}}">

                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Monday</label>
                                <div class="col-md-8 mx-auto">
                                  <div class="row">
                                    <div class="col-md-3">
                                        <fieldset>
                                            <div class="float-left">
                                                <input type="checkbox" class="switch" name="is_monday" value="1" data-on-label="Open" data-off-label="Closed" id="is_monday" @if ($trading_unit['hub_setting']['is_monday']==1) checked @endif   />
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="monday_start_time" name="monday_start_time" @if ($trading_unit['hub_setting']['is_monday']==0) style="display: none;border-radius: 4px;" @else  style="border-radius: 4px;" @endif class="form-control" >
                                            <option value="none" selected="" disabled="">Select Start Time</option>

                                            @foreach ($hours as $hour)
                                            <option value="{{$hour}}" @if($trading_unit['hub_setting']['monday_start_time']==$hour) selected @endif >{{$hour}}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="monday_end_time" name="monday_end_time" class="form-control" @if ($trading_unit['hub_setting']['is_monday']==0) style="display: none;border-radius: 4px;" @else  style="border-radius: 4px;" @endif>
                                            <option value="none" selected="" disabled="">Select End Time</option>

                                            @foreach ($hours as $hour)
                                            <option value="{{$hour}}" @if($trading_unit['hub_setting']['monday_end_time']==$hour) selected @endif >{{$hour}}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                  </div>

                                    <p class="text-danger start_time" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Tuesday</label>
                                <div class="col-md-8 mx-auto">
                                  <div class="row">
                                    <div class="col-md-3">
                                        <fieldset>
                                            <div class="float-left">
                                                <input type="checkbox" class="switch" name="is_tuesday" value="1" data-on-label="Open" data-off-label="Closed" id="is_tuesday" @if ($trading_unit['hub_setting']['is_tuesday']==1) checked @endif   />
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="tuesday_start_time" name="tuesday_start_time" class="form-control" @if ($trading_unit['hub_setting']['is_tuesday']==0) style="display: none;border-radius: 4px;" @else  style="border-radius: 4px;" @endif>
                                            <option value="none" selected="" disabled="">Select Start Time</option>

                                            @foreach ($hours as $hour)
                                            <option value="{{$hour}}" @if($trading_unit['hub_setting']['tuesday_start_time']==$hour) selected @endif >{{$hour}}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="tuesday_end_time" name="tuesday_end_time" class="form-control" @if ($trading_unit['hub_setting']['is_tuesday']==0) style="display: none;border-radius: 4px;" @else  style="border-radius: 4px;" @endif>
                                            <option value="none" selected="" disabled="">Select End Time</option>

                                            @foreach ($hours as $hour)
                                            <option value="{{$hour}}" @if($trading_unit['hub_setting']['tuesday_end_time']==$hour) selected @endif >{{$hour}}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                  </div>

                                    <p class="text-danger start_time" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Wednesday</label>
                                <div class="col-md-8 mx-auto">
                                  <div class="row">
                                    <div class="col-md-3">
                                        <fieldset>
                                            <div class="float-left">
                                                <input type="checkbox" class="switch" name="is_wednesday" value="1" data-on-label="Open" data-off-label="Closed" id="is_wednesday" @if ($trading_unit['hub_setting']['is_wednesday']==1) checked @endif   />
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="wednesday_start_time" name="wednesday_start_time" class="form-control" @if ($trading_unit['hub_setting']['is_wednesday']==0) style="display: none;border-radius: 4px;" @else  style="border-radius: 4px;" @endif>
                                            <option value="none" selected="" disabled="">Select Start Time</option>

                                            @foreach ($hours as $hour)
                                            <option value="{{$hour}}" @if($trading_unit['hub_setting']['wednesday_start_time']==$hour) selected @endif >{{$hour}}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="wednesday_end_time" name="wednesday_end_time" class="form-control" @if ($trading_unit['hub_setting']['is_wednesday']==0) style="display: none;border-radius: 4px;" @else  style="border-radius: 4px;" @endif>
                                            <option value="none" selected="" disabled="">Select End Time</option>

                                            @foreach ($hours as $hour)
                                            <option value="{{$hour}}" @if($trading_unit['hub_setting']['wednesday_end_time']==$hour) selected @endif >{{$hour}}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                  </div>

                                    <p class="text-danger start_time" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Thursday</label>
                                <div class="col-md-8 mx-auto">
                                  <div class="row">
                                    <div class="col-md-3">
                                        <fieldset>
                                            <div class="float-left">
                                                <input type="checkbox" class="switch" name="is_thursday" value="1" data-on-label="Open" data-off-label="Closed" id="is_thursday" @if ($trading_unit['hub_setting']['is_thursday']==1) checked @endif   />
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="thursday_start_time" name="thursday_start_time" class="form-control" @if ($trading_unit['hub_setting']['is_thursday']==0) style="display: none;border-radius: 4px;" @else  style="border-radius: 4px;" @endif>
                                            <option value="none" selected="" disabled="">Select Start Time</option>

                                            @foreach ($hours as $hour)
                                            <option value="{{$hour}}" @if($trading_unit['hub_setting']['thursday_start_time']==$hour) selected @endif >{{$hour}}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="thursday_end_time" name="thursday_end_time" class="form-control" @if ($trading_unit['hub_setting']['is_thursday']==0) style="display: none;border-radius: 4px;" @else  style="border-radius: 4px;" @endif>
                                            <option value="none" selected="" disabled="">Select End Time</option>

                                            @foreach ($hours as $hour)
                                            <option value="{{$hour}}" @if($trading_unit['hub_setting']['thursday_end_time']==$hour) selected @endif >{{$hour}}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                  </div>

                                    <p class="text-danger start_time" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Friday</label>
                                <div class="col-md-8 mx-auto">
                                  <div class="row">
                                    <div class="col-md-3">
                                        <fieldset>
                                            <div class="float-left">
                                                <input type="checkbox" class="switch" name="is_friday" value="1" data-on-label="Open" data-off-label="Closed" id="is_friday" @if ($trading_unit['hub_setting']['is_friday']==1) checked @endif   />
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="friday_start_time" name="friday_start_time" class="form-control" @if ($trading_unit['hub_setting']['is_friday']==0) style="display: none;border-radius: 4px;" @else  style="border-radius: 4px;" @endif>
                                            <option value="none" selected="" disabled="">Select Start Time</option>

                                            @foreach ($hours as $hour)
                                            <option value="{{$hour}}" @if($trading_unit['hub_setting']['friday_start_time']==$hour) selected @endif >{{$hour}}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="friday_end_time" name="friday_end_time" class="form-control" @if ($trading_unit['hub_setting']['is_friday']==0) style="display: none;border-radius: 4px;" @else  style="border-radius: 4px;" @endif>
                                            <option value="none" selected="" disabled="">Select End Time</option>

                                            @foreach ($hours as $hour)
                                            <option value="{{$hour}}" @if($trading_unit['hub_setting']['friday_end_time']==$hour) selected @endif >{{$hour}}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                  </div>

                                    <p class="text-danger start_time" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Saturday</label>
                                <div class="col-md-8 mx-auto">
                                  <div class="row">
                                    <div class="col-md-3">
                                        <fieldset>
                                            <div class="float-left">
                                                <input type="checkbox" class="switch" name="is_saturday" value="1" data-on-label="Open" data-off-label="Closed" id="is_saturday" @if ($trading_unit['hub_setting']['is_saturday']==1) checked @endif   />
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="saturday_start_time" name="saturday_start_time" class="form-control" @if ($trading_unit['hub_setting']['is_saturday']==0) style="display: none;border-radius: 4px;" @else  style="border-radius: 4px;" @endif>
                                            <option value="none" selected="" disabled="">Select Start Time</option>

                                            @foreach ($hours as $hour)
                                            <option value="{{$hour}}"  @if($trading_unit['hub_setting']['saturday_start_time']==$hour) selected @endif>{{$hour}}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="saturday_end_time" name="saturday_end_time" class="form-control" @if ($trading_unit['hub_setting']['is_saturday']==0) style="display: none;border-radius: 4px;" @else  style="border-radius: 4px;" @endif>
                                            <option value="none" selected="" disabled="">Select End Time</option>

                                            @foreach ($hours as $hour)
                                            <option value="{{$hour}}" @if($trading_unit['hub_setting']['saturday_end_time']==$hour) selected @endif >{{$hour}}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                  </div>

                                    <p class="text-danger start_time" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Sunday</label>
                                <div class="col-md-8 mx-auto">
                                  <div class="row">
                                    <div class="col-md-3">
                                        <fieldset>
                                            <div class="float-left">
                                                <input type="checkbox" class="switch" name="is_sunday" value="1" data-on-label="Open" data-off-label="Closed" id="is_sunday"  @if ($trading_unit['hub_setting']['is_sunday']==1) checked @endif  />
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="sunday_start_time" name="sunday_start_time" class="form-control" @if ($trading_unit['hub_setting']['is_sunday']==0) style="display: none;border-radius: 4px;" @else  style="border-radius: 4px;" @endif>
                                            <option value="none" selected="" disabled="">Select Start Time</option>

                                            @foreach ($hours as $hour)
                                            <option value="{{$hour}}" @if($trading_unit['hub_setting']['sunday_start_time']==$hour) selected @endif >{{$hour}}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select id="sunday_end_time" name="sunday_end_time" class="form-control" @if ($trading_unit['hub_setting']['is_sunday']==0) style="display: none;border-radius: 4px;" @else  style="border-radius: 4px;" @endif>
                                            <option value="none" selected="" disabled="">Select End Time</option>

                                            @foreach ($hours as $hour)
                                            <option value="{{$hour}}" @if($trading_unit['hub_setting']['sunday_end_time']==$hour) selected @endif >{{$hour}}</option>
                                            @endforeach


                                        </select>
                                    </div>
                                  </div>

                                    <p class="text-danger start_time" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>






                        </div>
                        <div class="footers">

                            <button type="button" onclick="submitDetailsForm()" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">Save</button>
                            <a href="{{redirect()->back()->getTargetUrl()}}"><button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">Cancel</button></a>



                        </div>
                    </form>
                </div>
            </div>















        </div>






    </div>
</div>


@endsection

@section('script')

<script src="/modules/admin/app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js"></script>
<script src="/modules/admin/app-assets/vendors/js/forms/toggle/switchery.min.js"></script>
<script src="/modules/admin/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js"></script>
<script src="/modules/admin/app-assets/js/scripts/forms/switch.js"></script>

<script>
    function submitDetailsForm() {


        let status=true;



       if(status==true){
        $("form").submit();
       }






    }
</script>

<script>
    $('#is_monday').change(function () {

        if ($(this).is(':checked')) {

            $('#monday_end_time').show();
            $('#monday_start_time').show();

        }else{
            $('#monday_end_time').hide();
            $('#monday_start_time').hide();
        }

 });
</script>
<script>
    $('#is_tuesday').change(function () {

        if ($(this).is(':checked')) {

            $('#tuesday_end_time').show();
            $('#tuesday_start_time').show();

        }else{
            $('#tuesday_end_time').hide();
            $('#tuesday_start_time').hide();
        }

 });
</script>
<script>
    $('#is_wednesday').change(function () {

        if ($(this).is(':checked')) {

            $('#wednesday_end_time').show();
            $('#wednesday_start_time').show();

        }else{
            $('#wednesday_end_time').hide();
            $('#wednesday_start_time').hide();
        }

 });
</script>
<script>
    $('#is_thursday').change(function () {

        if ($(this).is(':checked')) {

            $('#thursday_end_time').show();
            $('#thursday_start_time').show();

        }else{
            $('#thursday_end_time').hide();
            $('#thursday_start_time').hide();
        }

 });
</script>
<script>
    $('#is_friday').change(function () {

        if ($(this).is(':checked')) {

            $('#friday_end_time').show();
            $('#friday_start_time').show();

        }else{
            $('#friday_end_time').hide();
            $('#friday_start_time').hide();
        }

 });
</script>
<script>
    $('#is_saturday').change(function () {

        if ($(this).is(':checked')) {

            $('#saturday_end_time').show();
            $('#saturday_start_time').show();

        }else{
            $('#saturday_end_time').hide();
            $('#saturday_start_time').hide();
        }

 });
</script>
<script>
    $('#is_sunday').change(function () {

        if ($(this).is(':checked')) {

            $('#sunday_end_time').show();
            $('#sunday_start_time').show();

        }else{
            $('#sunday_end_time').hide();
            $('#sunday_start_time').hide();
        }

 });
</script>

@endsection

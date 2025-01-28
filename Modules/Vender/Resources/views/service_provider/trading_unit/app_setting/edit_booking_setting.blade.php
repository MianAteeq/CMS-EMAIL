@extends('vender::layouts.master')

@section('css_custom')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
#headingCollapse1:before {
    position: absolute;
    top: 48%;
    right: 20px;
    margin-top: -8px;
    font-family: 'feather';
    content: "\e845"!important;
    transition: all 300ms linear 0s;
}
#interval{
    width: 15%!important; border-radius: 4px;  margin-left: 2%; margin-right: 2%;
}
</style>

@endsection

@section('header')
<div class="content-header bg-white">
    <div class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12 bg-white headerbg" style="padding-left: 32px;padding-top: 13px;">
            <h3 class="h3">Trade unit information</h3>
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
                    <li class="breadcrumb-item"><a style="color: black" href="{{route('vender.service.provider.trading.unit.view',$trading_unit['id'])}}"> Overview</a>
                    </li>

                    <li class="breadcrumb-item"> Trade unit information
                    </li>
                    <li class="breadcrumb-item"> Edit Booking Setting
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
        <div style="border-radius: 7px;border: 2px solid black;  ">
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
            <a href="{{route('vender.service.provider.trading.unit.app.setting',$trading_unit['id'])}}"><h4 class="h3" style="border-radius: 7px; border: 2px solid #ff6600; padding: 10px; font-weight: 600; font-size: 17px; color: #ff6600;margin-left: 15px;"> App settings</h2></a>

                <a href="{{route('vender.service.provider.trading.unit.app.data',$trading_unit['id'])}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> App data </h2> </a>

                <a href="{{route('vender.service.provider.trading.unit.hub.setting',$trading_unit['id'])}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> Hub profile settings </h2> </a>


        </div>

        <div class="card default-collapse collapse-icon accordion-icon-rotate" style="box-shadow: none;margin-top: -6px;">




            <a id="headingCollapse1" href="{{redirect()->back()->getTargetUrl()}}" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="" href="#collaptr_businesss_info" aria-expanded="false" >
                <div class="card-title lead collapsed">Bookings settings</div>
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
                    <form action="{{route('vender.service.provider.trading.unit.booking.setting.submit')}}" id="contens" method="POST" enctype="multipart/form-data" id="contens"> @csrf
                        <div class="link-body"  style="padding: 10px">

                            <input type="hidden" name="id" value="{{$trading_unit['id']}}">

                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Booking start time * (?)</label>
                                <div class="col-md-8 mx-auto">
                                    <select id="start_time" name="start_time" class="form-control" style="width: 30%;border-radius: 4px;">
                                        <option value="none" selected="" disabled="">Select Start Time</option>

                                        @foreach ($hours as $hour)
                                        <option value="{{$hour}}"  @if($trading_unit['app_setting']!=null) @if($trading_unit['app_setting']['start_time']==$hour)  selected  @endif  @endif >{{$hour}}</option>
                                        @endforeach
                                        {{--
                                        <option value="1" @if ($app['start_time']==1) selected  @endif>On</option> --}}

                                    </select>
                                    <p class="text-danger start_time" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Booking time intervals (minutes) * (?)</label>
                                <div class="col-md-8 mx-auto">
                                   <div style="display: flex;">
                                    <i class="fa fa-minus" onclick="minusClick()" style=" margin-top: 2%; font-size: 17px;margin-left: 15px;"></i>
                                    <input type="text" id="interval" readonly="readonly" class="form-control" value="{{$trading_unit['app_setting']['interval']??10}}" onkeyup="lookup(this);" name="interval" placeholder="Interval" style="">
                                     <i class="fa fa-plus" onclick="plusClick()" style="margin-top: 2%; font-size: 17px;"></i>
                                   </div>
                                    {{-- <select id="interval" name="interval" class="form-control" style="width: 30%;border-radius: 4px;"> --}}
                                        {{-- <option value="none" selected="" disabled="">Select Time Interval</option>

                                        @for ($i=10;$i<=60;$i++)
                                        <option value="{{$i}}" @if($trading_unit['app_setting']!=null) @if($trading_unit['app_setting']['interval']==$i)  selected  @endif  @endif >{{$i}}</option>

                                        @php $i=$i+4;  @endphp

                                        @endfor --}}

                                        {{-- @foreach ($hours as $hour)

                                        @endforeach --}}
                                        {{--
                                        <option value="1" @if ($app['interval']==1) selected  @endif>On</option> --}}

                                    {{-- </select> --}}
                                    <p class="text-danger interval" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Booking End time * (?)</label>
                                <div class="col-md-8 mx-auto">
                                    <select id="end_time" name="end_time" class="form-control" style="width: 30%;border-radius: 4px;">


                                        @foreach ($hour_end_time as $hour)
                                        <option value="{{$hour}}"  @if($trading_unit['app_setting']!=null) @if($trading_unit['app_setting']['end_time']==$hour)  selected  @endif  @endif>{{$hour}}</option>
                                        @endforeach
                                        {{--
                                        <option value="1" @if ($app['end_time']==1) selected  @endif>On</option> --}}

                                    </select>
                                    <p class="text-danger end_time" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>





                        </div>
                        <div class="footers">

                            <button type="button" onclick="submitDetailsForm()" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">Save</button>
                            <a href="{{redirect()->back()->getTargetUrl()}}"><button type="button"  class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">Cancel</button></a>


                        </div>
                    </form>
                </div>
            </div>















        </div>






    </div>
</div>


@endsection

@section('script')
<script>
    function submitDetailsForm() {
        let array=['start_time','end_time','interval'];

        let status=false;
        array.some((item)=>{
            let name = $(`#${item}`).val();
            console.log(name,item);

            if(name===null){


                $(`#${item}`).attr('style','border:2px solid red!important;width: 30%;');




                return false;

                }
                else
                {

                $(`#${item}`).attr('style','border:2px solid black!important;width: 30%;');


                }
        });
        array.some((item)=>{
            let name = $(`#${item}`).val();
            console.log(name,item);

            if(name===null){


                $(`#${item}`).attr('style','border:2px solid red!important;width: 30%;');

                status=false;


                return true;

                }
                else
                {

                $(`#${item}`).attr('style','border:2px solid black!important;width: 30%;');
                status=true;

                }
        });



        // return;


       if(status==true){
        $("form").submit();
       }






    }
</script>

<script>
    function minusClick(){
        let value=$('#interval').val();

        if(value>10){
            let newValue=parseInt(value)-5;
            $('#interval').val(newValue);

            renderItem(newValue);
        }



    }

    function plusClick(){
        let value=$('#interval').val();

        if(value<60){
            let newValue=parseInt(value)+5;
            $('#interval').val(newValue);

            renderItem(newValue);
        }


    }

    function renderItem(value){

       let=startTime=$('#start_time').val();


        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
                    /* the route pointing to the post function */
                    url: `/hours/generate`,
                    type: 'POST',
                    /* send the csrf-token and the input to the controller */
                    data: {_token: CSRF_TOKEN, interval:value,startTime:startTime},
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                       let html=`<option value="none" selected="" id="end_time_append" disabled="">Select End Time</option>`;

                       data.hours.map((item)=>{
                        html+=`  <option value="${item}"  >${item}</option>`
                       });

                       $('#end_time').html(html);
                    }
                });

    }
    $('#start_time').on('change', function() {
        let=interval=$('#interval').val();


var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
            /* the route pointing to the post function */
            url: `/hours/generate`,
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {_token: CSRF_TOKEN, interval:interval,startTime:this.value},
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function (data) {
               let html=`<option value="none" selected="" id="end_time_append" disabled="">Select End Time</option>`;

               data.hours.map((item)=>{
                html+=`  <option value="${item}"  >${item}</option>`
               });

               $('#end_time').html(html);
            }
        });
});
</script>

<script>
//     $('form').submit(function(e) {
//     $(':disabled').each(function(e) {
//         $(this).removeAttr('disabled');
//     })
// });
</script>

@endsection

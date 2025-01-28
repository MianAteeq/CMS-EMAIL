@extends('vender::layouts.master')

@section('css_custom')

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
.form-control{
    width: 55%;
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
                    <li class="breadcrumb-item"> Edit Invoice Setting
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
                <div class="card-title lead collapsed">Invoice settings</div>
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
                    <form action="{{route('vender.service.provider.trading.unit.invoice.setting.submit')}}" id="contens" method="POST" enctype="multipart/form-data" id="contens"> @csrf
                        <div class="link-body"  style="padding: 10px">

                            <input type="hidden" name="id" value="{{$trading_unit['id']}}">
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Business Name Format *</label>
                                <div class="col-md-8 mx-auto">
                                    <p>
                                        @if(auth()->user()->profile['organization_status']==="Limited Company")
                                        @if($trading_unit['trading_template']==1)
                                        Registered company name
                                        @endif
                                        @if($trading_unit['trading_template']==2)
                                        Registered company name & trading name
                                        @endif
                                        @if($trading_unit['trading_template']==3)
                                        Trading name
                                        @endif

                                        @else
                                        @if($trading_unit['trading_template']==1)
                                        Registered sole trader name
                                        @endif
                                        @if($trading_unit['trading_template']==2)
                                        Registered sole trader name & trading name
                                        @endif
                                        @if($trading_unit['trading_template']==3)
                                        Trading name
                                        @endif

                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Business Name *</label>
                                <div class="col-md-8 mx-auto">
                                    <p>  @if($trading_unit['trading_template']==1)
                                        {{ucfirst(auth()->user()->profile->company_name)}}

                                        @endif
                                        @if($trading_unit['trading_template']==2)
                                        {{ucfirst(auth()->user()->profile->company_name)}} Trading as {{$trading_unit['trading_name']['name']}}

                                        @endif
                                        @if($trading_unit['trading_template']==3)
                                        {{ucfirst($trading_unit['trading_name']['name'])}}

                                        @endif</p>
                                </div>
                            </div>

                            <div class="form-group row" id="site_show" >
                                <label class="col-md-4 label-control" for="eventRegInput5">Address * (?)</label>
                                <div class="col-md-8 mx-auto">
                                    <select id="site_id" name="site_id" class="form-control" style="width: 55%;border-radius: 7px;">
                                        <option value="none" selected="" >Select Address</option>
                                        @foreach ($sites as $site)
                                        @if($trading_unit['app_setting']==null)
                                        <option value="{{$site['id']}}" >

                                        {{$site['address_line_1']}} {{$site['address_line_2']}} {{$site['address_line_3']}} {{$site['address_line_4']}}

                                        </option>
                                        @else

                                        <option value="{{$site['id']}}"  @if($site['id']===$trading_unit['app_setting']['site_id']) selected @endif >

                                            {{$site['address_line_1']}} {{$site['address_line_2']}} {{$site['address_line_3']}} {{$site['address_line_4']}}

                                        </option>


                                        @endif

                                        @endforeach


                                    </select>
                                    <p class="text-danger site_id" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Address Line One </label>
                                <div class="col-md-8 mx-auto">
                                    <input type="hidden" id="address_line_1" class="form-control address_line1" value="{{$trading_unit['app_setting']['address_line_1']??''}}" onkeyup="lookup(this);" name="address_line_1" placeholder="Address Line One *">
                                    <p class="address_line1">{{$trading_unit['app_setting']['address_line_1']??''}}</p>
                                    <p class="text-danger address_line_1" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Address Line Two  </label>
                                <div class="col-md-8 mx-auto">
                                    <input type="hidden" id="address_line_2" class="form-control address_line2" value="{{$trading_unit['app_setting']['address_line_2']??''}}"  name="address_line_2" placeholder="Address Line Two ">
                                    <p class="address_line2">{{$trading_unit['app_setting']['address_line_2']??''}}</p>
                                    <p class="text-danger address_line_2" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Address Line Three  </label>
                                <div class="col-md-8 mx-auto">
                                    <input type="hidden" id="address_line_3" class="form-control address_line3" value="{{$trading_unit['app_setting']['address_line_3']??''}}"  name="address_line_3" placeholder="Address Line Three">
                                     <p class="address_line3"> {{$trading_unit['app_setting']['address_line_3']??''}} </p>
                                    <p class="text-danger address_line_3" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Address Line Four  </label>
                                <div class="col-md-8 mx-auto">
                                    <input type="hidden" id="address_line_4" class="form-control address_line4" value="{{$trading_unit['app_setting']['address_line_4']??''}}"  name="address_line_4" placeholder="Address Line Four">
                                    <p class="address_line4">{{$trading_unit['app_setting']['address_line_4']??''}}</p>
                                    <p class="text-danger address_line_4" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">City / Town </label>
                                <div class="col-md-8 mx-auto">
                                    <input type="hidden" id="city" class="form-control cities" value="{{$trading_unit['app_setting']['city']??''}}" onkeyup="lookup(this);" name="city" placeholder="City / Town *">
                                    <p class="cities">{{$trading_unit['app_setting']['city']??''}}</p>
                                    <p class="text-danger city" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Postcode </label>
                                <div class="col-md-8 mx-auto">
                                    <input type="hidden" id="postcode" class="form-control postcodes" value="{{$trading_unit['app_setting']['postcode']??''}}" onkeyup="lookup(this);" name="postcode" placeholder="postcode *">
                                    <p class="postcodes">{{$trading_unit['app_setting']['postcode']??''}}</p>
                                    <p class="text-danger postcode" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Landline</label>
                                <div class="col-md-8 mx-auto">
                                    <input type="tel" id="landline" class="form-control" value="{{$trading_unit['app_setting']['landline']??''}}"  name="landline" placeholder="Landline">
                                    <p class="text-danger landline" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Mobile *</label>
                                <div class="col-md-8 mx-auto">
                                    <input type="tel" id="mobile" class="form-control" value="{{$trading_unit['app_setting']['mobile']??''}}" onkeyup="lookup(this);" name="mobile" placeholder="Mobile">
                                    <p class="text-danger mobile" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Email *</label>
                                <div class="col-md-8 mx-auto">
                                    <input type="email" id="email" class="form-control" value="{{$trading_unit['app_setting']['email']??''}}" onkeyup="lookup(this);" name="email" placeholder="email">
                                    <p class="text-danger email" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Website</label>
                                <div class="col-md-8 mx-auto">
                                    <input type="text" id="website" class="form-control" value="{{$trading_unit['app_setting']['website']??''}}" onkeyup="lookup(this);" name="website" placeholder="website">
                                    <p class="text-danger website" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">UK VAT Number *</label>
                                <div class="col-md-8 mx-auto">
                                    <p>{{auth()->user()->profile['uk_vat_no']}}</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Footer – Register Company name</label>
                                <div class="col-md-8 mx-auto">
                                    <input type="hidden" id="footer_business_name" disabled class="form-control" value="{{$trading_unit['app_setting']['footer_business_name']??auth()->user()->profile['company_name']}}" onkeyup="lookup(this);" name="footer_business_name" placeholder="Footer – Full business name">
                                    <p class="footer_business_name">{{$trading_unit['app_setting']['footer_business_name']??auth()->user()->profile['company_name']}}</p>
                                    <p class="text-danger footer_business_name" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Footer – Registered Office Address</label>
                                <div class="col-md-8 mx-auto">
                                    <input type="hidden" id="footer_office_address" disabled class="form-control" value=" {{auth()->user()['profile']['address_line_1']}} , {{auth()->user()['profile']['address_line_2']}} , {{auth()->user()['profile']['city']}}  , {{auth()->user()['profile']['postcode']}}" onkeyup="lookup(this);" name="footer_office_address" placeholder="Footer – Full business name">
                                    <p class="footer_office_address"> {{auth()->user()['profile']['address_line_1']}} @if(auth()->user()['profile']['address_line_2']!=null) , @endif {{auth()->user()['profile']['address_line_2']}} , {{auth()->user()['profile']['city']}}  , {{auth()->user()['profile']['postcode']}}</p>
                                    <p class="text-danger footer_office_address" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 label-control" for="eventRegInput5">Footer – Registered Company Number</label>
                                <div class="col-md-8 mx-auto">
                                    <input type="hidden" id="company_number" class="form-control" disabled value="{{$trading_unit['app_setting']['company_number']??auth()->user()->profile['registration_no']}}" onkeyup="lookup(this);" name="company_number" placeholder="Footer – Full business name">
                                    <p class="company_number">{{$trading_unit['app_setting']['company_number']??auth()->user()->profile['registration_no']}}</p>
                                    <p class="text-danger company_number" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
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
        let array=['address_line_1','city','postcode','email','mobile'];

        let status=false;
        array.some((item)=>{
            let name = $(`#${item}`).val();
            console.log(name,item);

            if(name===""){


                $(`#${item}`).attr('style','border:2px solid red!important;');




                return false;

                }
                else
                {

                $(`#${item}`).attr('style','border:2px solid black!important;');


                }
        });
        array.some((item)=>{
            let name = $(`#${item}`).val();
            console.log(name,item);

            if(name===""){


                $(`#${item}`).attr('style','border:2px solid red!important;');

                status=false;


                return true;

                }
                else
                {

                $(`#${item}`).attr('style','border:2px solid black!important;');
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
       }
       else{
           if (trading_name === "") {


           $(`#${id}`).attr("style", "border:2px solid red!important;margin-top: 5px ");
           status = false;

           } else {
           $(`#${id}`).attr("style", "border:2px solid black!important;margin-top: 5px;");
           $(`.${id}`).hide();
           }
       }














}
</script>

<script>
    $('#site_id').on('change', function() {

        let sites=@json($sites);

        let site=sites.filter((item)=>parseInt(item.id)===parseInt(this.value));

        console.log(site);

        if(site.length>0){
            $('.address_line1').val(site[0].address_line_1);
            $('.address_line2').val(site[0].address_line_2);
            $('.address_line3').val(site[0].address_line_3);
            $('.address_line4').val(site[0].address_line_4);
            $('.cities').val(site[0].city);
            $('.postcodes').val(site[0].postcode);

            $('.address_line1').text(site[0].address_line_1);
            $('.address_line2').text(site[0].address_line_2);
            $('.address_line3').text(site[0].address_line_3);
            $('.address_line4').text(site[0].address_line_4);
            $('.cities').text(site[0].city);
            $('.postcodes').text(site[0].postcode);
        }


});
</script>
@endsection

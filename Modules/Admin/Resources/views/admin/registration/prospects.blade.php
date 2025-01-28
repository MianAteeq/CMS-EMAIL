@extends('admin::admin.layout.app')

{{-- @section('header') --}}
@section('header')
<div class="content-header bg-white" >
    <div  class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12 bg-white headerbg" style="padding-left: 32px;padding-top: 13px;">
           <h3 class="h3">Prospects</h3>
           <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Business</a>
                </li>

                <li class="breadcrumb-item">Registrations
                </li>

                <li class="breadcrumb-item"><a style="color: black" href="{{route('admin.prospects')}}">Prospects</a>
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
        <h4 class="h3" style="border-radius: 7px;border: 2px solid black;padding: 10px;font-weight: 600;
        font-size: 17px; "> <img src="/home.png" style="width: 22px;margin-top: -5px;" > Business</h2>
    </div>
    <div class="col-md-9" style="">
        <div class="row ">
            <h4 class="h3" style="border-radius: 7px; border: 2px solid #ff6600; padding: 10px; font-weight: 600; font-size: 17px; color: #ff6600;"> Prospects</h2>
           <a href="{{route('admin.interests')}}"> <h4 class="h3" style="border-radius: 7px;border: 2px solid black;padding: 10px;font-weight: 600;font-size: 17px;margin-left: 10px  "> Interests</h2></a>
            <a href="{{route('admin.application')}}"><h4 class="h3" style="border-radius: 7px;border: 2px solid black;padding: 10px;font-weight: 600;font-size: 17px;margin-left: 10px  "> Applications</h2></a>
            <a href="{{route('admin.register')}}"><h4 class="h3" style="border-radius: 7px;border: 2px solid black;padding: 10px;font-weight: 600;font-size: 17px;margin-left: 10px  "> Registered</h2></a>

        </div>
        <!--/ eCommerce statistic -->



    </div>
</div>


@endsection

{{-- @endsection --}}

@extends('vender::layouts.master')

@section('css_custom')

<link rel="stylesheet" type="text/css" href="/modules/admin/app-assets/vendors/css/tables/datatable/datatables.min.css">
<style>
    .dataTables_wrapper .dataTables_length{
        display: none;
    }
    .dataTables_wrapper .dataTables_filter{

        display: none;
    }
    table.dataTable thead{
        background: #fafbfc;
    color: black;
    }
    .table-striped tbody tr:nth-of-type(odd) {
    background-color: white;
}
table.dataTable tbody td {
    padding: 8px 10px;
    padding-bottom: 2px;
    padding-top: 2px;
    font-size: 10px;
}
.dataTables_wrapper .dataTables_info{
    display: none;
}
table.dataTable tbody td {

    color: black;
}
table.dataTable thead th, table.dataTable thead td {
    padding: 10px 18px;
    border-bottom: 1px solid #111;
    font-size: 11px;
    padding-left: 8px;
    padding-right: 1px;
}
th {
    white-space: pre-line;
}
table.dataTable tfoot th, table.dataTable tfoot td {
    padding: 10px 18px 6px 18px;
    border-top: 1px solid #111;
    font-size: 10px;
    padding-right: 0px;
    padding-left: 8px;
    color: black;
}

#headingCollapse14:before {
    position: absolute;
    top: 48%;
    right: 20px;
    margin-top: -8px;
    font-family: 'feather';
    content: "\e843";
    transition: all 300ms linear 0s;
}
.collapse-icon [data-toggle="collapse"]:before {
    position: absolute;
    top: 48%;
    right: 20px;
    margin-top: -8px;
    font-family: 'feather';
    content: "\e842";
    transition: all 300ms linear 0s;
}
.collapse-icon [data-toggle="collapse"]:after {
    position: absolute;
    top: 48%;
    right: 20px;
    margin-top: -8px;
    font-family: 'feather';
    content: "\e845";
    transition: all 300ms linear 0s;
}
 .collapsed{
    border-bottom-left-radius: 0px !important;border-bottom-right-radius: 0px !important;
}
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
.form-control {

border: 2px solid black!important;
height: calc(1em + 1.4rem + 0px);
border-radius: 7px;
width: 60%;

}
.form-btn{
text-align: left; /* opacity: -0.5; */ color: #babfcc; width: 37%; padding: 7px; padding-left: 14px;float: left;
}
.view-btn{
float: left;
margin-top: 0px;
padding: 9px;
margin-left: 10px;
background-color: #ff822f !important;
border-color: #ff822f !important;
}
body{
color: black;
}
.view-btn-black {
/* float: left; */
margin-top: 0px;
padding: 9px;
margin-left: 10px;
background-color: black !important;
border-color: black !important;
}
.form-control:focus {
color: #4e5154;
background-color: #fff;
border-color: black;
outline: 0;
box-shadow: none;
}
body.vertical-layout.vertical-menu.menu-expanded .main-menu {
width: 274px;
transition: 300ms ease all;
backface-visibility: hidden;
}
body.vertical-layout.vertical-menu.menu-expanded .content, body.vertical-layout.vertical-menu.menu-expanded .footer {
margin-left: 274px;
/* background-color: white; */
}
input:focus:required:invalid {border: 2px solid red;}
input:required:valid { border: 2px solid black; }
</style>
@endsection

@section('header')
<div class="content-header bg-white" >
    <div  class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12 bg-white headerbg" style="padding-left: 32px;padding-top: 13px;">
           <h3 class="h3">Add new trade unit</h3>
           <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Products</a>
                </li>
                <li class="breadcrumb-item"><a style="color: black" href="{{route('vender.service.provider')}}">Service Provider</a>
                </li>
                <li class="breadcrumb-item"><a style="color: black" href="{{route('vender.service.provider.trading.unit')}}">Trade Units</a>
                </li>



                <li class="breadcrumb-item">Add new trade unit
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
        <img src="/trading_unit.png" style="width: 22px;margin-top: -5px;" > New trade unit
        </h4>

        </div>
    </div>
    <div class="col-md-9"  style="border: 2px solid black;border-radius: 6px;margin-bottom: 10px;padding-left: 0;padding-right: 0;">
        <div class="row" style="margin-right: 0;margin-left: 0;">
            <div class="col-md-12" style="border-bottom: 2px solid black;">
             <h3 style="font-size: 20px; padding: 10px; margin-left: -11px; color: black;padding-bottom: 0px;">Trade unit information</h3>
            </div>


         </div>
         <form action="{{route('vender.service.provider.trading.unit.store')}}" id="contens" method="POST" enctype="multipart/form-data" id="contens" style="height: 469px;"> @csrf
            <div class="link-body"  style="padding: 10px">

                <div class="form-group row">
                    <label class="col-md-4 label-control" for="eventRegInput5">Trade unit name * (?)</label>
                    <div class="col-md-8 mx-auto">
                        <input type="text" id="name" class="form-control" value="" onkeyup="lookup(this);" name="name" placeholder="Trade unit name">
                        @if($errors->has('name'))

                            <p class="text-danger name" style="padding-left: 10px;width:100%;margin-bottom: -8px;">{{ $errors->first('name') }}</p>
                            @else
                            <p class="text-danger name" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 label-control" for="eventRegInput5">Business Name Format * (?)</label>
                    <div class="col-md-8 mx-auto">
                        <select id="trading_template" name="trading_template" class="form-control" onkeyup="lookup(this);" style="width: 60%;border-radius: 7px;">
                            <option value="none" selected="" disabled="">Select Business Name Format</option>
                            {{-- <option value="1" >Registered company name</option>
                            <option value="2">Registered company name & trading name</option>
                            <option value="3">Trading name</option> --}}
                            @if(auth()->user()->profile['organization_status']==="Limited Company")

                            <option value="1" >Registered company name only</option>
                            <option value="2"  >Registered company name & trading name</option>
                            <option value="3" >Trading name only</option>

                            @else

                            <option value="1" >Registered sole trader name</option>
                            <option value="2" >Registered sole trader name & trading name</option>
                            <option value="3" >Trading name only</option>


                            @endif


                        </select>
                        <p class="text-danger trading_template" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                    </div>
                </div>
                <div class="form-group row" id="trading_name" style="display: none">
                    <label class="col-md-4 label-control" for="eventRegInput5">Trading name * (?)</label>
                    <div class="col-md-8 mx-auto">
                        <select id="trading_name_id" name="trading_name_id" class="form-control" onkeyup="lookup(this);" style="width: 60%;border-radius: 7px;">
                            <option value="none" selected="" disabled="">Select Trading Name</option>
                            @foreach ($trading_names as $name)

                            @if($name['is_change']==0)
                            <option value="{{$name['id']}}">{{$name['name']}}</option>

                            @endif

                            @endforeach


                        </select>
                        <p class="text-danger trading_name_id" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                    </div>
                </div>
                <div class="form-group row " id="company_name" >
                    <label class="col-md-4 label-control" for="eventRegInput5">Business Name</label>
                    <div class="col-md-8 mx-auto">
                        {{-- <input type="text" id="company" class="form-control"   value="{{auth()->user()->profile->company_name}}" disabled onkeyup="lookup(this);"  placeholder="Company Name"> --}}
                        <p  class="company_show">< Select Business Name Format ></p>
                        <p class="text-danger company" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>

                    </div>
                </div>

                <div class="form-group row" >
                    <label class="col-md-4 label-control">How do you provide and offer your services? * (?)
                        </label>
                    <div class="col-md-8 mx-auto">
                        <div class="input-group">
                            <div class="d-inline-block custom-control custom-radio mr-1">
                                <input type="radio" name="operation_type" value="On-site"  class="custom-control-input" @if($user['profile']['operation_type']=="On-site") checked @endif id="On-site">
                                <label class="custom-control-label" for="On-site">On-site</label>
                            </div>
                            <div class="d-inline-block custom-control custom-radio">
                                <input type="radio" name="operation_type" class="custom-control-input" value="Mobile" @if($user['profile']['operation_type']=="Mobile") checked @endif id="Mobile">
                                <label class="custom-control-label" for="Mobile">Mobile</label>
                            </div>
                            <div class="d-inline-block custom-control custom-radio" style="margin-left: 15px ">
                                <input type="radio" name="operation_type" class="custom-control-input" value="Both" @if($user['profile']['operation_type']=="Both") checked @endif id="Both (On-site and Mobile)">
                                <label class="custom-control-label" for="Both (On-site and Mobile)">Both (On-site and Mobile)</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row" id="site_show" @if($user['profile']['operation_type']!="On-site") style="display: none" @endif>
                    <label class="col-md-4 label-control" for="eventRegInput5">Address * (?)</label>
                    <div class="col-md-8 mx-auto">
                        <select id="site_id" name="site_id" class="form-control" style="width: 60%;border-radius: 7px;">
                            <option value="none" selected="" disabled="">Select Address</option>
                            @foreach ($sites as $site)
                            <option value="{{$site['id']}}">{{$site['address_line_1']}} {{$site['address_line_2']}}</option>

                            @endforeach


                        </select>
                        <p class="text-danger site_id" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                    </div>
                </div>
                <div class="form-group row mobile_show"  @if($user['profile']['operation_type']!="Mobile") style="display: none" @endif>
                    <label class="col-md-4 label-control" for="eventRegInput5">Mobile city / town * (?) </label>
                    <div class="col-md-8 mx-auto">
                        <input type="text" id="city" class="form-control"   value="" onkeyup="lookup(this);" name="city" placeholder="Mobile city / town">
                        <p style="display: none" class="city_show"></p>
                        <p class="text-danger city" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>

                    </div>
                </div>
                <div class="form-group row mobile_show"  @if($user['profile']['operation_type']!="Mobile") style="display: none" @endif>
                    <label class="col-md-4 label-control" for="eventRegInput5">Mobile postcode * (?) </label>
                    <div class="col-md-8 mx-auto">
                        <input type="text" id="postcode" class="form-control"  value="" onkeyup="lookup(this);" name="postcode" placeholder="Mobile postcode">
                        <p style="display: none" class="postcode_show"></p>
                        <p class="text-danger postcode" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>

                    </div>
                </div>
                <div class="form-group row mobile_show" @if($user['profile']['operation_type']!="Mobile") style="display: none" @endif>
                    <label class="col-md-4 label-control" for="eventRegInput5">Mobile distance / radius (miles) * (?) </label>
                    <div class="col-md-8 mx-auto">
                        <input type="text" id="radius" class="form-control"  value="" onkeyup="lookup(this);" name="radius"  placeholder="Mobile distance">
                        <p class="text-danger radious" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>

                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-4 label-control" for="eventRegInput5">Mobile * </label>
                    <div class="col-md-8 mx-auto">
                        <input type="tel" id="mobile" class="form-control" value="" onkeyup="lookup(this);" name="mobile" placeholder="Mobile">
                        <p class="text-danger mobile" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 label-control" for="eventRegInput5">Landline * </label>
                    <div class="col-md-8 mx-auto">
                        <input type="tel" id="landline" class="form-control" value="" onkeyup="lookup(this);" name="landline" placeholder="Landline">
                        <p class="text-danger landline" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 label-control" for="eventRegInput5">Email * </label>
                    <div class="col-md-8 mx-auto">
                        <input type="email" id="email" class="form-control" value="" onkeyup="lookup(this);" name="email" placeholder="Email">
                        <p class="text-danger email" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">Invalid Email !</p>
                        @if($errors->has('email'))

                            <p class="text-danger email" style="padding-left: 10px;width:100%;margin-bottom: -8px;">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                </div>



            </div>
            <div class="footers">

                <button type="button" onclick="submitDetailsForm()" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">Save</button>
                <a href="{{redirect()->back()->getTargetUrl()}}"> <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">Cancel</button></a>


            </div>
        </form>
    </div>
</div>


@endsection


@section('script')
<script src="/modules/admin/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
{{-- <script src="/modules/admin/app-assets/js/scripts/tables/datatables/datatable-basic.js"></script> --}}


<script>
    oTable = $('.zero-configuration').DataTable({
        "bPaginate" : $('.zero-configuration tbody tr').length>10,
        "iDisplayLength": 10,
        "bAutoWidth": false,
        "ordering": false,

    });   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
    $('#myInputTextField').keyup(function(){
        oTable.search($(this).val()).draw() ;
    })
</script>

<script>
    $(document).ready(function() {
    var contentHeight = $('#contens').height();
    $('#contens').height(contentHeight);
});
</script>

<script>
    $(document).ready(function() {
    var contentHeight = $('#contens').height();
    $('#contens').height(contentHeight);
});
</script>
<script>
    $('.form-btn').click(function () {
        $('input[type=file]').trigger('click');
    });

</script>
<script>
    $('input[type=radio]').change(function () {

        if (this.value == 'Mobile') {

           $('.mobile_show').show();
           $('#site_show').hide();
           $('#city').show();
            $('.city_show').hide();
            $('#postcode').show();
            $('.postcode_show').hide();

        }else if(this.value == 'On-site'){
            $('.mobile_show').hide();
            $('#site_show').show();
            $('#city').show();
            $('.city_show').hide();
            $('#postcode').show();
            $('.postcode_show').hide();
        }
        else {
            $('.mobile_show').show();
            $('#site_show').show();
            $('#city').hide();
            $('.city_show').show();
            $('#postcode').hide();
            $('.postcode_show').show();
        }
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
            $(`#proof_of_main_contact`).attr('style','border:2px solid black!important');
        });
    });

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
    function submitDetailsForm() {


        let status=false;



       let operation_type=$('input[type=radio]:checked').val();
       let array=[];

       if(operation_type==="Mobile"){
        if($('#trading_template').val()==1){
            array=['name','mobile','email','city','postcode','radius'];

        }else{

            array=['name','trading_name_id','mobile','email','city','postcode','radius'];
        }


        array.some((item)=>{
            let name = $(`#${item}`).val();


            if(name==="" || name===null){


                $(`#${item}`).attr('style','border:2px solid red!important');



                }
                else
                {

                $(`#${item}`).attr('style','border:2px solid black!important');
                status=true;

                }
        });
        array.some((item)=>{
            let name = $(`#${item}`).val();
            console.log(name,item);

            if(name==="" || name===null){


                $(`#${item}`).attr('style','border:2px solid red!important');

                status=false;


                return true;

                }
                else
                {

                $(`#${item}`).attr('style','border:2px solid black!important');
                status=true;

                }
        });
       }
       else if(operation_type==="On-site"){


        if($('#trading_template').val()==1){
            array=['name','mobile','email','city','site_id'];

        }else{

            array=['name','trading_name_id','mobile','email','city','site_id'];
        }

        array.some((item)=>{
            let name = $(`#${item}`).val();


            if(name==="" || name===null){


                $(`#${item}`).attr('style','border:2px solid red!important');



                }
                else
                {

                $(`#${item}`).attr('style','border:2px solid black!important');
                status=true;

                }
        });
        array.some((item)=>{
            let name = $(`#${item}`).val();
            console.log(name,item);

            if(name==="" || name===null){


                $(`#${item}`).attr('style','border:2px solid red!important');

                status=false;


                return true;

                }
                else
                {

                $(`#${item}`).attr('style','border:2px solid black!important');
                status=true;

                }
        });


       }else{


        if($('#trading_template').val()==1){
            array=['site_id','radius','name','mobile','email','radius'];

        }else{

            array=['site_id','radius','name','trading_name_id','mobile','email','radius'];
        }


array.some((item)=>{
    let name = $(`#${item}`).val();
    console.log(name,item);

    if(name==="" || name===null){


        $(`#${item}`).attr('style','border:2px solid red!important');






        }
        else
        {

        $(`#${item}`).attr('style','border:2px solid black!important');


        }
});
array.some((item)=>{
    let name = $(`#${item}`).val();
    console.log(name,item);

    if(name==="" || name===null){


        $(`#${item}`).attr('style','border:2px solid red!important');

        status=false;


        return true;

        }
        else
        {

        $(`#${item}`).attr('style','border:2px solid black!important');
        status=true;

        }
});



       }

       console.log(status,"status");



       let email = $(`#email`).val();

console.log(validateEmail(email));

if(validateEmail(email)===null){
    $(`#email`).attr('style','border:2px solid red!important');
    $('.email').show();
    return false;
}


       if(status==true){
        $("form").submit();
       }






    }
</script>

<script>
    $('#trading_template').on('change', function() {

       $id=this.value;

       if($id==1){
        $('#company_name').show();
        $('#trading_name').hide();
         showCompanyName();
         }
   if($id==2){
           $('#company_name').show();
           $('#trading_name').show();
           showCompanyTradingName();

       }

    if($id==3){
        // $('#company_name').hide();
        $('#trading_name').show();

        showTradingName();
       }


});
    $('#trading_name_id').on('change', function() {

       $id=this.value;
       let company_name=@json(auth()->user()->profile->company_name)

       let  trading_names=@json($trading_names).filter((item)=>item.id==$id);
           console.log(trading_names);

           if(trading_names.length>0){


               if($('#trading_template').val()==2){
                //    alert($('#trading_template').val());

                trading_name=`trading as ${trading_names[0].name}`;
                $('.company_show').text(`${company_name} ${trading_name}`);
            }
            if($('#trading_template').val()==3){

                trading_name=`${trading_names[0].name}`;
                $('.company_show').text(`${trading_name}`);
            }


           }



});
</script>
<script>
    $('#site_id').on('change', function() {

        let sites=@json($sites);

        let site=sites.filter((item)=>parseInt(item.id)===parseInt(this.value));

        if(site.length>0){
            $('#city').val(site[0].city);
            $('.city_show').text(site[0].city);
            $('#postcode').val(site[0].postcode);
            $('.postcode_show').text(site[0].postcode);
        }


});
</script>

<script>
      const validateEmail = (email) => {
  return String(email)
    .toLowerCase()
    .match(
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};
</script>

<script>
    function showCompanyName(){

        let company_name=@json(auth()->user()->profile->company_name)

        $('.company_show').text(company_name);
    }
    function showCompanyTradingName(){

        let company_name=@json(auth()->user()->profile->company_name);

        let trading_id=$('#trading_name_id').val();
        let trading_name=`< Select Trading Name >`;
        if(trading_id!==null){

           let  trading_names=@json($trading_names).filter((item)=>item.id==trading_id);
           console.log(trading_names);

           if(trading_names.length>0){
            trading_name=`trading as ${trading_names[0].name}`;
           }
        }else{

            trading_name=`trading as < Select Trading Name >`;

        }


        $('.company_show').text(`${company_name} ${trading_name}`);
    }
    function showTradingName(){

        let company_name=@json(auth()->user()->profile->company_name);

        let trading_id=$('#trading_name_id').val();
        let trading_name=`< Select Trading Name >`;
        if(trading_id!==null){

           let  trading_names=@json($trading_names).filter((item)=>item.id==trading_id);
           console.log(trading_names);

           if(trading_names.length>0){
            trading_name=`${trading_names[0].name}`;
           }
        }else{

            trading_name=`< Select Trading Name >`;

        }


        $('.company_show').text(`${trading_name}`);
    }
</script>

@endsection

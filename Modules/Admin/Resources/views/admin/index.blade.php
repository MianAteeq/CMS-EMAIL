@extends('admin::admin.layout.app')

@section('css_custom')
<link rel="stylesheet" type="text/css"
    href="{{URL::to('modules/admin/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{URL::to('modules/admin/app-assets/css/core/colors/palette-gradient.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{URL::to('modules/admin/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('modules/admin/app-assets/vendors/css/charts/morris.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::to('modules/admin/app-assets/fonts/simple-line-icons/style.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{URL::to('modules/admin/app-assets/css/core/colors/palette-gradient.css')}}">
@endsection

@section('header')
<div class="content-header bg-white" >
    <div  class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12 bg-white headerbg" style="padding-left: 32px;padding-top: 13px;">
           <h3 class="h3">Dashboard</h3>
           <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Link Moto</a>
                </li>

                <li class="breadcrumb-item">Home
                </li>
            </ol>
        </div>
        </div>

    </div>
</div>
@endsection
@section('content')
{{-- <div  class="row" style="border-bottom: 3px solid #949494;">
    <div class="col-xl-12 col-12">
       <h3 >DashBoard</h3>
    </div>

</div> --}}
<div class="row">
    <div class="col-md-3">
        <h4 class="h3" style="border-radius: 7px;border: 2px solid black;padding: 10px;font-weight: 600;
        font-size: 17px; "> <img src="/home.png" style="width: 22px;margin-top: -5px;" > Dashboard</h2>
    </div>
    <div class="col-md-9" style="border: 2px solid black;
    border-radius: 6px;
    margin-bottom: 10px;">
        <div class="row mt-2">
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="info">{{ $total_jobs }}</h3>
                                    <h6>Total No of Jobs</h6>
                                </div>
                                <div>
                                    <i class="icon-briefcase info font-large-2 float-right"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="warning"> {{ $total_work_shop }}</h3>
                                    <h6>Total No of Workshops</h6>
                                </div>
                                <div>
                                    <i class="icon-pie-chart warning font-large-2 float-right"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="success">0</h3>
                                    <h6>Total no of users</h6>
                                </div>
                                <div>
                                    <i class="icon-user-follow success font-large-2 float-right"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="danger">£ {{ $total_earnings }}</h3>
                                    <h6>Total no of business generated (current month)</h6>
                                </div>
                                <div>
                                    <i class="icon-wallet danger font-large-2 float-right"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="danger">{{ $subscribers }}</h3>
                                    <h6>Total new subscriptions (current month)</h6>
                                </div>
                                <div>
                                    <i class="icon-user-following danger font-large-2 float-right"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="danger">{{ $complete_jobs }}</h3>
                                    <h6>No of jobs completed </h6>
                                </div>
                                <div>
                                    <i class="icon-briefcase danger font-large-2 float-right"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-12">
                <div class="card pull-up">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3 class="danger">£ {{ $total_earnings }}</h3>
                                    <h6> Earnings </h6>
                                </div>
                                <div>
                                    <i class="icon-wallet danger font-large-2 float-right"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ eCommerce statistic -->
<div class="row">
    <div class="col-12 col-md-12">
        <div class="card">
            <div class="card-header ml-2">
                <h1 class="display-4">£ {{ $total_earnings }}</h1>
                <span class="text-muted">Total Earning</span>
            </div>
            <div class="card-content">
                <div class="earning-chart position-relative">


                   <div id="chartContainer" class="mb-2 mt-2" style="height: 370px; width: 100%;"></div>
                    {{-- <div class="chart-stats position-absolute position-bottom-0 position-right-0 mb-2 mr-3">
                        <a href="#" class="btn round btn-info mr-1">Statistics <i class="ft-bar-chart"></i></a> <span
                            class="text-muted">for the <a href="javscript:void(0)" class="warning darken-2">This
                                Month.</a></span>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div id="recent-sales" class="col-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recent Quotations</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li>
                            <a class="btn btn-info" href="{{route('admin.jobs')}}" target="_blank">View all</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-content mt-1">
                <div class="table-responsive">
                    <table id="recent-orders" class="table table-hover table-xl mb-0">
                        <thead>
                            <tr>
                                <th class="border-top-0">Quotation No</th>
                                <th class="border-top-0">Customers</th>
                                <th class="border-top-0">Job Type</th>
                                <th class="border-top-0">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($quotations as $quotation)
                            <tr>
                                <td class="text-truncate">{{ $quotation['quotation_no'] }}</td>
                                <td class="text-truncate p-1">
                                    {{ $quotation['contact_detail']['name']??'No Customer' }}
                                </td>
                                <td>
                                    <button type="button" class="btn btn-info btn-outline-success round">{{ $quotation['service']['name']??'No Service' }}</button>
                                </td>
                                <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>
                                    {{ $quotation['status'] }}</td>

                            </tr>

                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Recent Transactions -->
<div class="row">
    <div id="recent-transactions" class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recent Invoices</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>

            </div>
            <div class="card-content">
                <div class="table-responsive">
                    <table id="recent-orders" class="table table-hover table-xl mb-0">
                        <thead>
                            <tr>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0">Invoice#</th>
                                <th class="border-top-0">Customer Name</th>

                                <th class="border-top-0">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $invoice)
                            <tr>
                                <td class="text-truncate"><i class="la la-dot-circle-o success font-medium-1 mr-1"></i>
                                    {{ $invoice['status'] }}</td>
                                <td class="text-truncate"><a href="#">{{ $invoice['invoice_no'] }}</a></td>
                                <td class="text-truncate">

                                    <span>{{ $invoice['booking']['contact_detail']['name']??'' }}.</span>
                                </td>


                                <td class="text-truncate">£ {{ $invoice['total'] }}</td>
                            </tr>

                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Recent Transactions -->
    </div>
</div>







@endsection
@section("scripts_lib")

<script src="{{ URL::to('modules/admin/app-assets/vendors/js/charts/chart.min.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/charts/raphael-min.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/charts/morris.min.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js') }}">
</script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js') }}">
</script>
<script src="{{ URL::to('modules/admin/app-assets/data/jvector/visitor-data.js') }}"></script>
<!-- BEGIN: Page Vendor JS-->
<!-- BEGIN: Page JS-->
{{-- <script src="{{asset('/modules/admin/app-assets/js/scripts/pages/dashboard-sales.js')}}"></script> --}}
<!-- END: Page JS-->
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
<script>
   let value= @json($earningValue);
   let labels= @json($earningLabels);


   let dataArray=[];

   labels.forEach((item,i)=>{
    console.log(item,i);

    let obj={
        x:new Date(item),
        y:value[i]
    };
    dataArray.push(obj);
   });
   console.log(dataArray);
    window.onload = function () {

var options = {
	animationEnabled: true,
	title:{
		text: "Monthly Sales Chart"
	},
	axisX: {
		valueFormatString: "DD MMM "
	},
	axisY: {
		title: "Sales (in £)",
		prefix: "£"
	},
	data: [{
		yValueFormatString: "$#,###",
		xValueFormatString: "DD MMM",
		type: "area",
		dataPoints:dataArray,
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>

@endsection

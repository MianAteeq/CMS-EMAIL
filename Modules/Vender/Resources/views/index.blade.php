@extends('vender::layouts.master')
@section('header')
<div class="content-header bg-white" >
    <div  class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12 bg-white headerbg" style="padding-left: 32px;padding-top: 13px;">
           <h3 class="h3">Dashboard</h3>
           <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Business</a>
                </li>

                <li class="breadcrumb-item">Dashboard
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
        font-size: 17px; "> <img src="/home.png" style="width: 22px;margin-top: -5px;" > Business Dashboard</h2>

    </div>
    <div class="col-md-9" style="border: 2px solid black;
    border-radius: 6px;
    margin-bottom: 10px;">
        <!-- eCommerce statistic -->
<div class="row mt-2" >
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="warning">{{ count($news_jobs) }}</h3>
                            <h6>New Jobs</h6>
                        </div>
                        <div>
                           <img src="{{ URL::to('assets/icons/newjobs.png') }}" alt="">
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <h3 class="danger">{{ $inprocess_jobs->count() }}</h3>
                            <h6>In Process Jobs</h6>
                        </div>
                        <div>
                            <img src="{{ URL::to('assets/icons/Prossesingjob.png') }}" alt="">
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <h3 class="danger">{{ $completed_jobs->count() }}</h3>
                            <h6>Complete Jobs</h6>
                        </div>
                        <div>
                          <img src="{{ URL::to('assets/icons/jobdone.png') }}" alt="">
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <h3 class="success">£ {{ $invoice_paid }}</h3>
                            <h6>Total Earnings</h6>
                        </div>
                        <div>
                           <img src="{{ URL::to('assets/icons/totalearning.png') }}" alt="">
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card pull-up">
            <div class="card-content">
                <div class="card-body">
                    <div class="media d-flex">
                        <div class="media-body text-left">
                            <h3 class="warning">{{ count($total_contacts) }}</h3>
                            <h6>Contacts</h6>
                        </div>
                        <div>
                           <img src="{{ URL::to('assets/icons/Clients.png') }}" alt="">
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <h3 class="danger">{{ count($total_vehicles) }}</h3>
                            <h6>Vehicles</h6>
                        </div>
                        <div>
                          <img src="{{ URL::to('assets/icons/totalcars.png') }}" alt="">
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <h3 class="danger">0</h3>
                            <h6>Invoices</h6>
                        </div>
                        <div>
                          <img src="{{ URL::to('assets/icons/invoicing.png') }}" alt="">
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <h3 class="success">{{ $quotations->count() }}</h3>
                            <h6>Quotes</h6>
                        </div>
                        <div>
                           <img src="{{ URL::to('assets/icons/quotes.png') }}" alt="">
                        </div>
                    </div>
                    <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
                        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ eCommerce statistic -->

<!-- Products sell and New Orders -->
<div class="row match-height">
    <div class="col-xl-12 col-12" id="ecommerceChartView">
        <div class="card card-shadow">
           <div id="chartContainer" class="p-1" style="height: 300px; width: 100%;"></div>
        </div>
    </div>

</div>
<!--/ Products sell and New Orders -->

<!-- Recent Transactions -->
<div class="row">
    <div id="recent-transactions" class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recent Transactions</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a class="btn btn-sm btn-danger box-shadow-2 round btn-min-width pull-right" href="" target="_blank">Invoice Summary</a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div class="table-responsive">
                    <table id="recent-orders" class="table table-hover table-xl mb-0">
                        <thead>
                            <tr>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0">Invoice#</th>
                                <th class="border-top-0">Customer Name</th>
                                <th class="border-top-0">Products</th>
                                <th class="border-top-0">Amount</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($transactions as $transaction)
                            @if(isset($transaction['invoice']))

                            <tr>
                                <td>{{ $transaction['invoice']['status'] }}</td>
                                <td>{{ $transaction['invoice']['invoice_no'] }}</td>
                                <td>{{ $transaction['invoice']['booking']['contact_detail']['name'] }}</td>
                                <td>{{ $transaction['invoice']['booking']['service_type'] }}</td>
                                <td>£ {{ $transaction['amount'] }}</td>
                            </tr>
                            @endif

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>


@endsection

@section('scripts_lib')

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script>
        window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
    	animationEnabled: true,
    	theme: "light2", // "light1", "light2", "dark1", "dark2"
    	title:{
    		text: "Booking Chart"
    	},
    	axisY: {
    		title: "Total Booking"
    	},
    	data: [{
    		type: "column",
    		showInLegend: true,
    		legendMarkerColor: "grey",
    		legendText: "Booking Chart",
    		dataPoints: [
    			{ y: @json($news_jobs->count()), label: "PENDING",color: "#808080" },
    			{ y: @json($inprocess_jobs->count()),  label: "INPROGRESS",color: "#ff7216" },
    			{ y: @json($cancel_jobs->count()),  label: "CANCELLED",color: "red" },
    			{ y: @json($completed_jobs->count()),  label: "COMPLETED",color: "#42ba96" },

    		]
    	}]
    });
    chart.render();

    }
    </script>
    <!-- END: Page JS-->
@endsection

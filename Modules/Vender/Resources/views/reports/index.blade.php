@extends('vender::layouts.master')
@section('content')

<section class="users-list-wrapper">
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="danger">£ {{ $total_earning }}</h3>
                                <h6>Total Earning</h6>
                            </div>
                            <div>
                                <img src="{{ URL::to('assets/icons/totalearning.png') }}" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="danger">£ {{ $monthly_earning }}</h3>
                                <h6>Monthly Earning</h6>
                            </div>
                            <div>
                                <img src="{{ URL::to('assets/icons/totalearning.png') }}" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="danger">£ {{ $today_earning }}</h3>
                                <h6>Today Earning</h6>
                            </div>
                            <div>
                                <img src="{{ URL::to('assets/icons/totalearning.png') }}" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="users-list-filter px-1">
        <form method="GET" action="{{ route('vender.report.search') }}">
            <div class="row border border-light rounded py-2 mb-2">

                <div class="col-12 col-sm-6 col-lg-3">
                    <label for="users-list-verified">Invoice No</label>

                    <input type="text" class="form-control" name="invoice_no" placeholder="Invoice #">

                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <label for="users-list-verified">Vehicle</label>

                    <input type="text" class="form-control" name="vehicle_no" placeholder="Vehicle #">

                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <label for="users-list-status">Status</label>
                    <fieldset class="form-group">
                        <select class="form-control"  name="status">
                            <option value="ALL">ALL</option>
                            <option value="DUE">Due</option>
                            <option value="PAID">Paid</option>

                        </select>
                    </fieldset>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                    <button class="btn btn-block btn-primary glow">Show</button>
                </div>
            </div>
        </form>
    </div>
    <div class="users-list-table">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <!-- datatable start -->
                    <div class="table-responsive">
                        <table id="users-list-datatable" class="table">
                            <thead>
                                <tr>
                                    <th>Sr #</th>
                                    <th>Invoice #</th>
                                    <th>Client</th>
                                    <th>Vehicle </th>
                                    <th>Sub Total </th>
                                    <th>Total</th>
                                    <th>Time Stamp</th>
                                    <th>Status</th>
                                   

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invoices as $invoice )
                                <tr>
                                    <td> {{ $loop->iteration }}</td>
                                    <td> {{ $invoice['invoice_no'] }} </td>
                                    <td>{{ $invoice['booking']['contact_detail']['name'] }}</td>
                                    <td>{{ $invoice['booking']['vehicle']['vrm'] }} {{ $invoice['booking']['vehicle']['vin_number'] }}</td>
                                    <td>£ {{ $invoice['sub_total'] }}</td>
                                    <td>£ {{ $invoice['total'] }}</td>
                                    <td>{{\Carbon\Carbon::parse($invoice->created_at)->format('D m Y') }}</td>
                                    @if($invoice['status']=="PENDING")

                                    <td><span class="badge badge-primary" style="background-color: #f26622  !important">{{ $invoice['status'] }}</span></td>
                                    @else
                                    <td><span class="badge badge-light">{{ $invoice['status'] }}</span></td>

                                    @endif


                                  
                                    <td><a  href="{{route('vender.print.invoices',$invoice['id'])}}"><i class="la la-eye"></i></a>
                                    </td>
                                </tr>
                                    
                                @endforeach
                                
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- datatable ends -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('css_lib')

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/vendors/css/vendors.min.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/vendors/css/tables/datatable/datatables.min.css">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/colors.css">
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/components.css">
<!-- END: Theme CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/css/core/menu/menu-types/horizontal-menu.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/css/core/colors/palette-gradient.css">
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/pages/page-users.css">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
<!-- END: Custom CSS-->

@endsection
@section('scripts_lib')
<!-- BEGIN: Vendor JS-->
<script src="{{asset('/modules/vender')}}/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('/modules/vender')}}/app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="{{asset('/modules/vender')}}/app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
<script src="{{asset('/modules/vender')}}/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('/modules/vender')}}/app-assets/js/core/app-menu.js"></script>
<script src="{{asset('/modules/vender')}}/app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('/modules/vender')}}/app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
<script src="{{asset('/modules/vender')}}/app-assets/js/scripts/pages/page-users.js"></script>
<!-- END: Page JS-->

@endsection
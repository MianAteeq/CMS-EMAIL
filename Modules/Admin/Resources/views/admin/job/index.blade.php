@extends('admin::admin.layout.app')
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Jobs</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Jobs</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Jobs Table</h4>
        </div>
        <div class="users-list-filter px-1">
            <form method="GET" action="{{ route('admin.jobs') }}">
                <div class="row border border-light rounded py-2 mb-2">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <label for="users-list-verified"> Invoices Status </label>
                        <fieldset class="form-group">
                            <select class="form-control" name="status" id="users-list-verified">
                                <option value="ALL">All</option>
                                <option value="PENDING">PENDING</option>
                                <option value="INPROGRESS">INPROGRESS</option>
                                <option value="REJECTED">REJECTED</option>
                                <option value="COMPLETED">COMPLETED</option>
                            </select>
                        </fieldset>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                        <button class="btn btn-block btn-info glow">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body overflow-hidden row">
            <div class="col-md-9 col-sm-12 border-right-grey border-right-lighten-2">

                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Workshop</th>
                                <th>Clients</th>
                                <th>Job Type</th>
                                <th>Status</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobs as $job)
                            <tr>
                                <td>{{ $job['booking_no'] }}</td>
                                <td>{{ $job['vender']['name'] }}</td>
                                <td>{{ $job['contact_detail']['name']??'No Contact' }}</td>
                                <td>{{ $job['service']['name']??'N/A' }}</td>
                                <td>{{ $job['status'] }}</td>
                                <td>{{ $job['total'] }}</td>
                                <td>
                                    <a href="{{route('admin.print.job',$job['id'])}}" class="success edit mr-1"><i class="la la-eye"></i></a>
                                </td>
                            </tr>
                                
                            @endforeach
                           
            

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Workshop</th>
                                <th>Clients</th>
                                <th>Category</th>
                                <th>Status</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="list-group">
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                        <h5 class="list-group-item-heading">{{ $jobs->count() }}</h5>
                        <p class="list-group-item-text">Total Invoices</p>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                        <h5 class="list-group-item-heading">{{ $today_jobs }}</h5>
                        <p class="list-group-item-text">Total no of invoices - current day</p>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                        <h5 class="list-group-item-heading">{{ $monthly_jobs }}</h5>
                        <p class="list-group-item-text">Total no of invoices - current month</p>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                        <h5 class="list-group-item-heading">£ {{ $today_earning }}</h5>
                        <p class="list-group-item-text">Total business - current day</p>
                    </a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action">
                        <h5 class="list-group-item-heading">£ {{ $monthly_earning }}</h5>
                        <p class="list-group-item-text">Total business - current month</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
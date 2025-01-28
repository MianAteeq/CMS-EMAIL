@extends('admin::admin.layout.app')
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Withdraw Request</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Withdraw Request</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body row text-center">
        <div class="project-info-count col-lg-4 col-md-12">
            <div class="project-info-icon">
                <h2>0</h2>
                <div class="project-info-sub-icon">
                    <span class="la la-medkit"></span>
                </div>
            </div>
            <div class="project-info-text pt-1">
                <h5>Total No Of Requests</h5>
            </div>
        </div>
        <div class="project-info-count col-lg-4 col-md-12">

        </div>
        <div class="project-info-count col-lg-4 col-md-12">
            <div class="project-info-icon">
                <h2>£ 0</h2>
                <div class="project-info-sub-icon">
                    <span class="la la-money"></span>
                </div>
            </div>
            <div class="project-info-text pt-1">
                <h5> Total Requested Amount</h5>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Withdraw Request Table</h4>
        </div>
        <div class="card-content collapse show">
            <div class="card-body card-dashboard">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th>Vender Name</th>
                                <th>Vender WorkShop</th>
                                <th>Office Address</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Vender Name</th>
                                <th>Vender WorkShop</th>
                                <th>Office Address</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
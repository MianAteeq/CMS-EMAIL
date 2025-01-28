@extends('admin::admin.layout.app')
@section('content')
@section("css_custom")
@endsection
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Subscribers</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active">Subscribers</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Subscriber Table</h4>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    {{-- <a href="#" class="btn btn-info"> Create Subscriber </a> --}}
                </ul>
            </div>
        </div>
        <div class="users-list-filter px-1">
            <form>
                <div class="row border border-light rounded py-2 mb-2">
                    {{-- <div class="col-12 col-sm-6 col-lg-3">
                        <label for="users-list-verified"> Status </label>
                        <fieldset class="form-group">
                            <select class="form-control" id="users-list-verified">
                                <option value="">All</option>
                                <option value="Active">Active</option>
                                <option value="Blocked">Blocked</option>
                            </select>
                        </fieldset>
                    </div> --}}
                    {{-- <div class="col-12 col-sm-6 col-lg-3">
                        <label for="users-list-verified"> Subscriber(Recent) </label>
                        <fieldset class="form-group">
                            <select class="form-control" id="users-list-verified">
                                <option value="">All</option>
                                <option value="1">Last Month</option>
                                <option value="3">Last Three Month</option>
                                <option value="6">Last Six Month</option>
                            </select>
                        </fieldset>
                    </div> --}}
                    {{-- <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                        <button class="btn btn-block btn-info glow">Search</button>
                    </div> --}}
                </div>
            </form>
        </div>
        <div class="card-content collapse show">
            <div class="card-body card-dashboard">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Office</th>
                                <th>Start date</th>
                                <th>Status</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subscribers as $subscriber)
                            <tr>
                                <td>{{ $subscriber['name'] }} - {{ $subscriber['last_name'] }} </td>
                                <td>{{ $subscriber['email'] }}</td>
                                <td>{{ $subscriber['profile']['address']??'' }}</td>
                                <td>{{ \Carbon\Carbon::parse($subscriber->created_at)->format('F jS, Y') }}</td>
                                <td>{{ getEndDate($subscriber)}}</td>
                                <td> <button class="btn btn-sm btn-info" onclick="window.location.href=`{{ route('admin.subscribers.view',$subscriber['id']) }}`">View</button> </td>
                               
                            </tr>
                                
                            @endforeach
                          
                           
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Office</th>
                                <th>Start date</th>
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
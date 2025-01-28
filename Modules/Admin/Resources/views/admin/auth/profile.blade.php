@extends('admin::admin.layout.app')
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Admin Profile Update</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Admin Profile Update</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif @if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Profile Update</h4>
        </div>
        <div class="card-content collapse show">
            <form id="myform" method="POST" action="{{route('admin.profile.update')}}" class="needs-validation" novalidate>
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <fieldset>
                                <h5>Name
                                    <small class="text-muted">(Name)</small>
                                </h5>
                                <div class="form-group">
                                    <input name="name" class="form-control date-inputmask" required type="text" placeholder="Name" value="{{auth()->user()->name}}">
                                    <div class="invalid-feedback">
                                        Please provide a Name.
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <h5>Email
                                    <small class="text-muted">(Email)</small>
                                </h5>
                                <div class="form-group">
                                    <input name="email" class="form-control date-inputmask" type="text" placeholder="Email" value="{{auth()->user()->email}}" required>
                                    <div class="invalid-feedback">
                                        Please provide a Email.
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <h5>Password
                                    <small class="text-muted">(Password)</small>
                                </h5>
                                <div class="form-group">
                                    <input name="password" class="form-control date-inputmask" type="text" placeholder="Password" value="" required>
                                    <div class="invalid-feedback">
                                        Please provide a Password.
                                    </div>
                                </div>

                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-info"> Submit</button>
                            <!-- <a href="{{route('admin.dashboard')}}" class="btn btn-info"> Submit</a> -->
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('admin::admin.layout.app')
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Withdraw Request Update</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Withdraw Request Update</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Update Withdraw Request</h4>
        </div>
        <div class="card-content collapse show">
            <form class="needs-validation" novalidate>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <fieldset>
                                <h5>Withdraw Request Name
                                    <small class="text-muted">(Withdraw Request Name)</small>
                                </h5>
                                <div class="form-group">
                                    <select name="status" class="form-control" required>
                                        <option value="">All</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Done">Done</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a Status.
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <button class="btn btn-primary" type="submit">Submit form</button> -->
                            <a href="{{route('admin.withdraws')}}" class="btn btn-info"> Submit</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
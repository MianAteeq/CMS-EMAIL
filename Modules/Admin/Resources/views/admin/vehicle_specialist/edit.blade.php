@extends('admin::admin.layout.app')
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Vehicle Specialist Update</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Vehicle Specialist Update</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Update Vehicle Specialist</h4>
        </div>
        <div class="card-content collapse show">
            <form action="{{ route('admin.vehicle.specialist.update') }}" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $warranty_job['id'] }}">
                <input type="hidden" name="old_image" value="{{ $warranty_job['image'] }}">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <fieldset>
                                <h5>Name
                                    <small class="text-muted">(Vehicle Specialist)</small>
                                </h5>
                                <div class="form-group">
                                    <input name="name" class="form-control date-inputmask" type="text" value="{{ $warranty_job['name'] }}" required
                                        placeholder="Name">
                                        @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset>
                                <h5>Image <img style="width: 50px;height: 100px;object-fit:contain" src="{{ URL::to($warranty_job['image']) }}" /> </h5>
                                <div class="form-group">
                                  <input name="image" class="form-control date-inputmask" type="file"  placeholder="Image">
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-info" type="submit"> Submit</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
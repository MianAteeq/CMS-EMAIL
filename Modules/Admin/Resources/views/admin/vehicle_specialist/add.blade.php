@extends('admin::admin.layout.app')
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Vehicle Specialist Add</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Vehicle Specialist Add</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">New Vehicle Specialist</h4>
        </div>
        <div class="card-content collapse show">
           <form action="{{ route('admin.vehicle.specialist.store') }}" method="post" class="needs-validation" novalidate enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <fieldset>
                            <h5>Name
                                <small class="text-muted">(Vehicle Specialist)</small>
                            </h5>
                            <div class="form-group">
                                <input name="name" class="form-control date-inputmask" type="text" required placeholder="Name">
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                            <h5>Image 
                            </h5>
                            <div class="form-group">
                             <input name="image" class="form-control date-inputmask" type="file" required placeholder="Image">
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
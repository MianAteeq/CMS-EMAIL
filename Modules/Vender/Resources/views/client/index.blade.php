@extends('vender::layouts.master')
@section('content')
<!-- users list start -->
<section class="users-list-wrapper">

    <div class="d-flex justify-content-end">
        <div class="py-2">
            {{-- <a href="{{route('vender.client.add')}}" class="btn  btn-primary glow"> <i class="ft-plus-circle"> Add New </i></a> --}}
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-6 col-12">
            <div class="card pull-up">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="media-body text-left">
                                <h3 class="warning">{{ $contacts->count() }}</h3>
                                <h6>Total Contacts</h6>
                            </div>
                            <div>
                                <img src="{{ URL::to('assets/icons/Clients.png') }}" alt="">
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
                                <h3 class="warning">{{ $contacts->count() }}</h3>
                                <h6>Active Contacts</h6>
                            </div>
                            <div>
                                <img src="{{ URL::to('assets/icons/Clients.png') }}" alt="">
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
                                <h3 class="warning">0</h3>
                                <h6>InActive Contacts</h6>
                            </div>
                            <div>
                                <img src="{{ URL::to('assets/icons/Clients.png') }}" alt="">
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="users-list-filter px-1">
        <form>
            <div class="row border border-light rounded py-2 mb-2">
                <div class="col-12 col-sm-6 col-lg-3">
                    <label for="users-list-verified">Name</label>
                    <fieldset class="form-group">
                      <input type="text" class="form-control" name="name" placeholder="Name">
                    </fieldset>
                </div>
                
                <div class="col-12 col-sm-6 col-lg-3">
                    <label for="users-list-status">Status</label>
                    <fieldset class="form-group">
                        <select class="form-control" id="users-list-status">
                            <option value="">Any</option>
                            <option value="Active">Active</option>
                            <option value="Active">InActive</option>
                            <option value="Banned">Banned</option>
                        </select>
                    </fieldset>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                    <button class="btn btn-block btn-primary glow">Show</button>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-center">
                    <button class="btn btn-block btn-primary glow">Reset</button>
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
                                    <!-- <th>username</th> -->
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    {{-- <th>City</th> --}}
                                    <th>Status</th>

                                    {{-- <th>Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($contacts as $contact)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $contact['name'] }}</td>
                                    <td>{{ $contact['email'] }}</td>
                                    <td>{{ $contact['mobile_no'] }}</td>
                                    <td>{{ $contact['address'] }} , {{ $contact['city'] }} {{ $contact['postal_code'] }}</td>
                                    <td><span class="badge badge-success">Active</span></td>
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
<!-- users list ends -->
@endsection
@section('css_lib')
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/core/colors/palette-gradient.css">
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
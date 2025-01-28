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
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Subscribers</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="users-view">
    <div class="container">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Vender</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Vender Profile</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                    class="rounded-circle" width="150">
                                <div class="mt-3">
                                    <h4>{{ $subscriber['name'] }} {{ $subscriber['last_name'] }}</h4>
                                    {{-- <p class="text-secondary mb-1">Full Stack Developer</p> --}}
                                    <p class="text-muted font-size-sm">{{ $subscriber['profile']['area']??'' }}</p>
                                    @if($subscriber['status']=="INACTIVE")
                                    <button class="btn btn-success" onclick="window.location.href=`{{ route('admin.subscribers.approve',$subscriber['id']) }}`">Active</button>
                                    @else
                                    <button class="btn btn-danger"
                                        onclick="window.location.href=`{{ route('admin.subscribers.un_approve',$subscriber['id']) }}`">InActive</button>


                                    @endif
                                    <button class="btn btn-outline-info">Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-globe mr-2 icon-inline">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="2" y1="12" x2="22" y2="12"></line>
                                        <path
                                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                        </path>
                                    </svg>Website</h6>
                                <span class="text-secondary">{{ $subscriber['profile']['website']??'' }}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"> <img style="height: 20px;
    width: 20px;
    margin-right: 1.5rem !important;" src="{{ URL::to('assets/icons/trust.png') }}" alt="">
                                    Trust Plot</h6>
                                <span class="text-secondary">{{ $subscriber['profile']['website']??'' }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-instagram mr-2 icon-inline text-danger">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>Instagram</h6>
                                <span class="text-secondary">{{ $subscriber['profile']['instagram']??'' }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-facebook mr-2 icon-inline text-primary">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                        </path>
                                    </svg>Facebook</h6>
                                <span class="text-secondary">{{ $subscriber['profile']['facebook']??'' }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h6 class="d-flex align-items-center mb-3">Personal Info</h6>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                   {{ $subscriber['name'] }}  {{ $subscriber['last_name'] }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $subscriber['email'] }}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $subscriber['profile']['phone_no']??'' }}
                                </div>
                            </div>
                           
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    {{ $subscriber['profile']['area']??'' }}
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h6 class="d-flex align-items-center mb-3">Company Info</h6>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Company Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                   {{ $subscriber['profile']['company_name'] }}  
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Trading Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                   {{ $subscriber['profile']['trading_name'] }}  
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Operation Type</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                   {{ $subscriber['profile']['operation_type'] }}  
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Weekly Income </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                   {{ $subscriber['profile']['weekly_income'] }}  
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Service </h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    @foreach ($subscriber['services'] as $service)
                                    <p class="badge badge-info">{{ $service['service']['name']}}</p>
                                        
                                    
                                    @endforeach
                                </div>
                            </div>
                            <hr>
                           
                            
                        </div>
                    </div>

                   



                </div>
            </div>

        </div>
    </div>

</section>
@endsection
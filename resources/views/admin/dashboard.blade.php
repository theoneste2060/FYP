@extends('admin.base')

@section('content')
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                @auth
                @if ( auth()->user()->role === 'Admin')
                    <!-- Hide the link for users with the "Agronomist" role -->
                    <div class="col-md-10 col-xl-10">
                        <div class="card bg-primary text-light">
                            <div class="card-header">User Info</div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-4 text-center">
                                        <img src="/images/users/{{ auth()->user()->avatar }}" alt="avatar" class="rounded-circle" style="width: 150px; height: 150px;">
                                    </div>
                                    <div class="col-6">
                                        <h3 class="text-light fw-normal mt-0" title="New Leads">First Name: {{ auth()->user()->name }}</h3>
                                        <h3 class="text-light fw-normal mt-0" title="New Leads">Last Name: {{ auth()->user()->lname }}</h3>
                                        <h3 class="text-light fw-normal mt-0" title="New Leads">Email: {{ auth()->user()->email }}</h3>
                                        <h3 class="text-light fw-normal mt-0" title="New Leads">Enrolled On: {{ auth()->user()->created_at->diffForHumans() }}</h3>
                                        <a class="btn btn-success" href="/profile">Make Change to Your Info</a>
                                    </div>
                                </div> <!-- end row-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->  
                <div class="col-md-4 col-xl-4">
                    <div class="card bg bg-primary">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h5 class=" fw-normal mt-0 text-light" title="Campaign Sent">Active Users</h5>
                                    <h3 class="my-2 py-1 text-light">{{ $userCount }}</h3>
                                    
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
                <div class="col-md-4 col-xl-4">
                    <div class="card bg bg-primary">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <h5 class="text-light fw-normal mt-0 " title="Campaign Sent">Agronomist</h5>
                                    <h3 class="my-2 py-1 text-light">{{ $agronomy }}</h3>
                                    
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-md-4 col-xl-4">
                    <div class="card bg bg-primary">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h5 class="text-light fw-normal mt-0 text-light" title="New Leads">Contents Shared</h5>
                                    <h3 class="my-2 py-1 text-light">{{ $videoCount }}</h3>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col --> 
                @else               
                <div class="col-md-10 col-xl-10">
                    <div class="card bg-primary text-light">
                        <div class="card-header">User Info</div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4 text-center">
                                    <img src="/images/users/{{ auth()->user()->avatar }}" alt="avatar" class="rounded-circle" style="width: 150px; height: 150px;">
                                </div>
                                <div class="col-6">
                                    <h3 class="text-light fw-normal mt-0" title="New Leads">First Name: {{ auth()->user()->name }}</h3>
                                    <h3 class="text-light fw-normal mt-0" title="New Leads">Last Name: {{ auth()->user()->lname }}</h3>
                                    <h3 class="text-light fw-normal mt-0" title="New Leads">Email: {{ auth()->user()->email }}</h3>
                                    <h3 class="text-light fw-normal mt-0" title="New Leads">Enrolled On: {{ auth()->user()->created_at->diffForHumans() }}</h3>
                                    <a class="btn btn-success" href="/profile">Make Change to Your Info</a>
                                </div>
                            </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->                
               
                @endif
                @endauth
            </div>
            <!-- end row -->            
        </div> <!-- container -->
        

    </div> <!-- content -->

@endsection

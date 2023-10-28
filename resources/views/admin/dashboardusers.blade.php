@extends('admin.base')

@section('content')
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

         

            <div class="row">
                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">Campaign Sent</h5>
                                    <h3 class="my-2 py-1">9,184</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                                    </p>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <div id="campaign-sent-chart" data-colors="#727cf5"></div>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h5 class="text-muted fw-normal mt-0 text-truncate" title="New Leads">New Leads</h5>
                                    <h3 class="my-2 py-1">3,254</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 5.38%</span>
                                    </p>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <div id="new-leads-chart" data-colors="#0acf97"></div>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h5 class="text-muted fw-normal mt-0 text-truncate" title="Deals">Deals</h5>
                                    <h3 class="my-2 py-1">861</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                    </p>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <div id="deals-chart" data-colors="#727cf5"></div>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->

                <div class="col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h5 class="text-muted fw-normal mt-0 text-truncate" title="Booked Revenue">Booked Revenue</h5>
                                    <h3 class="my-2 py-1">$253k</h3>
                                    <p class="mb-0 text-muted">
                                        <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 11.7%</span>
                                    </p>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                        <div id="booked-revenue-chart" data-colors="#0acf97"></div>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="header-title">Campaigns</h4>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Today</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Yesterday</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Last Week</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Last Month</a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body pt-0">
                            <div id="dash-campaigns-chart" class="apex-charts" data-colors="#ffbc00,#727cf5,#0acf97"></div>

                            <div class="row text-center mt-3">
                                <div class="col-sm-4">
                                    <i class="mdi mdi-send widget-icon rounded-circle bg-warning-lighten text-warning"></i>
                                    <h3 class="fw-normal mt-3">
                                        <span>6,510</span>
                                    </h3>
                                    <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Total Sent</p>
                                </div>
                                <div class="col-sm-4">
                                    <i class="mdi mdi-flag-variant widget-icon rounded-circle bg-primary-lighten text-primary"></i>
                                    <h3 class="fw-normal mt-3">
                                        <span>3,487</span>
                                    </h3>
                                    <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i> Reached</p>
                                </div>
                                <div class="col-sm-4">
                                    <i class="mdi mdi-email-open widget-icon rounded-circle bg-success-lighten text-success"></i>
                                    <h3 class="fw-normal mt-3">
                                        <span>1,568</span>
                                    </h3>
                                    <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i> Opened</p>
                                </div>
                            </div>
                        </div>
                        <!-- end card body-->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col-->
            </div>
                    <!-- Todo-->
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="header-title">Todo</h4>
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                </div>
                            </div>
                        </div>

                        <div class="todoapp mt-n2">
                            <div class="card-body py-0 mb-2" data-simplebar style="max-height: 243px">
                                <ul class="list-group list-group-flush todo-list" id="todo-list"></ul>
                            </div>
                        </div> <!-- end .todoapp-->
                    </div> <!-- end card-->

                </div>
                <!-- end col -->  
            </div>
            <!-- end row-->
            
        </div> <!-- container -->

    </div> <!-- content -->

@endsection

<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true">

    
<!-- Mirrored from coderthemes.com/hyper/modern/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Sep 2023 07:57:10 GMT -->
<head>
        <meta charset="utf-8" />
        <title class="bg text-danger">Farmer Connect | Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

        <!-- Daterangepicker css -->
        <link rel="stylesheet" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">

            <!-- Theme Config Js -->
            <script src="{{asset('js/config.js')}}"></script>

            <!-- App css -->
            <link href="{{asset('css/app-modern.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>

            <!-- Icons css -->
            <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Vector Map css -->
        <link rel="stylesheet" href="{{ asset('vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}">

        <!-- Theme Config Js -->
        <script src="{{ asset('js/hyper-config.js') }}"></script>

        <!-- App css -->
        <link href="{{ asset('css/app-modern.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
            <!-- App favicon -->
            <link rel="shortcut icon" href="assets/images/favicon.ico">

<!-- Fullcalendar css -->
<link href="{{asset('vendor/fullcalendar/main.min.css')}}" rel="stylesheet" type="text/css" />

<!-- Theme Config Js -->
<script src="{{asset('js/hyper-config.js')}}"></script>

<!-- App css -->
<link href="{{asset('css/app-modern.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

<!-- Icons css -->
<link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">
            @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
            @else
            
            <!-- ========== Topbar Start ========== -->
            <div class="navbar-custom">
                <div class="topbar container-fluid">
                    <div class="d-flex align-items-center gap-lg-2 gap-1">

                        <!-- Topbar Brand Logo -->
                        <div class="logo-topbar">
                            <!-- Logo light -->
                            <a href="index-2.html" class="logo-light">
                                <a class="navbar-brand" href="{{ url('/dashboard') }}">
                                    {{ config('app.name', 'Laravel') }}
                                </a>
                            </a>
                        </div>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="button-toggle-menu">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        <!-- Horizontal Menu Toggle Button -->
                        <button class="navbar-toggle" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </button>

                        <!-- Topbar Search Form -->
                        <div class="app-search dropdown d-none d-lg-block">
                            <form>
                                <div class="input-group">
                                    <input type="search" class="form-control dropdown-toggle" placeholder="Search..." id="top-search">
                                    <span class="mdi mdi-magnify search-icon"></span>
                                    <button class="input-group-text btn btn-primary" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <ul class="topbar-menu d-flex align-items-center gap-3">
                        <li class="dropdown d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ri-search-line font-22"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>
                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="ri-notification-3-line font-22"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg py-0">
                                <div class="p-2 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 font-16 fw-semibold"> Notification</h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                                <small>Clear All</small>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="px-2" style="max-height: 300px;" data-simplebar>

                                    <h5 class="text-muted font-13 fw-normal mt-2">Today</h5>
                                    <!-- item-->

                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-primary">
                                                        <i class="mdi mdi-comment-account-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Datacorp <small class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-info">
                                                        <i class="mdi mdi-account-plus"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Admin <small class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">New user registered</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <h5 class="text-muted font-13 fw-normal mt-0">Yesterday</h5>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon">
                                                        <img src="{{ asset('images/users/avatar-2.jpg')}}" class="img-fluid rounded-circle" alt="" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Cristina Pride <small class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                                    <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <h5 class="text-muted font-13 fw-normal mt-0">30 Dec 2021</h5>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon bg-primary">
                                                        <i class="mdi mdi-comment-account-outline"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Datacorp</h5>
                                                    <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                        <div class="card-body">
                                            <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="notify-icon">
                                                        <img src="{{ asset('images/users/avatar-4.jpg')}}" class="img-fluid rounded-circle" alt="" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 text-truncate ms-2">
                                                    <h5 class="noti-item-title fw-semibold font-14">Karen Robinson</h5>
                                                    <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <div class="text-center">
                                        <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                    </div>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                    View All
                                </a>

                            </div>
                        </li>
                        <li class="d-none d-sm-inline-block">
                            <div class="nav-link" id="light-dark-mode" data-bs-toggle="tooltip" data-bs-placement="left" title="Theme Mode">
                                <i class="ri-moon-line font-22"></i>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle arrow-none nav-user px-2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <span class="d-lg-flex flex-column gap-1 d-none">
                                    <h5 class="my-0">{{ Auth::user()->name }}</h5>
                                    
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated profile-dropdown">
                                <!-- item-->
                                <a href="/profile" class="dropdown-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="/profile" class="dropdown-item">
                                    <i class="mdi mdi-account-edit me-1"></i>
                                    <span>Settings</span>
                                </a>
                                <!-- item-->
                                
                                <a href="{{ route('logout') }}" class="dropdown-item"
                                
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            <i class="mdi mdi-logout me-1"></i>{{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                </a>
                                
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                <!-- Brand Logo Light -->
                <a href="index-2.html" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="{{ asset('images/logo.png')}}" alt="logo">
                    </span>
                    <span class="logo-sm">
                        <img src="{{ asset('images/logo-sm.png')}}" alt="small logo">
                    </span>
                </a>
                <!-- Sidebar Hover Menu Toggle Button -->
                <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
                    <i class="ri-checkbox-blank-circle-line align-middle"></i>
                </div>

                <!-- Full Sidebar Menu Close Button -->
                <div class="button-close-fullsidebar">
                    <i class="ri-close-fill align-middle"></i>
                </div>

                <!-- Sidebar -left -->
                <div class="h-100" id="leftside-menu-container" data-simplebar>
                    <!-- Leftbar User -->
                    <div class="leftbar-user">
                        <a href="/profile"> <h1>{{ Auth::user()->name }}</h1>
                        </a>
                    </div>

                    <!-- Sidemenu -->
<ul class="side-nav">
    <li class="side-nav-item">
        <a href="{{route('dashboard')}}" class="side-nav-link">
            <i class="uil-home-alt"></i>
            <span> Dashboard </span>
        </a>
    </li>

    <li class="side-nav-item">
        <a href="{{ route('chat') }}" class="side-nav-link">
            <i class="uil-chat"></i>
            <span> Chat </span>
        </a>
    </li>

    <li class="side-nav-item">
        <a href="{{ route('calendar') }}" class="side-nav-link">
            <i class="uil-calender"></i>
            <span> Calendar </span>
        </a>
    </li> 
    <li class="side-nav-item">
        <a href="{{ route('posts') }}" class="side-nav-link">
            <i class="uil-calender"></i>
            <span> Community </span>
        </a>
    </li> 
         <li class="side-nav-item">
                <a class="side-nav-link" href="{{ route('add_video') }}">
                    <i class="uil-video"></i>
                    <span> Share Experience </span>
                </a>
            </li>
            <li class="side-nav-item">
                <a class="side-nav-link" href="{{route('video')}}">
                    <i class="uil-video"></i>
                    <span> Get Experience </span>
                </a>
            </li>
        
        @auth
        @if ( auth()->user()->role === 'Admin')
            <!-- Hide the link for users with the "Agronomist" role -->
        
            <li class="side-nav-item">
                <a href="{{ route('data') }}" class="side-nav-link">
                    <i class="uil-table"></i>
                    <span> Manage User </span>
                </a>
            </li>
            @else
        @endif
    @endauth
</ul>
<!-- End Sidemenu -->


                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- ========== Left Sidebar End ========== -->
            

            <!-- ============================================================== -->
            <<main class="py-4">
                @yield('content')
            </main>
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © ifaustin89@gmail.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>
        </div>
        <!-- END wrapper -->
        @endguest
        <!-- Vendor js -->
        <script src="{{ asset('js/vendor.min.js') }}"></script>

        <!-- Daterangepicker js -->
        <script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
        <script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
        
        <!-- Apex Charts js -->
        <script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Vector Map js -->
        <script src="{{ asset('vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>

        <!-- Dashboard App js -->
        <script src="{{ asset('js/pages/demo.dashboard.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('js/app.min.js') }}"></script>
         <!-- Vendor js -->
         <script src="{{asset('js/vendor.min.js')}}"></script>

            <!-- Fullcalendar js -->
            <script src="{{asset('vendor/fullcalendar/main.min.js')}}"></script>

            <!-- Calendar App Demo js -->
            <script src="{{asset('js/pages/demo.calendar.js')}}"></script>

            <script src="{{asset('js/vendor.min.js')}}"></script>
        
        <!-- App js -->
        <script src="{{asset('js/app.min.js')}}"></script>

        <!-- Code Highlight js -->
        <script src="{{asset('vendor/highlightjs/highlight.pack.min.js')}}"></script>
        <script src="{{asset('vendor/clipboard/clipboard.min.js')}}"></script>
        <script src="{{asset('js/hyper-syntax.js')}}"></script>
        
        <!-- App js -->
        <script src="{{asset('js/app.min.js')}}"></script>


        <!-- Datatables css -->
        <link href="{{asset('vendor/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('vendor/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('vendor/datatables.net-fixedcolumns-bs5/css/fixedColumns.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('vendor/datatables.net-fixedheader-bs5/css/fixedHeader.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('vendor/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('vendor/datatables.net-select-bs5/css/select.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Theme Config Js -->
        <script src="{{asset('js/config.js')}}"></script>

        <!-- App css -->
        <link href="{{asset('css/app-modern.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
         <!-- Vendor js -->
         <script src="{{asset('js/vendor.min.js')}}"></script>

<!-- Code Highlight js -->
<script src="{{asset('vendor/highlightjs/highlight.pack.min.js')}}"></script>
<script src="{{asset('js/hyper-syntax.js')}}"></script>

<!-- Datatables js -->
<script src="{{asset('vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
<script src="{{asset('vendor/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('vendor/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<!-- Datatable Demo Aapp js -->
<script src="{{asset('js/pages/demo.datatable-init.js')}}"></script>

<!-- App js -->
<script src="{{asset('js/app.min.js')}}"></script>
 <!-- Vendor js -->
 <script src="{{asset('js/vendor.min.js')}}"></script>

<!-- Code Highlight js -->
<script src="{{asset('vendor/highlightjs/highlight.pack.min.js')}}"></script>
<script src="{{asset('js/syntax.js')}}"></script>

<!-- Datatables js -->
<script src="{{asset('vendor/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('vendor/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"><
<script src="{{asset('vendor/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('vendor/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('vendor/datatables.net-select/js/dataTables.select.min.js')}}"></script>



<!-- App js -->
<script src="{{asset('js/app.min.js')}}"></script>

    </head>
    </body>

<!-- Mirrored from coderthemes.com/hyper/modern/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Sep 2023 08:50:27 GMT -->
</html> 
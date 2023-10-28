<!DOCTYPE html>
<html lang="en" data-layout-mode="detached" data-topbar-color="dark" data-menu-color="light" data-sidenav-user="true">
<head>
    <meta charset="utf-8" />
    <title>Log In | Farmer Connect</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Coderthemes" name="author" />

    <!-- Theme Config Js -->
    <script src="/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg pb-0">
    <<main class="py-0">
        @if (Route::has('login'))
        <div class="position-absolute top-0 end-0 p-4 text-end">
            @auth
                <a href="{{ redirect('/dashboard') }}" class="btn btn-light fw-bold">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-light fw-bold">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-light fw-bold ms-2">Register</a>
                @endif
            @endauth
        </div>
    @endif
        @yield('content')
    </main>
     <!-- Vendor js -->
     <script src="/js/vendor.min.js"></script>

     <!-- App js -->
     <script src="/js/app.min.js"></script>
 
 </body>
 
 
 <!-- Mirrored from coderthemes.com/hyper/modern/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Sep 2023 09:40:20 GMT -->
 </html>

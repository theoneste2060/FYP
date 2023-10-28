@extends('layouts.guest')

@section('content')
<div class="auth-fluid">
    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box">
        <div class="card-body d-flex flex-column h-100 gap-3">
            <div class="my-auto">
                <!-- title-->
                <h4 class="mt-0">Sign In</h4>
                <p class="text-muted mb-4">Enter your email address and password to access account.</p>

                <!-- form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">Email address</label>
                        <input class="form-control" name="email" id="emailaddress" required="" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" type="password" name="password" required="" id="password" placeholder="Enter your password">
                    </div>
                    <div class="d-grid mb-0 text-center">
                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-login"></i> Log In </button>
                    </div>
                    <!-- social-->
                </form>
                <!-- end form-->
            </div>

            <!-- Footer-->
            <footer class="footer footer-alt">
                <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-muted ms-1"><b>Sign Up</b></a></p>
            </footer>

        </div> <!-- end .card-body -->
    </div>
    <!-- end auth-fluid-form-box-->
</div>
<!-- end auth-fluid-->
@endsection

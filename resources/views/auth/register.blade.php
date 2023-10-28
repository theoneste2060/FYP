
@extends('layouts.guest')

@section('content')
<div class="auth-fluid">
    <!-- Auth fluid left content -->
    <div class="auth-fluid-form-box">
        <div class="card-body d-flex flex-column h-100 gap-3">
            <div class="my-auto">
                <!-- Title -->
                <h4 class="mt-0">Sign Up</h4>
                <p class="text-muted mb-4">Enter your information to create an account.</p>

                <!-- Form -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" id="fname" required placeholder="Enter your First name">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input class="form-control @error('lname') is-invalid @enderror" type="text" name="lname" value="{{ old('lname') }}" id="lname" required placeholder="Enter your Last name">
                        @error('lname')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" id="email" required placeholder="Enter your Email">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" required id="password" placeholder="Enter your password">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password-confirm" class="form-label">Confirm Password</label>
                        <input class="form-control @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" required id="password-confirm" placeholder="Confirm your password">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-grid mb-0 text-center">
                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-login"></i> Sign Up</button>
                    </div>
                </form>
                <!-- End Form -->
            </div>

            <!-- Footer -->
            <footer class="footer footer-alt">
                <p class="text-muted">Already have an account? <a href="{{ route('login') }}" class="text-muted ms-1"><b>Sign In</b></a></p>
            </footer>
        </div> <!-- End .card-body -->
    </div>
    <!-- End auth-fluid-form-box -->
</div>

   @endsection
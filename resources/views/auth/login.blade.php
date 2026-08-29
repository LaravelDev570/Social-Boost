@extends('layouts.app')

@section('title', 'Login - AccountForge')

@section('content')
<div class="container py-5 mt-5">
    <div class="row justify-content-center fade-in-up">
        <div class="col-md-6 col-lg-5">
            <div class="card card-glass p-5 border-0">
                <div class="text-center mb-4">
                    <h2 class="fw-bold font-outfit text-gradient">Welcome Back</h2>
                    <p class="text-secondary small">Login to manage your digital services</p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger bg-danger text-light border-0 bg-opacity-25 py-2 small rounded">
                            <ul class="mb-0 ps-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="email" class="form-label text-light small fw-bold">Email Address</label>
                        <input id="email" type="email" class="form-control bg-dark text-light border-secondary focus-ring focus-ring-primary" name="email" value="{{ old('email') }}" required autofocus>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label text-light small fw-bold">Password</label>
                        <input id="password" type="password" class="form-control bg-dark text-light border-secondary focus-ring focus-ring-primary" name="password" required>
                    </div>

                    <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input bg-dark border-secondary" id="remember" name="remember">
                        <label class="form-check-label text-secondary small" for="remember">Remember me</label>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 rounded-pill py-2 fw-bold mb-3">
                        Log In
                    </button>
                    
                    <div class="text-center">
                        <span class="text-secondary small">Don't have an account? </span>
                        <a href="{{ route('register') }}" class="text-primary text-decoration-none small fw-bold">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

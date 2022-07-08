@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-4">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <h1 class="text-center mb-4">Silahkan Login</h1>
            <form action="/login" method="POST">
                @csrf
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        id="email" required value="{{ old('email') }}" placeholder="name@example.com">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror"
                        name="password" id="password" required placeholder="Password">
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <div class="row">
                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                </div>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Not a member? <a href="/register">Register</a></p>
                </div>
            </form>
        </div>
    </div>
@endsection

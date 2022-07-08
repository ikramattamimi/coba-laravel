@extends('layouts.main')

@section('container')
    <div class="row justify-content-center mb-5">
        <div class="col-md-4">
            <h1 class="mb-4">Register</h1>
            <form action="/register" method="POST">
                @csrf

                <div class="form-outline mb-4">
                    <input type="text" name="name" id="name" class="form-control rounded-top @error('name') is-invalid @enderror" required
                            value="{{ old('name') }}" placeholder="Name">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-outline mb-4">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" required
                    value="{{ old('username') }}" placeholder="Username" />
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-outline mb-4">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" required
                            value="{{ old('email') }}" placeholder="name@example.com">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>

                <div class="form-outline mb-4">
                    <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" name="password" id="password" required placeholder="Password">
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>

                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                    </div>

                    <div class="col">
                        <a href="#!">Forgot password?</a>
                    </div>
                </div>

                <div class="row">
                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
@endsection

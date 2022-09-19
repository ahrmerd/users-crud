@extends('layouts.app')

@section('content')






<div class="container p-4">

    <div class="card">
        <div class="card-body">
            <p class="card-title">
                Register
            </p>
            <p class="card-text">all fields are required</p>
        </div>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- firstname field --}}
        <div class="form-outline mb-3">
            <label for="first_name" class="form-label">first Name</label>
            <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" autocomplete="first name" autofocus>

            @error('first_name')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


        {{-- lastname field --}}
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" autocomplete="last name" autofocus>

            @error('last_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>


        {{-- email field --}}
        <div class="mb-3">
            <label for="email" class="form-label">E-Mail Address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        {{-- username field --}}
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>


            <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

            @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>


        <div class="mb-3">
            <label for="password" class="form-label">Password</label>


            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="mb-3>
                <label for=" password-confirm" class="form-label">
            {{ __('Confirm Password') }}</label>


            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

        </div>

        <div class=" mt-3 d-flex justify-content-evenly">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
            <a class="btn btn-primary" href="{{ route('register') }}">
                Register
            </a>
        </div>
    </form>
</div>
@endsection




//login






@extends('layouts.app')


@section('content')
<div class="container">
    <div class="">
        <div class="card mb-2">
            <div class="card-body">
                <p class="card-title">
                    Login
                </p>
                <p class="card-text">all fields are required</p>

            </div>
        </div>
        @error('email')
        <div class="alert alert-danger" role="alert">
            <strong>{{ $message }}</strong>
        </div>
        @enderror
        <form method="POST" action="{{ route('login') }}" class="pt-8 capitalize">

            @csrf

            <div class="form-outline mb-3">
                <input value="{{ old('email') }}" type="email" name="email" id="email" class="form-control" />
                <label class="form-label" for="email">Email address</label>
            </div>


            <div class="form-outline mb-3">
                <input type="password" value="{{ old('password') }}" name="password" id="password" class="form-control" />
                <label class="form-label" for="password">Password</label>
            </div>

            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <div class="form-chek">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>

                <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                </div>
            </div>

            <div class=" mt-3 d-flex justify-content-evenly">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                <a class="btn btn-primary" href="{{ route('register') }}">
                    Register
                </a>
            </div>




        </form>

    </div>
</div>
@endsection

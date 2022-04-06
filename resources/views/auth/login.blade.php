@extends('layouts.main')
@section('pageTitle', 'Login')
@section('content')

    <x-guest-layout>
        <!-- Login Page -->
        <div class="signup pt-5">
            <div class="fs-2 text-center mt-5">Login</div>
            <hr style="width: 20%; margin: auto; color: #000; height: 0.5px" class="mb-5" />
            <div class="container signup-container">
                <form action="" method="post" class="pb-4">
                    @csrf
                    <div class="heading fs-3">Login to your account</div>
                    <x-jet-validation-errors class="mb-4" />
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" value="{{ __('Email') }}">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Enter email.."
                            required />
                    </div>  

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" value="{{ __('Password') }}">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleFormControlInput1"
                            placeholder="Enter Password.." required />
                    </div>

                    <div class="button text-center">
                        <button type="submit" class="btn btn-success signup-btn">
                            Login &rarr;
                        </button>
                    </div>
                    
                    <div class="block mt-1 mb-2">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            Don't have an account?<a class="login-text text-decoration-underline"
                                href="{{ route('register') }}">Register</a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{ route('password.request') }}" class="text-decoration-underline login-text">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </x-guest-layout>

@endsection

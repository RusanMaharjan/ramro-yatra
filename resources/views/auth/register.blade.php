@extends('layouts.main')
@section('pageTitle', 'Register')
@section('content')

    <x-guest-layout>
        <!-- Signup Page -->
        <div class="signup pt-5">
            <div class="fs-2 text-center mt-5">Create An Account</div>
            <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />
            <div class="container signup-container">
                <form action="" method="post" class="pb-4">
                    @csrf
                    <div class="heading fs-3">Personal Information</div>
                    <x-jet-validation-errors class="mb-4" />
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" value="{{ __('Name') }}">Name</label>
                        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Enter name.."
                            required />
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" value="{{ __('Email') }}">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="Enter email.."
                            required />
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label" value="{{ __('Phone') }}">Phone</label>
                        <input type="text" class="form-control" name="phone" id="exampleFormControlInput1"
                            placeholder="Enter phone number.." required />
                    </div>

                    <div class="heading fs-3">Login Information</div>
                    <div class="password-field align-items-center">
                        <div class="mb-3 password">
                            <label for="exampleFormControlInput1" class="form-label" value="{{ __('Password') }}">Password</label>
                            <input type="password" class="form-control" name="password" id="exampleFormControlInput1"
                                placeholder="Enter Password.." required />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label" value="{{ __('Confirm Password') }}">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="exampleFormControlInput1"
                                placeholder="Conrifm Password.." required />
                        </div>
                    </div>
                    <div class="button text-center">
                        <button type="submit" class="btn btn-success signup-btn">
                            Signup &rarr;
                        </button>
                    </div>
                    <div>
                        Already have an account?<a class="login-text" href="{{ route('login') }}">login</a>
                    </div>
                </form>
            </div>
        </div>
    </x-guest-layout>

@endsection

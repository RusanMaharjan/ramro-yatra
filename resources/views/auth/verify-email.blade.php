@extends('layouts.main')
@section('pageTitle', 'forgot password')
@section('content')

    <div class="container" style="width: 40%; margin-top: 163px; padding-bottom: 35px">

        <div class="form-container"
            style="border: 1px solid rgb(241, 240, 240); border-radius: 10px; background: #f8f4f4; box-shadow: 5px 5px 10px 5px #cecbcb">

            <div class="d-flex justify-content-center mt-3">
                <span class="ramro">ramro</span><span class="y">Yatra</span></a>
                <img src="{{ url('frontend/img/Anonymous-Bus1.svg') }}" alt="" width="80px" height="50px">
            </div>

            <div class="mb-4 text-sm text-gray-600 mt-2" style="width: 90%; margin: auto">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="mt-4 d-flex items-center justify-between">
                <form method="POST"class="mx-5"  action="{{ route('verification.send') }}">
                    @csrf
        
                    <div class="justify-items-center pb-4">
                        <button class="btn btn-secondary">
                            {{ __('Resend Verification Email') }}
                        </button>
                        
                    </div>
                </form>
        
                <form method="POST" class="mx-5" action="{{ route('logout') }}">
                    @csrf
                    <div class="flex items-center justify-end pb-4">
                        <button class="btn btn-secondary">
                            {{ __('Log Out') }}
                        </button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>




    
    </div>

@endsection

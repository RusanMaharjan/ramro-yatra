@extends('layouts.main')
@section('pageTitle', 'forgot password')
@section('content')

    <div class="container mt-5 pt-5 pb-5" style="width: 40%;">

        <div class="form-container"
            style="border: 1px solid rgb(241, 240, 240); border-radius: 10px; background: #f8f4f4; box-shadow: 5px 5px 10px 5px #cecbcb">
            <div class="d-flex justify-content-center">
                <span class="ramro">ramro</span><span
                        class="y">Yatra</span></a>
                        <img src="{{ url('frontend/img/Anonymous-Bus1.svg') }}"
                        alt="" width="80px" height="50px">
            </div>
            <div class="mb-4 text-sm text-gray-600"  style="width: 80%; margin: auto;">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600 text-center">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" class="pb-3" action="{{ route('password.email') }}"
                style="width: 80%; margin: auto;">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" value="{{ __('Email') }}">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                        :value="old('email')" required autofocus />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button class="btn btn-secondary">

                        {{ __('Email Password Reset Link') }}
                    </button>
                    
                </div>

                {{-- <a href="{{ __('Email Password Reset Link') }}" class="btn btn-secondary mb-5">Email Password Reset Link</a> --}}
            </form>
        </div>
    </div>

@endsection

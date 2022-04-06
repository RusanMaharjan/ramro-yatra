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

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.update') }}"  style="width: 80%; margin: auto;">
                @csrf
    
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
    
                {{-- <div class="block">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                </div> --}}
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" value="{{ __('Email') }}">Email</label>
                    <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                        :value="old('email')" required autofocus />
                </div>
    
                {{-- <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div> --}}

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" value="{{ __('Password') }}">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleFormControlInput1"
                        required autocomplete="new-password" />
                </div>
    
                {{-- <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div> --}}

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" value="{{ __('Confirm Password') }}">Confirm Password</label>
                    <input type="password" class="form-control" name="password_confirmation" id="exampleFormControlInput1"
                    required autocomplete="new-password" />
                </div>
    
                {{-- <div class="flex items-center justify-end mt-4">
                    <button class="btn btn-secondary">
                        {{ __('Reset Password') }}
                    <button>
                </div> --}}

                <div class="flex items-center justify-end mt-4 pb-4">
                    <button class="btn btn-secondary">
                        {{ __('Reset Password') }}
                    </button>
                    
                </div>
            </form>
        </div>
    </div>

@endsection
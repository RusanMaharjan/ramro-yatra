@extends('layouts.main')
@section('pageTitle', 'Admin Edit Route')
@section('content')

    <!-- edit route Page -->
    <div class="route pt-5 pb-4">
        <div class="fs-2 text-center mt-5">Update Route</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container route-container mb-5">
            <form action="{{ route('admin.updateRoute') }}" method="post" class="pb-4">
                @csrf
                @if (Session::has('message'))
                    <div class="alert alert-success mt-2" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="route-hb d-flex justify-content-between pt-4">
                    <div class="heading fs-3">
                        Update Route
                    </div>
                    <a href="{{ route('admin.getRoute') }}" class="admin-a-btn btn btn-success">All Route &rarr;</a>
                </div>
                <hr style="color: #000; height: 3px" class="mb-5" />

                <input type="hidden" name="route_id" value="{{ $route->route_id }}">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Travelling From</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $route->from }}"
                        name="from"/>
                </div>

                @error('from')
                    <div class="text-danger pb-2">{{ $message }}</div>
                @enderror

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Travelling To</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" {{ $route->to }}
                        name="to"/>
                </div>

                @error('to')
                    <div class="text-danger pb-2">{{ $message }}</div>
                @enderror

                <div class="btnAdmin">
                    <button type="submit" class="btn btn-success">Update Route &rarr;</button>
                </div>

            </form>
        </div>
    </div>

@endsection

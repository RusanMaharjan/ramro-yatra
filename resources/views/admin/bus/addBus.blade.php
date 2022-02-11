@extends('layouts.main')
@section('pageTitle', 'Admin Bus')
@section('content')

    <!-- add bus Page -->
    <div class="route pt-5 pb-5">
        <div class="fs-2 text-center mt-5">Add Bus</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container route-container">
            <form action="{{ route('admin.createBus') }}" method="post" class="pb-4"
                enctype="multipart/form-data">
                @csrf
                @if (Session::has('message'))
                    <div class="alert alert-success mt-2" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <div class="route-hb d-flex justify-content-between pt-4">
                    <div class="heading fs-3">
                        Create Bus
                    </div>
                    <a href="{{ route('admin.getBus') }}" class="admin-a-btn btn btn-success">All Bus &rarr;</a>
                </div>
                <hr style="color: #000; height: 3px" class="mb-5" />

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Bus Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Bus Name"
                        name="bus_name" />
                </div>

                @error('bus_name')
                    <div class="text-danger pb-2">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Facilities</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Facilities"
                        name="facilities" />
                </div>

                @error('facilities')
                    <div class="text-danger pb-2">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Location</label>
                    <select class="form-select" name="route_id" aria-label="Default select example">
                        <option selected>----- Select Locations -----</option>
                        @foreach ($routes as $route)
                            <option value="{{ $route->route_id }}">{{ $route->from }} - {{ $route->to }}</option>
                        @endforeach
                    </select>
                </div>

                @error('route_id')
                    <div class="text-danger pb-2">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Operator</label>
                    <select class="form-select" name="operator_id" aria-label="Default select example">
                        <option selected>----- Select Operators -----</option>
                        @foreach ($operators as $operator)
                            <option value="{{ $operator->operator_id }}">{{ $operator->operator_name }}</option>
                        @endforeach
                    </select>
                </div>

                @error('operator_id')
                    <div class="text-danger pb-2">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Time</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Time"
                        name="time" />
                </div>

                @error('time')
                    <div class="text-danger pb-2">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Seat</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Seat"
                        name="seat" />
                </div>

                @error('seat')
                    <div class="text-danger pb-2">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date</label>
                    <input type="date" class="form-control" id="exampleFormControlInput1" name="date" />
                </div>

                @error('date')
                    <div class="text-danger pb-2">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Price</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Price"
                        name="price" />
                </div>

                @error('price')
                    <div class="text-danger pb-2">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-3">
                    <label for="img" class="form-label">Bus Image</label>
                    <input type="file" class="form-control" id="img" name="file" required/>
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Driver's Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Driver Name"
                        name="driver_name" />
                </div>

                @error('driver_name')
                    <div class="text-danger pb-2">
                        {{ $message }}
                    </div>
                @enderror

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Bus Number</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Bus Number"
                        name="bus_number" />
                </div>

                @error('bus_number')
                    <div class="text-danger pb-2">
                        {{ $message }}
                    </div>
                @enderror

                <div class="btnAdmin">
                    <button type="submit" class="btn btn-success">Add Bus &rarr;</button>
                </div>
            </form>
        </div>
    </div>

@endsection

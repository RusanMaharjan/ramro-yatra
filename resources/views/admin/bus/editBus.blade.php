@extends('layouts.main')
@section('pageTitle', 'Admin Edit Bus')
@section('content')
    
    <!-- update bus Page -->
    <div class="route pt-5 pb-5">
        <div class="fs-2 text-center mt-5">Edit Bus</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container route-container">
            <form action="{{ route('admin.updateBus') }}" method="post" class="pb-4" enctype="multipart/form-data">
                @csrf
                @if (Session::has('message'))
                    <script>
                        swal("Updated!!", "{!! Session::get('message') !!}", "success", {
                            button: "OK",
                        })
                    </script>
                @endif
                <div class="route-hb d-flex justify-content-between pt-4">
                    <div class="heading fs-3">
                        Update Bus
                    </div>
                    <a href="{{ route('admin.getBus') }}" class="admin-a-btn btn btn-success">All Bus &rarr;</a>
                </div>  
                <hr style="color: #000; height: 3px" class="mb-5" />
                
                <input type="hidden" name="bus_id" value="{{ $bus->bus_id }}">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Bus Name</label>
                    <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Bus Name"
                    name="bus_name"
                    value="{{ $bus->bus_name }}"
                    />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Facilities</label>
                    <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Facilities"
                    name="facilities"
                    value="{{ $bus->facilities }}"
                    />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Location</label>
                    <select class="form-select" name="route_id" aria-label="Default select example" aria-valuetext="{{ $bus->route->from }} - {{ $bus->route->to }}">
                        <option selected value="{{ $bus->route->route_id }}">{{ $bus->route->from }} - {{ $bus->route->to }}</option>
                        @foreach ($routes as $route)
                            <option value="{{ $route->route_id }}">{{ $route->from }} - {{ $route->to }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Operator</label>
                    <select class="form-select" name="operator_id" aria-label="Default select example">
                        <option selected value="{{ $bus->operator->operator_id }}">{{ $bus->operator->operator_name }}</option>
                        @foreach ($operators as $operator)
                            <option value="{{ $operator->operator_id }}">{{ $operator->operator_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Time</label>
                    <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Time"
                    name="time"
                    value="{{ $bus->time }}"
                    />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Seat</label>
                    <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Seat"
                    name="seat"
                    value="{{ $bus->seat }}"
                    />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date</label>
                    <input
                    type="date"
                    class="form-control"
                    id="exampleFormControlInput1"
                    name="date"
                    value="{{ $bus->date }}"
                    />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Price</label>
                    <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Price"
                    name="price"
                    value="{{ $bus->price }}"
                    />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Bus Image</label>
                    <input
                    type="file"
                    class="form-control"
                    id="exampleFormControlInput1"
                    name="file"
                    />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Driver's Name</label>
                    <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Driver Name"
                    name="driver_name"
                    value="{{ $bus->driver_name }}"
                    />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Bus Number</label>
                    <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Bus Number"
                    name="bus_number"
                    value="{{ $bus->bus_number }}"
                    />
                </div>
                <div class="btnAdmin">
                    <button type="submit" class="btn btn-success">Update Bus &rarr;</button>
                </div>
            </form>
        </div>
    </div>

@endsection
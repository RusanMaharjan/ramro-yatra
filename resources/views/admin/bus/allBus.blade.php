@extends('layouts.main')
@section('pageTitle', 'Admin All Bus')
@section('content')

    <!-- all bus Page -->
    <div class="route pt-5 pb-5">
        <div class="fs-2 text-center mt-5">All Bus</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container bus-container">
            @if (Session::has('message'))
                <script>
                    swal("Deleted!!", "{!! Session::get('message') !!}", "error", {
                        button: "OK",
                    })
                </script>
            @endif
            <div class="route-hb d-flex justify-content-between pt-4">
                <div class="heading fs-3">
                    All Bus
                </div>
                <a href="{{ route('admin.addBus') }}" class="admin-a-btn btn btn-success">Create Bus
                        &rarr;</a>
            </div>
            <hr style="color: #000; height: 3px" />

            <table class="table table-striped text-center" style="width: 100%; margin: auto;">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Bus Name</th>
                        <th>Facilities</th>
                        <th>Time</th>
                        <th>Date</th>
                        <th>Route</th>
                        <th>Location</th>
                        <th>Seat</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Driver Name</th>
                        <th>Bus Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($buses as $bus)                        
                        <tr>
                            <td>{{ $bus->bus_id }}</td>
                            <td>Tour Bus By {{ $bus->bus_name }}</td>
                            <td>{{ $bus->facilities }}</td>
                            <td>{{ $bus->time }}</td>
                            <td>{{ $bus->date }}</td>
                            <td>{{ $bus->route->from }} - {{ $bus->route->to }}a</td>
                            <td>{{ $bus->operator->operator_name }}</td>
                            <td>{{ $bus->seat }}</td>
                            <td>Rs. {{ $bus->price }}</td>
                            <td><img src="../img/{{ $bus->img }}" alt="bus" srcset="" width="100px" height="100px"></td>
                            <td>{{ $bus->driver_name }}</td>
                            <td>{{ $bus->bus_number }}</td>
                            <td>
                                <a href="/edit-bus/{{ $bus->bus_id }}"
                                        class="admin-a-action mb-2 btn btn-primary">Edit<i class="fas fa-edit admin-fa"></i></a>
                                <a href="/delete-bus/{{ $bus->bus_id }}" onclick="return confirm('Are you sure want to delete this bus?')" class="admin-a-action btn btn-danger">Delete<i
                                            class="fas fa-trash-alt admin-fa"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="d-flex mt-2 justify-content-center">
                {{ $buses->links() }}
            </div>
        </div>
    </div>

@endsection

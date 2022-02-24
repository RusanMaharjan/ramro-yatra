@extends('layouts.main')
@section('pageTitle', 'Select Seat')
@section('content')
    <div class="create-seat pt-3 pb-3">
        <div class="seat">
            <h2 class="text-center">Select Seat</h2>
            <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-4" />
            <div class="text-center">
                <label for="seat" class="form-label fw-bold">Only Choose {{ $bus->seat }} seats or less than {{ $bus->seat }}
                    seats.</label><br />
                <b>Remaining seat: </b>
                <label for="remSeat" id="remSeat" class="fw-bold">{{ $bus->seat }}</label><br />
            </div>

            <!-- <label for="error" id="error" class="fw-bold" style="color: red"></label> -->
            <form action="{{ route('seat') }}" method="post" class="mt-3 seatForm">
                @csrf
                @if (Session::has('message'))
                    <script>
                        swal("Added!!", "{!! Session::get('message') !!}", "success", {
                            button: "OK",
                        })
                    </script>
                @endif

                @if (Session::has('cancelled'))
                    <script>
                        swal("Cancelled!!", "{!! Session::get('cancelled') !!}", "error", {
                            button: "OK",
                        })
                    </script>
                @endif
                <input type="hidden" name="bus_id" value="{{ $bus->bus_id }}" readonly>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" readonly>
                <label for="busName" class="form-label">Bus Name</label>
                <input type="text" name="bus_name" value="{{ $bus->bus_name }}" class="form-control mb-3 mt-2" readonly />
                <label for="route" class="form-label">Bus Route</label>
                <input type="text" name="route" value="{{ $bus->route->from }} - {{ $bus->route->to }}"
                    class="form-control mb-3 mt-2" readonly />
                <label for="operator" class="form-label">Bus Operator</label>
                <input type="text" name="operator" value="{{ $bus->operator->operator_name }}"
                    class="form-control mb-3 mt-2" readonly />

                <label for="seatNumber" class="form-label">Select Seat</label> &nbsp; &nbsp;&nbsp;<label for="error" id="error" style="color: red"></label>
                <input type="number" class="form-control mb-3 changeValue" id="seatNumber" name="selected_seat"
                    placeholder="Select number of seat" data-max="50" pattern="[0-9]*" onkeyup="seatValidation()"/>
                @error('selected_seat')
                    <div class="text-danger pb-2">
                        {{ $message }}
                    </div>
                @enderror


                <label for="seatPrice" class="form-label">Seat Price</label>
                <input type="text" class="form-control mb-3 changeValue" name="price" id="seatPrice"
                    value="{{ $bus->price }}" readonly />

                <label for="totalPrice" class="form-label">Total Price</label>
                <input type="text" class="form-control" id="totalPrice" placeholder="total price" name="total_price" readonly />
                @error('total_price')
                    <div class="text-danger pb-2">
                        {{ $message }}
                    </div>
                @enderror
                <button class="btn btn-primary mt-2">
                    Select &rarr;
                </button>

                <div class="selected-seat mt-3 text-dark">
                    <table class="table table-striped text-center" style="width: 100%; margin: auto">
                        <thead>
                            <tr>
                                <th>Seat number</th>
                                <th>Seat Price</th>
                                <th>Total Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($seats as $seat)
                                <tr>
                                    <td>{{ $seat->selected_seat }}</td>
                                    <td>Rs. {{ $seat->price }}</td>
                                    <td>Rs. {{ $seat->total_price }}</td>
                                    <td>
                                            <a href="/cancel-seat/{{ $seat->seat_id }}" onclick="return confirm('You really want to cancel ticket?')" class="admin-a-action btn btn-danger">Cancel<i
                                                    class="fas fa-trash-alt admin-fa"></i></a>
                                            <a class="btnBus btn btn-primary" href="{{ route('user.payment',['seat_id' => $seat->seat_id]) }}">Pay &rarr;</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="payment mt-3 mb-3 text-center">

                </div>
            </form>
        </div>
    </div>
@endsection

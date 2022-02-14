@extends('layouts.main')
@section('pageTitle', 'Select Seat')
@section('content')
    <div class="create-seat pt-3 pb-3">
        <div class="seat">
            <h2 class="text-center">Select Seat</h2>
            <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-4" />
            <div class="text-center">
                <label for="seat" class="form-label fw-bold">Only Choose 47 seats or less than 47
                    seats.</label><br />
                <b>Remaining seat: </b>
                <label for="remSeat" id="remSeat" class="fw-bold">47</label><br />
            </div>

            <!-- <label for="error" id="error" class="fw-bold" style="color: red"></label> -->
            <form action="{{ route('seat') }}" method="post" class="mt-3 seatForm">
                @csrf
                @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <select class="form-select" name="bus_id" aria-label="Default select example">
                    <option value="{{ $bus->bus_id }}" selected >{{ $bus->bus_name }}</option>
                </select>
                {{-- <input type="text" name="bus_id" value="{{ $bus->bus_id }}"> --}}
                <label for="busName" class="form-label">Bus Name</label>
                <input type="text" name="bus_name" value="{{ $bus->bus_name }}" class="form-control mb-3 mt-2" readonly />
                <label for="route" class="form-label">Bus Route</label>
                <input type="text" name="route" value="{{ $bus->route->from }} - {{ $bus->route->to }}"
                    class="form-control mb-3 mt-2" readonly />
                <label for="operator" class="form-label">Bus Operator</label>
                <input type="text" name="operator" value="{{ $bus->operator->operator_name }}"
                    class="form-control mb-3 mt-2" readonly />
                <label for="seatNumber" class="form-label">Select Seat</label>
                <input type="number" class="form-control mb-3 changeValue" id="seatNumber" name="selected_seat"
                    placeholder="Select number of seat" data-max="50" pattern="[0-9]*" />

                <label for="seatPrice" class="form-label">Seat Price</label>
                <input type="text" class="form-control mb-3 changeValue" name="price" id="seatPrice" value="{{ $bus->price }}"
                    readonly />

                <label for="totalPrice" class="form-label">Total Price</label>
                <input type="text" class="form-control" id="totalPrice" name="total_price" readonly />
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
                            <tr>
                                <td>2</td>
                                <td>Rs. 1000</td>
                                <td>Rs. 2000</td>
                                <td>
                                    <button type="button" class="btn btn-primary mb-1">
                                        <a href="#" class="admin-a-action">Edit<i class="fas fa-edit admin-fa"></i></a>
                                    </button>
                                    <button type="button" class="btn btn-danger mb-1">
                                        <a href="#" class="admin-a-action">Cancel<i
                                                class="fas fa-trash-alt admin-fa"></i></a>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="payment mt-3 mb-3 text-center">
                    <button id="payment-button" class="btn btn-primary">
                        <a class="btnBus" href="{{ route('payment') }}">Go to payment &rarr;</a>
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

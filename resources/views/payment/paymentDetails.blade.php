@extends('layouts.main')
@section('pageTitle', 'Payment Details')
@section('content')

    <!-- all payment Page -->
    <div class="route pt-5 pb-5">
        <div class="fs-2 text-center mt-5">All Payment Details</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        
        

        <div class="container">
            <div class="route-hb d-flex justify-content-between pt-4">
                <div class="heading fs-3">
                    All Payments
                </div>

                <div class="references text-center">
                    <h6>Hint: Recent Payment will be on top</h6>
                </div>
            </div>
            <hr style="color: #000; height: 3px" />


            <table class="table table-striped text-center" style="width: 100%; margin: auto;">
                <thead>
                    <tr>
                        <th>Invoice Number</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Selected Seat</th>
                        <th>Price</th>
                        <th>Bus Name</th>
                        <th>Route</th>
                        <th>Departure Date</th>
                        <th>Operator</th>
                        <th>Payment Date</th>
                        <th>Get Ticket</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($payments as $payment)                        
                        <tr>
                            <td>{{ $payment->invoice_id }}</td>
                            <td>{{ $payment->name }}</td>
                            <td>{{ $payment->email }}</td>
                            <td>{{ $payment->phone }}</td>
                            <td>{{ $payment->selected_seat }}</td>
                            <td>Rs. {{ $payment->total_price }}</td>
                            <td>{{ $payment->bus_name }}</td>
                            <td>{{ $payment->seat->route }}</td>
                            <td>{{ $payment->seat->bus->date }}</td>
                            <td>{{ $payment->seat->operator }}</td>
                            <td>{{ $payment->created_at }}</td>
                            <td>
                                <a href="{{ route('user.ticket') }}" class="admin-a-action btn btn-primary">Get Ticket<i
                                        class="fas fa-edit admin-fa"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

@endsection

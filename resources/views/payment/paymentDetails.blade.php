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
                        <th>Board Point</th>
                        <th>Drop Point</th>
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
                            <td>{{ $payment->total_price }}</td>
                            <td>{{ $payment->bus_name }}</td>
                            <td>{{ $payment->from }}</td>
                            <td>{{ $payment->to }}</td>
                            <td>{{ $payment->date }}</td>
                            <td>{{ $payment->operator }}</td>
                            <td>{{ $payment->created_at }}</td>
                            <td>
                                <a href="{{ url('/getTicket', ['invoice_id' => $payment->invoice_id]) }}" class="admin-a-action btn btn-primary">Get Ticket<i
                                        class="fas fa-edit admin-fa"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
            <div class="d-flex mt-2 justify-content-center">
                {{ $payments->links() }}
            </div>
        </div>
    </div>

@endsection

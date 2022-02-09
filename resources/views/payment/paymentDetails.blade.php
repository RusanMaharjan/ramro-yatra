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
                    <tr>
                        <td>1</td>
                        <td>ABC</td>
                        <td>ABC@gmail.com</td>
                        <td>9840539880</td>
                        <td>2</td>
                        <td>Rs. 800</td>
                        <td>Kathmandu Yatayat</td>
                        <td>Kathmandu - Pokhara</td>
                        <td>7/02/200</td>
                        <td>Kathmandu Yatayat</td>
                        <td>7/02/2022</td>
                        <td>
                            <a href="{{ route('ticket') }}" class="admin-a-action btn btn-primary">Get Ticket<i
                                    class="fas fa-edit admin-fa"></i></a>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

@endsection

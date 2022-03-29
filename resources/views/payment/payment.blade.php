@extends('layouts.main')
@section('pageTitle', 'Payment')
@section('content')

    <!-- Payment Page -->
    <div class="route pt-5 pb-4">
        <div class="fs-2 text-center mt-5">Checkout</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-3" />
        {{-- @if (Session::has('message'))
                        <div class="alert alert-success">
                            {{ Session::get('message') }}
                        </div>
                    @endif --}}

        <div class="container-fluid">
            <form action="{{ route('createPayment') }}" method="post">
                @csrf
                <div class="payment-container paymentFlex justify-content-center">

                    <div class="basic-container m-4 p-2">
                        <h3>Basic Details</h3>
                        <hr>
                        <div class="flex">
                            <input type="hidden" class="user_id" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" class="seat_id" name="seat_id" value="{{ $seat->seat_id }}">
                            <div class="mb-3 right">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" class="form-control name" id="exampleFormControlInput1" name="name"
                                    placeholder="Enter Name.." value="{{ Auth::user()->name }}" readonly />
                            </div>

                            <div class="mb-3 left">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="text" class="form-control email" id="exampleFormControlInput1" name="email"
                                    placeholder="Enter email.." value="{{ Auth::user()->email }}" readonly />
                            </div>
                        </div>

                        <div class="flex">
                            <div class="mb-3 right">
                                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                <input type="text" class="form-control phone" id="exampleFormControlInput1" name="phone"
                                    placeholder="Enter phone.." value="{{ Auth::user()->phone }}" readonly />
                            </div>

                            <div class="mb-3 left">
                                <label for="exampleFormControlInput1" class="form-label">PaymentId</label>
                                <input type="text" class="form-control address" id="exampleFormControlInput1"
                                    name="payment_id" readonly />
                            </div>
                        </div>

                        <div class="flex">
                            <div class="mb-3 right">
                                <label for="exampleFormControlInput1" class="form-label">From</label>
                                <input type="text" class="form-control from" id="exampleFormControlInput1" name="from"
                                    value="{{ $seat->bus->route->from }}" readonly />
                            </div>

                            <div class="mb-3 left">
                                <label for="exampleFormControlInput1" class="form-label">To</label>
                                <input type="text" class="form-control to" id="exampleFormControlInput1" name="to"
                                    value="{{ $seat->bus->route->to }}" readonly />
                            </div>
                        </div>

                        <div class="flex">
                            <div class="mb-3 right">
                                <label for="exampleFormControlInput1" class="form-label">Operator</label>
                                <input type="text" class="form-control operator" id="exampleFormControlInput1"
                                    name="operator" value="{{ $seat->operator }}" readonly />
                            </div>

                            <div class="mb-3 left">
                                <label for="exampleFormControlInput1" class="form-label">Date</label>
                                <input type="text" class="form-control date" id="exampleFormControlInput1" name="date"
                                    value="{{ $seat->bus->date }}" readonly />
                            </div>
                        </div>

                    </div>

                    <div class="seat-container m-4 p-2">
                        <h3>Seat Details</h3>
                        <hr>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Bus Name</label>
                            <input type="text" class="form-control bus_name" id="exampleFormControlInput1" name="bus_name"
                                placeholder="Enter bus name.." value="{{ $seat->bus_name }}" />
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Selected Seat</label>
                            <input type="text" class="form-control selected_seat" id="exampleFormControlInput1"
                                name="selected_seat" placeholder="Enter seat.." value="{{ $seat->selected_seat }}" />
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Total Price</label>
                            <input type="text" class="form-control total_price" id="exampleFormControlInput1"
                                name="total_price" placeholder="Enter total price.."
                                value="Rs. {{ $seat->total_price }}" />
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Pay with</label><br>
                            <div id="paypal-button-container"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script
src="https://www.paypal.com/sdk/js?client-id=AYO1XWOIGQGtU5na-g-r76Jr2HF2HTUhcTlpKqS8pWCmCtaa_Jot-RevaJ2NhQxmL8iX8OuRge1Qm9hH&currency=USD">
</script>

<script>
    paypal.Buttons({

        // Sets up the transaction when a payment button is clicked
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '{{ $seat->total_price }}' 
                    }
                }]
            });
        },

        // Finalize the transaction after payer approval
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(orderData) {
                // Successful capture! For dev/demo purposes:
                swal("Success!!", "Payment Success", "success", {
                    button: "OK",
                })

                var user_id = $('.user_id').val();
                var seat_id = $('.seat_id').val();
                var name = $('.name').val();
                var email = $('.email').val();
                var phone = $('.phone').val();
                var from = $('.from').val();
                var to = $('.to').val();
                var operator = $('.operator').val();
                var date = $('.date').val();
                var bus_name = $('.bus_name').val();
                var selected_seat = $('.selected_seat').val();
                var total_price = $('.total_price').val();

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: "post",
                    url: "/create-payment",
                    data: {
                        "user_id": user_id,
                        "seat_id": seat_id,
                        "name": name,
                        "email": email,
                        "phone": phone,
                        "from": from,
                        "to": to,
                        "operator": operator,
                        "date": date,
                        "bus_name": bus_name,
                        "selected_seat": selected_seat,
                        "total_price": total_price,
                        "payment_id": orderData.id
                    },
                    success: function(response) {
                        swal(response.status);
                    }
                });
            });
        }
    }).render('#paypal-button-container');
</script>

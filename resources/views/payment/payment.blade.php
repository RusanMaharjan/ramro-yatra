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
                            <input type="text" class="user_id" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="text" class="seat_id" name="seat_id" value="{{ $seat->seat_id }}">
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
                                <label for="exampleFormControlInput1" class="form-label">Address</label>
                                <input type="text" class="form-control address" id="exampleFormControlInput1" name="address"
                                    placeholder="Enter address.."/>
                                    @error('address')
                                        <div class="text-danger mb-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>
                        </div>

                        <div class="flex">
                            <div class="mb-3 right">
                                <label for="exampleFormControlInput1" class="form-label">City</label>
                                <input type="text" class="form-control city" id="exampleFormControlInput1" name="city"
                                    placeholder="Enter city.."/>
                                    @error('city')
                                        <div class="text-danger mb-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>

                            <div class="mb-3 left">
                                <label for="exampleFormControlInput1" class="form-label">Provience</label>
                                <input type="text" class="form-control province" id="exampleFormControlInput1"
                                    name="province" placeholder="Enter provience.."/>
                                    @error('province')
                                        <div class="text-danger mb-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>
                        </div>

                        <div class="flex">
                            <div class="mb-3 right">
                                <label for="exampleFormControlInput1" class="form-label">Country</label>
                                <input type="text" class="form-control country" id="exampleFormControlInput1" name="country"
                                    placeholder="Enter country name.."/>
                                    @error('country')
                                        <div class="text-danger mb-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>

                            <div class="mb-3 left">
                                <label for="exampleFormControlInput1" class="form-label">Pin Code</label>
                                <input type="text" class="form-control pincode" id="exampleFormControlInput1" name="pincode"
                                    placeholder="Enter pin code.."/>
                                    @error('pincode')
                                        <div class="text-danger mb-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>
                        </div>

                        <div class="flex">
                            <div class="mb-3 right">
                                <label for="exampleFormControlInput1" class="form-label">Country</label>
                                <input type="text" class="form-control country" id="exampleFormControlInput1" name="from"
                                    value="{{ $seat->bus->route->from }}"/>
                            </div>

                            <div class="mb-3 left">
                                <label for="exampleFormControlInput1" class="form-label">Pin Code</label>
                                <input type="text" class="form-control pincode" id="exampleFormControlInput1" name="to"
                                    value="{{ $seat->bus->route->to }}"/>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="mb-3 right">
                                <label for="exampleFormControlInput1" class="form-label">Country</label>
                                <input type="text" class="form-control country" id="exampleFormControlInput1" name="operator"
                                    value="{{ $seat->bus->operator->operator_name }}"/>
                            </div>

                            <div class="mb-3 left">
                                <label for="exampleFormControlInput1" class="form-label">Pin Code</label>
                                <input type="text" class="form-control pincode" id="exampleFormControlInput1" name="date"
                                    value="{{ $seat->bus->date }}"/>
                            </div>
                        </div>

                    </div>

                    <div class="seat-container m-4 p-2">
                        <h3>Seat Details</h3>
                        <hr>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Bus Name</label>
                            <input type="text" class="form-control bus_name" id="exampleFormControlInput1" name="bus_name"
                                placeholder="Enter bus name.." value="{{ $seat->bus_name }}"/>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Selected Seat</label>
                            <input type="text" class="form-control selected_seat" id="exampleFormControlInput1"
                                name="selected_seat" placeholder="Enter seat.." value="{{ $seat->selected_seat }}"/>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Total Price</label>
                            <input type="text" class="form-control total_price" id="exampleFormControlInput1"
                                name="total_price" placeholder="Enter total price.." value="Rs. {{ $seat->total_price }}"/>
                        </div>

                        <input type="text" name="payment_id">

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Pay with</label><br>
                            <button class="btn btn-primary">Pay</button>
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
                        value: '{{ $seat->total_price }}' // Can reference variables or functions. Example: `value: document.getElementById('...').value`
                    }
                }]
            });
        },

        // Finalize the transaction after payer approval
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(orderData) {
                // Successful capture! For dev/demo purposes:
                // console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];
                alert('Transaction ' + transaction.status + ': ' + transaction.id +
                    '\n\nSee console for all available details');

                var user_id = $('user_id').val();
                var seat_id = $('seat_id').val();
                var name = $('name').val();
                var email = $('email').val();
                var phone = $('phone').val();
                var address = $('address').val();
                var city = $('city').val();
                var province = $('province').val();
                var country = $('country').val();
                var pincode = $('pincode').val();
                var bus_name = $('bus_name').val();
                var selected_seat = $('selected_seat').val();
                var total_price = $('total_price').val();

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
                        "address": address,
                        "city": city,
                        "province": province,
                        "country": country,
                        "pincode": pincode,
                        "bus_name": bus_name,
                        "selected_seat": selected_seat,
                        "total_price": total_price,
                        "payment_id": orderData.id
                    },
                    success: function(response) {
                        swal(response.status);
                        alert('Payment Success');
                    }
                });

                // When ready to go live, remove the alert and show a success message within this page. For example:
                // var element = document.getElementById('paypal-button-container');
                // element.innerHTML = '';
                // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                // Or go to another URL:  actions.redirect('thank_you.html');
            });
        }
    }).render('#paypal-button-container');
</script>

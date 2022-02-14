@extends('layouts.main')
@section('pageTitle', 'Payment')
@section('content')

    <!-- Payment Page -->
    <div class="route pt-5 pb-4">
        <div class="fs-2 text-center mt-5">Checkout</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-3" />

        <div class="container-fluid">
            <form action="">

                <div class="payment-container paymentFlex justify-content-center">
                    <div class="basic-container m-4 p-2">
                        <h3>Basic Details</h3>
                        <hr>
                        <div class="flex">
                            <div class="mb-3 right">
                                <label for="exampleFormControlInput1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter Name.." required />
                            </div>

                            <div class="mb-3 left">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter email.." required />
                            </div>
                        </div>

                        <div class="flex">
                            <div class="mb-3 right">
                                <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter phone.." required />
                            </div>

                            <div class="mb-3 left">
                                <label for="exampleFormControlInput1" class="form-label">Address</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter address.." required />
                            </div>
                        </div>

                        <div class="flex">
                            <div class="mb-3 right">
                                <label for="exampleFormControlInput1" class="form-label">City</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter city.." required />
                            </div>

                            <div class="mb-3 left">
                                <label for="exampleFormControlInput1" class="form-label">Provience</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter provience.." required />
                            </div>
                        </div>

                        <div class="flex">
                            <div class="mb-3 right">
                                <label for="exampleFormControlInput1" class="form-label">Country</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter country name.." required />
                            </div>

                            <div class="mb-3 left">
                                <label for="exampleFormControlInput1" class="form-label">Pin Code</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Enter pin code.." required />
                            </div>
                        </div>

                    </div>

                    <div class="seat-container m-4 p-2">
                        <h3>Seat Details</h3>
                        <hr>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Bus Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter bus name.." required />
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Selected Seat</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter seat.." required />
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Total Price</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="Enter total price.." required />
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Pay with</label><br>
                            <button class="btn btn-success">Pay with paypal</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

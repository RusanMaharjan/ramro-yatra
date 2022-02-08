@extends('layouts.main')
@section('pageTitle', 'Payment')
@section('content')

    <!-- Payment Page -->
    <div class="route pt-5 pb-4">
        <div class="fs-2 text-center mt-5">Payment</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container route-container mb-5">
            <form action="" method="post" class="pb-4">
                <div class="route-hb d-flex justify-content-between pt-4">
                    <div class="heading fs-3">
                        Pay Here &rarr;
                    </div>
                </div>
                <hr style="color: #000; height: 3px" class="mb-5" />

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">User Id</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="1" name="" required />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="name" name="" required />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="email" name=""
                        required />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="phone" name=""
                        required />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Selected Seat</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="seat number" name=""
                        required />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Price</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="price" name=""
                        required />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Bus name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="busname" name=""
                        required />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Route</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="route" name=""
                        required />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Operator</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" value="operator" name=""
                        required />
                </div>
                <div class="btnAdmin">
                    <a href="ticket.html" class="btn btn-success">Pay &rarr;</a>
                    <button type="submit" class="btn btn-success">Pay &rarr;</button>
                </div>

            </form>
        </div>
    </div>

@endsection

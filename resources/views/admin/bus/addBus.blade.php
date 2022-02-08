@extends('layouts.main')
@section('pageTitle', 'Admin Bus')
@section('content')

    <!-- add bus Page -->
    <div class="route pt-5 pb-5">
        <div class="fs-2 text-center mt-5">Add Bus</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container route-container">
            <form action="" method="post" class="pb-4">
                <div class="route-hb d-flex justify-content-between pt-4">
                    <div class="heading fs-3">
                        Create Bus
                    </div>
                    <button type="button" class="btn btn-success"><a href="allBus.html" class="admin-a-btn">All Bus &rarr;</a></button>
                </div>  
                <hr style="color: #000; height: 3px" class="mb-5" />
                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Bus Name</label>
                    <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Bus Name"
                    name=""
                    required
                    />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Facilities</label>
                    <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Facilities"
                    name=""
                    required
                    />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Location</label>
                    <select class="form-select" name="" aria-label="Default select example">
                        <option selected>----- Select Locations -----</option>
                        <option value="1">Kathmandu-Chitwan</option>
                        <option value="2">Hetauda-Pokhara</option>
                        <option value="3">Kathmandu-Pokhara</option>
                      </select>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Operator</label>
                    <select class="form-select" name="" aria-label="Default select example">
                        <option selected>----- Select Operators  -----</option>
                        <option value="1">Kathmandu Yatayat</option>
                        <option value="2">Hetauda Yatayat</option>
                        <option value="3">Kathmandu Fast Track</option>
                      </select>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Time</label>
                    <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Time"
                    name=""
                    required
                    />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Seat</label>
                    <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Seat"
                    required
                    />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Date</label>
                    <input
                    type="date"
                    class="form-control"
                    id="exampleFormControlInput1"
                    name=""
                    required
                    />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Price</label>
                    <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Price"
                    name=""
                    required
                    />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Bus Image</label>
                    <input
                    type="file"
                    class="form-control"
                    id="exampleFormControlInput1"
                    name=""
                    required
                    />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Driver's Name</label>
                    <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Driver Name"
                    name=""
                    required
                    />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Bus Number</label>
                    <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Bus Number"
                    name=""
                    required
                    />
                </div>
                <div class="btnAdmin">
                    <button type="submit" class="btn btn-success">Add Bus &rarr;</button>
                </div>
            </form>
        </div>
    </div>

@endsection
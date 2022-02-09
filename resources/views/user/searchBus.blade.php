@extends('layouts.main')
@section('pageTitle', 'Search BUs')
@section('content')

    <!-- Search Bus main body section -->
    <div class="section-bus">
        <div class="container">
            <h2 class="text-center pt-4">All Bus</h2>
            <hr style="width: 20%; margin: auto; color: #000; height: 3px" />
            <div class="forFlex mt-5">
                <div class="row">
                    <div class="first col-lg-5 col-md-6 mb-5">
                        <div class="price-operator">
                            <h3 class="text-center mt-2">Filter Bus</h3>
                            <hr style="height: 3px">
                            <form action="">
                                <div class="m-3 col-lg">
                                    <label for="price" class="form-label bus-label">Bus Price</label>
                                    <input type="search" class="form-control p-2" id="price" placeholder="Search by price"
                                        name="search2" />
                                </div>
                                <div class="m-3 col-lg">
                                    <label for="date" class="form-label bus-label">Date</label>
                                    <input type="date" class="form-control p-2" id="date" name="search3" />
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-primary bus-btn p-2">
                                        Filter Bus &rarr;
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="bus-lists col-lg-7 col-md-6">
                        <div class="list-of-bus mb-4">
                            <div class="priceFlex">
                                <div class="bus-des">
                                    <div class="row">
                                        <div class="bus-image col-lg-9">
                                            <div class="row">
                                                <div class="image col-lg-3">
                                                    <img src="{{ url('frontend/img/night-road.jpeg') }}" alt="bus" width="100px"
                                                        height="100px" />
                                                </div>
                                                <div class="desc col-lg-9">
                                                    <h4>Tourist Bus By Pokhara Yatayat</h4>
                                                    <h5>Facilities:</h5>
                                                    Wifi, Ac, Music System, Charging Port
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex-price col-lg-3">
                                            <h4>Price</h4>
                                            <h5 class="mb-3">Rs. 800</h5>
                                            <button type="button" class="btn btn-primary mb-3">
                                                <a class="btnBus" href="details.html">Select &rarr;</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-desc">
                                <i class="fas fa-location fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">kathmandu -
                                        pokhara</span></i>
                                <br />
                                <i class="fas fa-clock fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">6:30
                                        AM</span></i>
                                <br />
                                <i class="fas fa-chair-office fs-5">&nbsp; &nbsp;<span class="location-span">20 Available
                                        Seats</span></i>
                            </div>
                        </div>
                        <div class="list-of-bus mb-4">
                            <div class="priceFlex">
                                <div class="bus-des">
                                    <div class="row">
                                        <div class="bus-image col-lg-9">
                                            <div class="row">
                                                <div class="image col-lg-3">
                                                    <img src="{{ url('frontend/img/night-road.jpeg') }}" alt="bus" width="100px"
                                                        height="100px" />
                                                </div>
                                                <div class="desc col-lg-9">
                                                    <h4>Tourist Bus By Pokhara Yatayat</h4>
                                                    <h5>Facilities:</h5>
                                                    Wifi, Ac, Music System, Charging Port
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex-price col-lg-3">
                                            <h4>Price</h4>
                                            <h5 class="mb-3">Rs. 800</h5>
                                            <button type="button" class="btn btn-primary mb-3">
                                                <a class="btnBus" href="details.html">Select &rarr;</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-desc">
                                <i class="fas fa-location fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">kathmandu -
                                        pokhara</span></i>
                                <br />
                                <i class="fas fa-clock fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">6:30
                                        AM</span></i>
                                <br />
                                <i class="fas fa-chair-office fs-5">&nbsp; &nbsp;<span class="location-span">20 Available
                                        Seats</span></i>
                            </div>
                        </div>
                        <div class="list-of-bus mb-4">
                            <div class="priceFlex">
                                <div class="bus-des">
                                    <div class="row">
                                        <div class="bus-image col-lg-9">
                                            <div class="row">
                                                <div class="image col-lg-3">
                                                    <img src="{{ url('frontend/img/night-road.jpeg') }}" alt="bus" width="100px"
                                                        height="100px" />
                                                </div>
                                                <div class="desc col-lg-9">
                                                    <h4>Tourist Bus By Pokhara Yatayat</h4>
                                                    <h5>Facilities:</h5>
                                                    Wifi, Ac, Music System, Charging Port
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex-price col-lg-3">
                                            <h4>Price</h4>
                                            <h5 class="mb-3">Rs. 800</h5>
                                            <button type="button" class="btn btn-primary mb-3">
                                                <a class="btnBus" href="details.html">Select &rarr;</a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-desc">
                                <i class="fas fa-location fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">kathmandu -
                                        pokhara</span></i>
                                <br />
                                <i class="fas fa-clock fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">6:30
                                        AM</span></i>
                                <br />
                                <i class="fas fa-chair-office fs-5">&nbsp; &nbsp;<span class="location-span">20 Available
                                        Seats</span></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

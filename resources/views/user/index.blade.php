@extends('layouts.main')
@section('pageTitle', 'Home')
@section('content')

    <!-- Home Showcase -->
    <div class="showcase">
        <div class="container">
            <div class="text">
                <h1 class="text-center fs-1 text-uppercase">
                    Need A Ticket For a Tour?
                </h1>
                <br />
                <h2 class="text-center fs-4">YOU'VE COME TO THE RIGHT PLACE.</h2>
                <hr style="width: 30%; margin: auto; color: #fff; height: 3px" />
            </div>

            <div class="buttons">
                <div class="container d-flex justify-content-center mt-3">
                    <button type="button" class="btn btn-primary butn p-2 mr-5 buton button-hover text-uppercase">
                        <a href="./pages/searchBus.html" class="text-decoration-none searchBusLink">Search Buses</a>
                    </button>
                    <button type="button" class="btn btn-light buton text-uppercase why-us">
                        <a href="#whyUs" class="text-decoration-none">Why Us</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- All Bus slider-->
    <div class="wrap">
        <div class="wrapper">
            <h2 class="text-center mt-2" id="allBus">All Buses</h2>
            <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-4" />
            <div class="carousel owl-carousel">
                <div class="card card-1">
                    <img class="slider-img" src="{{ url('frontend/img/bus.jfif') }}" alt="img1">
                    <i class="fas fa-location fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;Kathmandu - Pokhara</i>
                    <i class="fas fa-calendar fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;2022/02/06</i>
                    <a href="./pages/details.html" class="text-light text-decoration-none btn btn-primary"> View Bus</a>
                </div>

                <div class="card card-1">
                    <img class="slider-img" src="{{ url('frontend/img/bus.jfif') }}" alt="img1">
                    <i class="fas fa-location fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;Kathmandu - Pokhara</i>
                    <i class="fas fa-calendar fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;2022/02/06</i>
                    <a href="./pages/details.html" class="text-light text-decoration-none btn btn-primary"> View Bus</a>
                </div>

                <div class="card card-1">
                    <img class="slider-img" src="{{ url('frontend/img/bus.jfif') }}" alt="img1">
                    <i class="fas fa-location fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;Kathmandu - Pokhara</i>
                    <i class="fas fa-calendar fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;2022/02/06</i>
                    <a href="./pages/details.html" class="text-light text-decoration-none btn btn-primary"> View Bus</a>
                </div>

                <div class="card card-1">
                    <img class="slider-img" src="{{ url('frontend/img/bus.jfif') }}" alt="img1">
                    <i class="fas fa-location fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;Kathmandu - Pokhara</i>
                    <i class="fas fa-calendar fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;2022/02/06</i>
                    <a href="./pages/details.html" class="text-light text-decoration-none btn btn-primary"> View Bus</a>
                </div>

                <div class="card card-1">
                    <img class="slider-img" src="{{ url('frontend/img/bus.jfif') }}" alt="img1">
                    <i class="fas fa-location fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;Kathmandu - Pokhara</i>
                    <i class="fas fa-calendar fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;2022/02/06</i>
                    <a href="./pages/details.html" class="text-light text-decoration-none btn btn-primary"> View Bus</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Today's Bus slider-->
    <div class="wrap">
        <div class="wrapper">
            <h2 class="text-center mt-2" id="allBus">Today's Buses</h2>
            <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-4" />
            <div class="carousel owl-carousel">
                <div class="card card-1">
                    <img class="slider-img" src="{{ url('frontend/img/bus.jfif') }}" alt="img1">
                    <i class="fas fa-location fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;Kathmandu - Pokhara</i>
                    <i class="fas fa-calendar fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;2022/02/06</i>
                    <a href="./pages/details.html" class="text-light text-decoration-none btn btn-primary"> View Bus</a>
                </div>

                <div class="card card-1">
                    <img class="slider-img" src="{{ url('frontend/img/bus.jfif') }}" alt="img1">
                    <i class="fas fa-location fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;Kathmandu - Pokhara</i>
                    <i class="fas fa-calendar fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;2022/02/06</i>
                    <a href="./pages/details.html" class="text-light text-decoration-none btn btn-primary"> View Bus</a>
                </div>

                <div class="card card-1">
                    <img class="slider-img" src="{{ url('frontend/img/bus.jfif') }}" alt="img1">
                    <i class="fas fa-location fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;Kathmandu - Pokhara</i>
                    <i class="fas fa-calendar fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;2022/02/06</i>
                    <a href="./pages/details.html" class="text-light text-decoration-none btn btn-primary"> View Bus</a>
                </div>

                <div class="card card-1">
                    <img class="slider-img" src="{{ url('frontend/img/bus.jfif') }}" alt="img1">
                    <i class="fas fa-location fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;Kathmandu - Pokhara</i>
                    <i class="fas fa-calendar fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;2022/02/06</i>
                    <a href="./pages/details.html" class="text-light text-decoration-none btn btn-primary"> View Bus</a>
                </div>

                <div class="card card-1">
                    <img class="slider-img" src="{{ url('frontend/img/bus.jfif') }}" alt="img1">
                    <i class="fas fa-location fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;Kathmandu - Pokhara</i>
                    <i class="fas fa-calendar fs-5 pt-2 pb-2 text-light">&nbsp;&nbsp;2022/02/06</i>
                    <a href="./pages/details.html" class="text-light text-decoration-none btn btn-primary"> View Bus</a>
                </div>
            </div>
        </div>
    </div>

    <!-- #0d6efd blue color as button primary color-->
    <!-- Why Us -->
    <div class="whyUs" id="whyUs">
        <div class="container g-3">
            <h2 class="text-center mt-5">Why Purchase Ticket From Us</h2>
            <h3 class="text-center">A Smart Way To Travel</h3>
            <hr style="width: 20%; margin: auto; color: #000; height: 3px" />
            <div class="row">
                <div class="col-lg mt-5 text-center">
                    <div class="easy">
                        <i class="far fa-clock wu"></i>
                        <br />
                        <h3 class="text-center pb-3">Quick And Easy</h3>
                    </div>
                </div>

                <div class="col-lg mt-5 text-center">
                    <div class="choices">
                        <i class="fas fa-map-signs wu"></i>
                        <br />
                        <h3 class="text-center">Plenty of Choices</h3>
                    </div>
                </div>

                <div class="col-lg mt-5 text-center">
                    <div class="prices">
                        <i class="fas fa-dollar-sign wu"></i>
                        <br />
                        <h3 class="text-center">Unbeatable Prices</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Stats -->
    <div class="stats" id="stats">
        <div class="container">
            <h2 class="text-center mt-5 pt-3">Our Stats</h2>
            <hr style="width: 20%; margin: auto; color: #000; height: 3px" />
            <div class="row g-3 pb-5">
                <div class="col-lg mt-3 stat-text">
                    <div class="name text-center fs-1">Routes</div>
                    <div class="number text-center fs-2">30+</div>
                    <div class="description text-center fs-5">Routes Available</div>
                </div>

                <div class="col-lg mt-3 stat-text">
                    <div class="name text-center fs-1">Buses</div>
                    <div class="number text-center fs-2">50+</div>
                    <div class="description text-center fs-5">Bus Available</div>
                </div>

                <div class="col-lg mt-3 stat-text">
                    <div class="name text-center fs-1">Customers</div>
                    <div class="number text-center fs-2">1000+</div>
                    <div class="description text-center fs-5">
                        Happy Customers Using Our System
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- All Routes -->
    <div class="routes" id="routes">
        <h2 class="text-center mt-5">All Routes</h2>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" />
        <div class="container">
            <div class="row g-4 text-center mt-3 mb-4">
                <div class="col-lg-4">
                    <div class="addresses fs-5">Kathmandu-Pokhara</div>
                    <div class="addresses fs-5">Kathmandu-Chitwan</div>
                    <div class="addresses fs-5">Kathmandu-Birgunj</div>
                    <div class="addresses fs-5">Pokhara-Chitwan</div>
                </div>

                <div class="col-lg-4">
                    <div class="addresses fs-5">Pokhara-Bandipur</div>
                    <div class="addresses fs-5">Hetauda-Pokhara</div>
                    <div class="addresses fs-5">Kathmandu-Mustang</div>
                    <div class="addresses fs-5">Rasuwa-Kathmandu</div>
                </div>

                <div class="col-lg-4">
                    <div class="addresses fs-5">TatoPani-pokhara</div>
                    <div class="addresses fs-5">Chitwan-Palpa</div>
                    <div class="addresses fs-5">Kathmandu-Palpa</div>
                    <div class="addresses fs-5">Kathmandu-Dhading</div>
                </div>
            </div>
            <div class="buttons mb-5">
                <div class="container d-flex justify-content-center">

                    <a href="./pages/searchBus.html" class="btn btn-primary">All Routes &rarr;</a>
                </div>
            </div>

        </div>
    </div>

@endsection

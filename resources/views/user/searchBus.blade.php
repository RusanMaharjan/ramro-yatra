@extends('layouts.main')
@section('pageTitle', 'Search Bus')
@section('content')

    <!-- Search Bus main body section -->
    <div class="search-bus mt-5 pt-2" id="searchBus">
        <div class="container-fluid">
            <h2 class="searchBus pt-5 text-uppercase text-center">Search Bus</h2>
            <hr style="width: 20%; margin: auto; color: #000; height: 3px" />
            <form action="" class="p-4">
                <div class="row g-3">
                    <div class="m-3 col-lg">
                        <label for="bus_name" class="form-label bus-label">Bus Name</label>
                        <input type="search" class="form-control p-2" id="bus_name"
                            placeholder="Search from bus name: like - Pokhara Yatayat, Kathmandu yatayat" name="search" />

                    </div>
                    <div class="m-3 col-lg">
                        <label for="time" class="form-label bus-label">Time</label>
                        <input type="search" class="form-control p-2" id="time"
                            placeholder="Search from time: like - 6:00 AM, 5:00 AM" name="search1" />
                    </div>

                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary bus-btn p-2">
                            Search Bus &rarr;
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

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
                        @if ($buses->count() > 0)
                            @foreach ($buses as $bus)
                            @if (Carbon\Carbon::today()->ne($bus->date))
                                <div class="list-of-bus mb-4">
                                    <div class="priceFlex">
                                        <div class="bus-des">
                                            <div class="row">
                                                <div class="bus-image col-lg-9">
                                                    <div class="row">
                                                        <div class="image col-lg-3">
                                                            <img src="{{ url('img') }}/{{ $bus->img }}" alt="bus"
                                                                width="100px" height="100px" />
                                                        </div>
                                                        <div class="desc col-lg-9">
                                                            <h4>Tourist Bus By {{ $bus->bus_name }} <span class="text-danger">(Date Expired)</span></h4>
                                                            <h5>Facilities:</h5>
                                                            {{ $bus->facilities }}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="flex-price col-lg-3">
                                                    <h4>Price</h4>
                                                    <h5 class="mb-3">Rs. {{ $bus->price }}</h5>
                                                    <button type="button" class="btn btn-primary mb-3">
                                                        <a class="btnBus pointer-event"
                                                            href="{{ route('busDetails', ['bus_id' => $bus->bus_id]) }}">Select
                                                            &rarr;</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-desc">
                                        <i class="fas fa-location fs-5 pb-2">&nbsp; &nbsp;<span
                                                class="location-span">{{ $bus->route->from }} -
                                                {{ $bus->route->to }}</span></i>
                                        <br />
                                        <i class="fas fa-clock fs-5 pb-2">&nbsp; &nbsp;<span
                                                class="location-span">{{ $bus->time }}</span></i>
                                        <br />
                                        <i class="fas fa-chair-office fs-5">&nbsp; &nbsp;<span
                                                class="location-span">{{ $bus->seat }} Available
                                                Seats</span></i>
                                    </div>
                                </div>
                            @else
                                <div class="list-of-bus mb-4">
                                    <div class="priceFlex">
                                        <div class="bus-des">
                                            <div class="row">
                                                <div class="bus-image col-lg-9">
                                                    <div class="row">
                                                        <div class="image col-lg-3">
                                                            <img src="{{ url('img') }}/{{ $bus->img }}" alt="bus"
                                                                width="100px" height="100px" />
                                                        </div>
                                                        <div class="desc col-lg-9">
                                                            <h4>Tourist Bus By {{ $bus->bus_name }}</h4>
                                                            <h5>Facilities:</h5>
                                                            {{ $bus->facilities }}
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="flex-price col-lg-3">
                                                    <h4>Price</h4>
                                                    <h5 class="mb-3">Rs. {{ $bus->price }}</h5>
                                                    <button type="button" class="btn btn-primary mb-3">
                                                        <a class="btnBus"
                                                            href="{{ route('busDetails', ['bus_id' => $bus->bus_id]) }}">Select
                                                            &rarr;</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-desc">
                                        <i class="fas fa-location fs-5 pb-2">&nbsp; &nbsp;<span
                                                class="location-span">{{ $bus->route->from }} -
                                                {{ $bus->route->to }}</span></i>
                                        <br />
                                        <i class="fas fa-clock fs-5 pb-2">&nbsp; &nbsp;<span
                                                class="location-span">{{ $bus->time }}</span></i>
                                        <br />
                                        <i class="fas fa-chair-office fs-5">&nbsp; &nbsp;<span
                                                class="location-span">{{ $bus->seat }} Available
                                                Seats</span></i>
                                    </div>
                                </div>
                            @endif
                            @endforeach
                        @else
                            <div class="alert alert-danger text-center" role="alert">
                                !!! No Bus Found !!!
                            </div>
                        @endif
                        <div class="d-flex mt-2 justify-content-center">
                            {{ $buses->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

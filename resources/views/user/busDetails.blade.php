@extends('layouts.main')
@section('pageTitle', 'Bus Details')
@section('content')

    <!-- bus details -->
    {{-- <div class="bus-details container-fluid mt-5">
        <div class="bus-details">
            <div class="bus">
                <div class="details text-center">
                    <h2>Bus Details</h2>
                    <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-4" />
                    <img src="{{ url('img') }}/{{ $bus->img }}" alt="bus" class="busImg" width="500px" height="300px" />
                    <div class="bd">
                        <h3>Tourist Bus By {{ $bus->bus_name }}</h3>
                        <h4>Facilities:</h4>
                        {{ $bus->facilities }}

                        <br />
                        <br />
                        <i class="fas fa-location fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">{{ $bus->route->from }} - {{ $bus->route->to }}</span></i>
                        <br />
                        <i class="fas fa-clock fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">{{ $bus->time }}</span></i>
                        <br />
                        <i class="fas fa-chair-office fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">{{ $bus->seat }} Available
                                Seats</span></i>
                        <br />
                        <i class="fas fa-user fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">{{ $bus->driver_name }}</span></i>
                        <br />
                        <i class="fas fa-bus-school fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">{{ $bus->bus_number }}</span></i>
                        <br />
                        <i class="fas fa-rupee-sign fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">Rs. {{ $bus->price }}</span></i>
                    </div>

                    <a href="{{ route('addSeat',['bus_id'=>$bus->bus_id]) }}" class="btn btn-success">Select Seat</a>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="bus-details container-fluid mt-5 pt-5">
        <div class="bus-details mt-5">
            <div class="bus justify-content-center">
                <div class="list-of-bus mb-4">
                    <h2 class="text-center">Bus Details</h2>
                    <hr class="mb-3" />
                    <div class="priceFlex text-center">
                        <div class="bus-des">
                            <div class="row">
                                <div class="bus-image col-lg-9">
                                    <div class="row">
                                        <div class="image col-lg-4">
                                            <img src="{{ url('img') }}/{{ $bus->img }}" alt="bus" class="busImg" height="150px" />
                                        </div>
                                        <div class="desc col-lg-8">
                                            <h4>Tourist Bus By {{ $bus->bus_name }}</h4>
                                            <h5>Facilities:</h5>
                                            {{ $bus->facilities }}
                                            <br>
                                            <br>
                                            <i class="fas fa-location fs-5 pb-2">&nbsp; &nbsp;<span
                                                    class="location-span">{{ $bus->route->from }} - {{ $bus->route->to }}</span></i>
                                            <br />
                                            <i class="fas fa-clock fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">{{ $bus->time }}</span></i>
                                            <br />
                                            <i class="fas fa-chair-office fs-5">&nbsp; &nbsp;<span class="location-span">{{ $bus->seat }}
                                                    Available Seats</span></i>
                                            <br />
                                            <i class="fas fa-user fs-5 pb-2">&nbsp; &nbsp;<span class="location-span">{{ $bus->driver_name }}</span></i>
                                            <br />
                                            <i class="fas fa-bus-school fs-5 pb-2">&nbsp; &nbsp;<span
                                                    class="location-span">{{ $bus->bus_number }}</span></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-price col-lg-3">
                                    <h4 class="text-center">Price</h4>
                                    <h5 class="mb-3 text-center">Rs. {{ $bus->price }}</h5>

                                    <hr>

                                    <div class="m-3 col-lg">
                                        <label for="seat" class="form-label bus-label">Select Seat</label>
                                        <input type="number" class="form-control p-2" id="select-seat"
                                            placeholder="Select seat"/>
                                    </div>
                                        <a class="btnBus btn btn-primary" href="{{ route('addSeat',['bus_id'=>$bus->bus_id]) }}" onclick="valueSender() ">Select Seat &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <hr>
        <div class="select-seat">
          <div class="seat-container container mt-5 mb-5">    
            <h3 class="text-center mt-2">Select Seat</h3>  
            <hr>  
            <form action="">
              <div class="m-3 col-lg">
                <label for="seat" class="form-label bus-label">Select Seat</label>
                <input type="number" class="form-control p-2" id="select-seat"
                    placeholder="Select number of seat"/>
            </div>
            <a href="{{ route('addSeat',['bus_id' => $bus->bus_id]) }}" class="btn btn-primary">Select Seat</a>
            </form>
          </div>
        </div> --}}
    </div>
    </div>

@endsection

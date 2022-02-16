@extends('layouts.mainTicket')
@section('pageTitle', 'Ticket')
@section('content')

    <div class="container pt-5 ticket">
        <h4>Thank you for choosing <span class="ramro">ramro</span><span class="y">Yatra<img
                    src="{{ url('frontend/img/Anonymous-Bus1.svg') }}" width="80px" height="50px"></span></h4>
        <hr style="width: 30%; padding: 1.3px;" />
        <div class="d-flex">
            <div class="ticket-details">              
                    <h5>Ticket Id: {{ $invoice->invoice_id }}</h5>
                    <h5>Tourist Bus by {{ $invoice->bus_name }}</h5>
                    <h5>Name: {{ $invoice->name }}</h5>
                    <h5>Email: {{ $invoice->email }}</h5>
                    <h5>Phone: {{ $invoice->phone }}</h5>
                    <h5>Selected Seat: {{ $invoice->selected_seat }}</h5>
                    <h5>Price: Rs. {{ $invoice->total_price }}</h5>
                    <h5>Board Point: {{ $invoice->from }}</h5>
                    <h5>Drop Point: {{ $invoice->to }}</h5>
                    <h5>Operator: {{ $invoice->operator }}</h5>
                    <h5>Date: {{ $invoice->date }}</h5>
                {{-- <h5>Ticket Id: 1 </h5>
                    <h5>Tourist Bus by vfg</h5>
                    <h5>Name: cbvnb</h5>
                    <h5>Email: dfassdfgad</h5>
                    <h5>Phone: fdsagds</h5>
                    <h5>Selected Seat: gfds</h5>
                    <h5>Price: Rs. gfd</h5>
                    <h5>Board Point: fgd</h5>
                    <h5>Drop Point: gh</h5>
                    <h5>Operator: fgdhf</h5>
                    <h5>Date: gfhdf</h5> --}}
            </div>

            <div class="qrcode">
                <img src="{{ url('frontend/img/qrcode.png') }}" alt="qrcode" width="200px" height="200px">
            </div>
        </div>

    </div>

@endsection

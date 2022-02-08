@extends('layouts.mainTicket')
@section('pageTitle', 'Ticket')
@section('content')

    <div class="container pt-5 ticket">
        <h4>Thank you for choosing <span class="ramro">ramro</span><span class="y">Yatra<img
                    src="{{ url('frontend/img/Anonymous-Bus1.svg') }}" width="80px" height="50px"></span></h4>
        <hr style="width: 30%; padding: 1.3px;" />
        <div class="d-flex">
            <div class="ticket-details">
                <h5>Ticket Id: 1</h5>
                <h5>Tourist Bus by Kathmandu Yatayat</h5>
                <h5>Name: Rusan Maharjan</h5>
                <h5>Email: rusanmhz789@gmail.com</h5>
                <h5>Phone: 9840539880</h5>
                <h5>Selected Seat: 2</h5>
                <h5>Price: Rs. 1000</h5>
                <h5>Board Point: Kathmandu</h5>
                <h5>Drop Point: Pokhara</h5>
                <h5>Operator: Kathmandu Fast Track</h5>
                <h5>Date: 7/02/2022</h5>
            </div>

            <div class="qrcode">
                <img src="../img/qrcode.png" alt="qrcode" width="200px" height="200px">
            </div>
        </div>

    </div>

@endsection

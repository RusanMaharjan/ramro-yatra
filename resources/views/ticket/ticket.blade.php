@extends('layouts.mainTicket')
@section('pageTitle', 'Ticket')
@section('content')

    <div class="container pt-5 ticket">
        {{-- <a href="{{ route('pdf',['invoice_id' => $invoice->invoice_id]) }}" class="btn btn-primary">Get Ticket</a> --}}
        <button class="btn btn-primary" id="getTicket" onclick="window.print();">Get Ticket</button>
        <h4>Thank you for choosing <span class="ramro">ramro</span><span class="y">Yatra<img
                    src="{{ url('/frontend/img/Anonymous-Bus1.svg') }}" width="80px" height="50px"></span></h4>
        <hr style="width: 30%; padding: 1.3px;" />
        <div class="d-flex">
            <div class="ticket-details">              
                <h5>Ticket Id: {{ $invoice->invoice_id }}</h5>
                <h5>Tourist Bus by {{ $invoice->bus_name }}</h5>
                <h5>Name: {{ $invoice->name }}</h5>
                <h5>Email: {{ $invoice->email }}</h5>
                <h5>Phone: {{ $invoice->phone }}</h5>
                <h5>Selected Seat: {{ $invoice->selected_seat }}</h5>
                <h5>Price: {{ $invoice->total_price }}</h5>
                <h5>Board Point: {{ $invoice->from }}</h5>
                <h5>Drop Point: {{ $invoice->to }}</h5>
                <h5>Operator: {{ $invoice->operator }}</h5>
                <h5>Date: {{ $invoice->date }}</h5>
            </div>

            <div class="qrcode">
                {{-- <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(200)->generate("Ticket Id: $invoice->invoice_id, Name: $invoice->name, Email: $invoice->email, Phone: $invoice->phone, Bus Name: Tourist Bus By $invoice->bus_name, Selected Seat: $invoice->selected_seat, Price: Rs.$invoice->total_price, Board Point: $invoice->from, Drop Point: $invoice->to, Operator: $invoice->operator, Date: $invoice->date")) !!} "> --}}
                {!! QrCode::size(200)->generate(
                    "Ticket Id: $invoice->invoice_id, 
                Name: $invoice->name, 
                Email: $invoice->email, 
                Phone: $invoice->phone, 
                Bus Name: Tourist Bus By $invoice->bus_name, 
                Selected Seat: $invoice->selected_seat, 
                Price: $invoice->total_price, 
                Board Point: $invoice->from, 
                Drop Point: $invoice->to, 
                Operator: $invoice->operator, 
                Date: $invoice->date"
                ); !!}
            </div>
        </div>
    </div>
@endsection

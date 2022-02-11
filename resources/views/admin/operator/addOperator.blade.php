@extends('layouts.main')
@section('pageTitle','Admin Add Operator')
@section('content')
    
    <!-- add operator Page -->
    <div class="route pt-5 pb-5">
        <div class="fs-2 text-center mt-5">Add Operator</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container route-container">
            <form action="{{ route('admin.createOperator') }}" method="post" class="pb-4">
                @csrf
                @if (Session::has('message'))
                    <div class="alert alert-success mt-2" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                
                <div class="route-hb d-flex justify-content-between pt-4">
                    <div class="heading fs-3">
                        Create Operator
                    </div>
                    <a href="{{ route('admin.getOperator') }}" class="admin-a-btn btn btn-success">All Operator &rarr;</a>
                </div>  
                <hr style="color: #000; height: 3px" class="mb-5" />
                
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Bus Operator Name</label>
                    <input
                    type="text"
                    class="form-control"
                    id="exampleFormControlInput1"
                    placeholder="Enter Name Of Bus Operator.."
                    name="operator_name"
                    />
                </div>
                <div class="btnAdmin">
                    <button type="submit" class="btn btn-success">Add Operator &rarr;</button>
                </div>
                
            </form>
        </div>
    </div>

@endsection
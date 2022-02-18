@extends('layouts.main')
@section('pageTitle', 'Admin Edit Operator')
@section('content')

    <!-- all operator Page -->
    <div class="route pt-5 pb-5">
        <div class="fs-2 text-center mt-5">All Operator</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container route-container">
            @if (Session::has('message'))
                <div class="alert alert-danger mt-2" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="route-hb d-flex justify-content-between pt-4">
                <div class="heading fs-3">
                    All Operator
                </div>
                <a href="{{ route('admin.addOperator') }}" class="admin-a-btn btn btn-success">Create Operator &rarr;</a>
            </div>
            <hr style="color: #000; height: 3px" />

            <table class="table table-striped text-center" style="width: 100%; margin: auto;">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Bus Operator</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($operators as $operator)
                        <tr>
                            <td>{{ $operator->operator_id }}</td>
                            <td>{{ $operator->operator_name }}</td>
                            <td>
                                <a href="/edit-Operator/{{ $operator->operator_id }}" class="admin-a-action btn btn-primary">Edit<i
                                        class="fas fa-edit admin-fa"></i></a>
                                <a href="/delete-Operator/{{ $operator->operator_id }}" onclick="return confirm('Are you sure want to delete this operator?')" class="admin-a-action btn btn-danger">Delete<i
                                        class="fas fa-trash-alt admin-fa"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
            <div class="d-flex mt-2 justify-content-center">
                {{ $operators->links() }}
            </div>
        </div>
    </div>

@endsection

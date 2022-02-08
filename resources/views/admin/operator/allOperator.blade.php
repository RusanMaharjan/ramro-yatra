@extends('layouts.main')
@section('pageTitle', 'Admin Edit Operator')
@section('content')
    
    <!-- all operator Page -->
    <div class="route pt-5 pb-5">
        <div class="fs-2 text-center mt-5">All Operator</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container route-container">
            <div class="route-hb d-flex justify-content-between pt-4">
                <div class="heading fs-3">
                    All Operator
                </div>
                <a href="addOperator.html" class="admin-a-btn btn btn-success">Create Operator &rarr;</a>
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
                    <tr>
                        <td>1</td>
                        <td>Pokhara Yatayat</td>
                        <td>
                            <button type="button" class="btn btn-primary"><a href="editOperator.html" class="admin-a-action">Edit<i class="fas fa-edit admin-fa"></i></a></button>
                            <button type="button" class="btn btn-danger"><a href="#" class="admin-a-action">Delete<i class="fas fa-trash-alt admin-fa"></i></a></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pokhara Yatayat</td>
                        <td>
                            <button type="button" class="btn btn-primary"><a href="editOperator.html" class="admin-a-action">Edit<i class="fas fa-edit admin-fa"></i></a></button>
                            <button type="button" class="btn btn-danger"><a href="#" class="admin-a-action">Delete<i class="fas fa-trash-alt admin-fa"></i></a></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pokhara Yatayat</td>
                        <td>
                            <button type="button" class="btn btn-primary"><a href="editOperator.html" class="admin-a-action">Edit<i class="fas fa-edit admin-fa"></i></a></button>
                            <button type="button" class="btn btn-danger"><a href="#" class="admin-a-action">Delete<i class="fas fa-trash-alt admin-fa"></i></a></button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Pokhara Yatayat</td>
                        <td>
                            <button type="button" class="btn btn-primary"><a href="editOperator.html" class="admin-a-action">Edit<i class="fas fa-edit admin-fa"></i></a></button>
                            <button type="button" class="btn btn-danger"><a href="#" class="admin-a-action">Delete<i class="fas fa-trash-alt admin-fa"></i></a></button>
                        </td>
                    </tr>
                    
                    
                </tbody>
                
            </table>
        </div>
    </div>

@endsection
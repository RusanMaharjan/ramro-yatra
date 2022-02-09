@extends('layouts.main')
@section('pageTitle', 'Admin Update User Role')
@section('content')

    <!-- edit user role Page -->
    <div class="route pt-5 pb-4">
        <div class="fs-2 text-center mt-5">Update Users</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container route-container mb-5">
            <form action="" method="post" class="pb-4">
                <div class="route-hb d-flex justify-content-between pt-4">
                    <div class="heading fs-3">
                        Update User
                    </div>
                    <a href="{{ route('admin.getUsers') }}" class="admin-a-btn btn btn-success">All Users &rarr;</a>
                </div>
                <hr style="color: #000; height: 3px" class="mb-5" />

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="" required />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="" required />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="" required />
                </div>

                <div class="mb-3">
                    <label for="operator_id" class="form-label">Roles</label>
                    <select class="form-select" name="roles" aria-label="Default select example">
                        <option selected>----- Select Roles -----</option>
                        <option value="ADM">Admin</option>
                        <option value="USR">User</option>
                    </select>
                </div>
                <div class="btnAdmin">
                    <button type="submit" class="btn btn-success">Update User &rarr;</button>
                </div>
            </form>
        </div>
    </div>


@endsection

@extends('layouts.main')
@section('pageTitle', 'Admin All Users')
@section('content')

    <!-- all users Page -->
    <div class="route pt-5 pb-5">
        <div class="fs-2 text-center mt-5">All Users</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container route-container">
            <div class="route-hb d-flex justify-content-between pt-4">
                <div class="heading fs-3">
                    All Users
                </div>
            </div>
            <hr style="color: #000; height: 3px" />

            <table class="table table-striped text-center" style="width: 100%; margin: auto;">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Roles</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>ABC</td>
                        <td>ABC@gmail.com</td>
                        <td>9840539880</td>
                        <td>ADM</td>
                        <td>
                            <a href="editUser.html" class="admin-a-action btn btn-primary">Edit<i
                                    class="fas fa-edit admin-fa"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ABC</td>
                        <td>ABC@gmail.com</td>
                        <td>9840539880</td>
                        <td>ADM</td>
                        <td>
                            <a href="editUser.html" class="admin-a-action btn btn-primary">Edit<i
                                    class="fas fa-edit admin-fa"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ABC</td>
                        <td>ABC@gmail.com</td>
                        <td>9840539880</td>
                        <td>ADM</td>
                        <td>
                            <a href="editUser.html" class="admin-a-action btn btn-primary">Edit<i
                                    class="fas fa-edit admin-fa"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ABC</td>
                        <td>ABC@gmail.com</td>
                        <td>9840539880</td>
                        <td>USR</td>
                        <td>
                            <a href="editUser.html" class="admin-a-action btn btn-primary">Edit<i
                                    class="fas fa-edit admin-fa"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>ABC</td>
                        <td>ABC@gmail.com</td>
                        <td>9840539880</td>
                        <td>USR</td>
                        <td>
                            <a href="editUser.html" class="admin-a-action btn btn-primary">Edit<i
                                    class="fas fa-edit admin-fa"></i></a>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

@endsection

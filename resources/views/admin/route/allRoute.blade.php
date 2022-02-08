@extends('layouts.main')
@section('pageTitle', 'Admin All Route')
@section('content')

    <!-- all route Page -->
    <div class="route pt-5 pb-5">
        <div class="fs-2 text-center mt-5">All Route</div>
        <hr style="width: 20%; margin: auto; color: #000; height: 3px" class="mb-5" />

        <div class="container route-container">
            <div class="route-hb d-flex justify-content-between pt-4">
                <div class="heading fs-3">
                    All Route
                </div>
                <a href="addRoute.html" class="admin-a-btn btn btn-success">Create Route &rarr;</a>
            </div>
            <hr style="color: #000; height: 3px" />

            <table class="table table-striped text-center" style="width: 100%; margin: auto;">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Kathmandu - Pokhara</td>
                        <td>
                            <a href="editRoute.html" class="admin-a-action btn btn-primary">Edit<i
                                    class="fas fa-edit admin-fa"></i></a>
                            <a href="#" class="admin-a-action btn btn-danger">Delete<i
                                    class="fas fa-trash-alt admin-fa"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Kathmandu - Pokhara</td>
                        <td>
                            <a href="editRoute.html" class="admin-a-action btn btn-primary">Edit<i
                                    class="fas fa-edit admin-fa"></i></a>
                            <a href="#" class="admin-a-action btn btn-danger">Delete<i
                                    class="fas fa-trash-alt admin-fa"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Kathmandu - Pokhara</td>
                        <td>
                            <a href="editRoute.html" class="admin-a-action btn btn-primary">Edit<i
                                    class="fas fa-edit admin-fa"></i></a>
                            <a href="#" class="admin-a-action btn btn-danger">Delete<i
                                    class="fas fa-trash-alt admin-fa"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Kathmandu - Pokhara</td>
                        <td>
                            <a href="editRoute.html" class="admin-a-action btn btn-primary">Edit<i
                                    class="fas fa-edit admin-fa"></i></a>
                            <a href="#" class="admin-a-action btn btn-danger">Delete<i
                                    class="fas fa-trash-alt admin-fa"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Kathmandu - Pokhara</td>
                        <td>
                            <a href="editRoute.html" class="admin-a-action btn btn-primary">Edit<i
                                    class="fas fa-edit admin-fa"></i></a>
                            <a href="#" class="admin-a-action btn btn-danger">Delete<i
                                    class="fas fa-trash-alt admin-fa"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Kathmandu - Pokhara</td>
                        <td>
                            <a href="editRoute.html" class="admin-a-action btn btn-primary">Edit<i
                                    class="fas fa-edit admin-fa"></i></a>
                            <a href="#" class="admin-a-action btn btn-danger">Delete<i
                                    class="fas fa-trash-alt admin-fa"></i></a>
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>
    </div>

@endsection

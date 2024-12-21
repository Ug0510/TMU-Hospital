@extends('layout.admin_pannel')
@section('content')




<!-- partial -->

<!-- partial:partials/_sidebar.html -->

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <p class="card-title mb-0">All Doctors</p>

                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewModal">
                                Add New
                            </button>
                        </div>
                        <div class="modal" id="addNewModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Doctor</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">

                                        <form action="{{route('new.doctors')}}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <label for="">Doctor Name</label>
                                            <input type="text" name="name" placeholder=" Enter Name" class="form-control mb-2" id="">

                                            <label for="">Qualifications</label>
                                            <input type="text" name="qualifications" placeholder=" Enter Qualifications" class="form-control mb-2" id="">

                                            <label for="">Designation</label>
                                            <input type="text" name="designation" placeholder=" Enter Designation" class="form-control mb-2" id="">


                                            <label for="department">Department</label>
                                            <select name="department_id" class="form-control mb-2" id="department" required>
                                                <option value="" disabled selected>Select Department</option>
                                                @foreach ($departments as $department)
                                                <option value="{{ $department->department_id }}">{{ $department->name }}</option>
                                                @endforeach
                                            </select>

                                            <label for="">Upload Research Image</label>
                                            <input type="File" name="file" class="form-control mb-2" id="">

                                            <label for="">Status</label>
                                            <select class="form-select" aria-label="Default select example" name="status">
                                                <option selected>Status</option>
                                                <option value="Y">Active</option>
                                                <option value="N">In-Active</option>
                                            </select>



                                            <input type="submit" name="save" class="btn btn-success" value="Save Now">

                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif


                                        </form>


                                    </div>



                                </div>
                            </div>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-striped table-borderless">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>qualifications</th>
                                        <th>Department</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doctors as $doctor)

                                    <tr>
                                        <td>{{ $doctor->name}}</td>
                                        <td>{{ $doctor->designation }}</td>
                                        <td>{{ $doctor->qualifications}}</td>
                                        <td>{{ $doctor->department->name ?? 'N/A' }}</td>
                                        <td>
                                            <div class="badge {{ $doctor->status == 'Y' ? 'badge-success' : 'badge-danger' }}">
                                                {{ $doctor->status == 'Y' ? 'Active' : 'Inactive' }}
                                            </div>
                                        </td>
                                    </tr>

                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->


    @endsection
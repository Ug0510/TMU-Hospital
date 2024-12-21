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

                        <p class="card-title mb-0">All Hods</p>

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
                                        <h4 class="modal-title">Add New HOD</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">

                                        <form action="{{route('new.departments')}}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <label for="">Department Name</label>
                                            <input type="text" name="name" placeholder=" Enter Name" class="form-control mb-2" id="">

                                            <label for="">Description</label>
                                            <input type="text" name="description" placeholder=" Enter Department Description" class="form-control mb-2" id="">

                                            <label for="">Research Description</label>
                                            <input type="text" name="researchdescription" placeholder=" Enter Research Description" class="form-control mb-2" id="">

                                            <label for="">Upload Research Image</label>
                                            <input type="File" name="file" class="form-control mb-2" id="">

                                            <label for="">Phone Number</label>
                                            <input type="number" name="phoneno" placeholder=" Enter Phone number" class="form-control mb-2" id="">

                                            <label for="">Status</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Status</option>
                                                <option value="Y">Active</option>
                                                <option value="N">In-Active</option>
                                            </select>

                                            <label for="">Upload Main Banner</label>
                                            <input type="File" name="file" class="form-control mb-2" id="">

                                            <input type="submit" name="save" class="btn btn-success" value="Save Now" >


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
                                        <th>Qualification</th>
                                        <th>Profile Path</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hods as $hod)

                                    <tr>
                                        <td>{{ $hod->name}}</td>
                                        <td>{{ $hod->designation}}</td>
                                        <td>{{ $hod->qualifications}}</td>
                                        <td>{{ $hod->profile_path}}</td>
                                        <td>
                                            <div class="badge {{ $hod->status == 'Y' ? 'badge-success' : 'badge-danger' }}">
                                                {{ $hod->status == 'Y' ? 'Active' : 'Inactive' }}
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
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
                        <!-- ADD NEW MODEL -->
                        <div class="modal" id="addNewModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New HOD</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        <form action="{{ route('new.hods') }}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            <label for="department_id">Department</label>
                                            <select id="department_id" name="department_id" class="form-control mb-2" required>
                                                <option value="" disabled selected>Select Department</option>
                                                @foreach ($departments as $department)
                                                <option value="{{ $department->department_id }}">{{ $department->department_name }}</option>
                                                @endforeach
                                            </select>

                                            <label for="doctor_id">Doctor</label>
                                            <select id="doctor_id" name="doctor_id" class="form-control mb-2" required>
                                                <option value="" disabled selected>Select Doctor</option>
                                            </select>

                                            <label for="title">Title</label>
                                            <input type="text" name="title" placeholder="Enter Title" class="form-control mb-2" required>

                                            <label for="quote">Quote</label>
                                            <textarea name="quote" placeholder="Enter Quote" class="form-control mb-2" required></textarea>

                                            <label for="priority">Priority</label>
                                            <input type="number" name="priority" placeholder="Enter Priority" class="form-control mb-2" required>

                                            <label for="image_url">Upload Image</label>
                                            <input type="file" name="image_url" class="form-control mb-2">

                                            <label for="status">Status</label>
                                            <select class="form-select" name="status">
                                                <option value="Y">Active</option>
                                                <option value="N">Inactive</option>
                                            </select>

                                            <input type="submit" name="save" class="btn btn-success mt-3" value="Save Now">

                                            @if ($errors->any())
                                            <div class="alert alert-danger mt-2">
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
                                        <th>Title</th>
                                        <th>Quote</th>
                                        <th>Priority</th>
                                        <th>Status</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 0;
                                    @endphp

                                    @foreach ($hods as $hod)
                                    @php
                                    $i++;
                                    @endphp
                                    <tr>
                                        <td>{{ $hod->doctor->name ?? 'No Name' }}</td>
                                        <td>{{ $hod->title }}</td>
                                        <td>{{ $hod->quote }}</td>
                                        <td>{{ $hod->priority }}</td>
                                        <td>
                                            <div class="badge {{ $hod->status == 'Y' ? 'badge-success' : 'badge-danger' }}">
                                                {{ $hod->status == 'Y' ? 'Active' : 'Inactive' }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateHodModal{{ $i }}">
                                                    Update
                                                </button>
                                            </div>

                                            <!-- Update Modal -->
                                            <div class="modal" id="updateHodModal{{ $i }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <!-- Modal Header -->
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Update HOD</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                        </div>

                                                        <!-- Modal Body -->
                                                        <div class="modal-body">
                                                            <form action="{{ route('update.hods', ['hod_id' => $hod->hod_id]) }}" method="POST" enctype="multipart/form-data">
                                                                @csrf

                                                                <label for="doctor_id">Doctor</label>
                                                                <select id="doctor_id" name="doctor_id" class="form-control mb-2" required>
                                                                    <option value="" disabled>Select Doctor</option>
                                                                    @foreach ($doctors as $doctor)
                                                                    <option value="{{ $doctor->doctor_id }}" {{ $hod->doctor_id == $doctor->doctor_id ? 'selected' : '' }}>{{ $doctor->name }}</option>
                                                                    @endforeach
                                                                </select>

                                                                <label for="title">Title</label>
                                                                <input type="text" name="title" value="{{ $hod->title }}" placeholder="Enter Title" class="form-control mb-2" required>

                                                                <label for="quote">Quote</label>
                                                                <textarea name="quote" placeholder="Enter Quote" class="form-control mb-2" required>{{ $hod->quote }}</textarea>

                                                                <label for="priority">Priority</label>
                                                                <input type="number" name="priority" value="{{ $hod->priority }}" class="form-control mb-2" required>

                                                                <label for="image_url">Upload Image</label>
                                                                <input type="file" name="image_url" class="form-control mb-2">

                                                                <label for="status">Status</label>
                                                                <select class="form-select" name="status">
                                                                    <option value="Y" {{ $hod->status == 'Y' ? 'selected' : '' }}>Active</option>
                                                                    <option value="N" {{ $hod->status == 'N' ? 'selected' : '' }}>Inactive</option>
                                                                </select>

                                                                <input type="hidden" name="hod_id" value="{{ $hod->hod_id }}">

                                                                <input type="submit" name="save" class="btn btn-success mt-3" value="Save Changes">

                                                                @if ($errors->any())
                                                                <div class="alert alert-danger mt-2">
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
                                        </td>
                                        <td>
                                            <a href="{{ route('delete.hods', ['hod_id' => $hod->hod_id]) }}" class="btn btn-danger">Delete</a>
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

    <script>
        document.getElementById('department_id').addEventListener('change', function() {
            const departmentId = this.value;

            // Clear the doctor dropdown before fetching new options
            const doctorDropdown = document.getElementById('doctor_id');
            doctorDropdown.innerHTML = '<option value="" disabled selected>Loading...</option>';

            // Make an AJAX request to fetch doctors
            fetch(`/get-doctors-by-department/${departmentId}`)
                .then(response => {
                    if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`);
                    return response.json();
                })
                .then(data => {
                    console.log('Fetched doctors:', data); // Debugging
                    doctorDropdown.innerHTML = '<option value="" disabled selected>Select Doctor</option>';
                    data.forEach(doctor => {
                        const option = document.createElement('option');
                        option.value = doctor.doctor_id; // Match field name
                        option.textContent = doctor.name;
                        doctorDropdown.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error('Error fetching doctors:', error);
                    doctorDropdown.innerHTML = '<option value="" disabled selected>No doctors available</option>';
                });
        });
    </script>

    @endsection
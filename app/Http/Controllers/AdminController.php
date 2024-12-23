<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\DoctorDesignation;
use App\Models\Doctor;
use App\Models\HOD;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function departments()
    {
        $departments = Department::all();
        return view('dashboard.departments', compact('departments'));
    }

    public function new_departments(Request $data)
    {
        $department = new department();
        $department->name = $data->input('name');
        return view('dashboard.departments', compact('departments'));
    }

    public function doctors()
    {
        $doctors = Doctor::with(['department', 'designation'])->get();
        $departments = Department::all();
        $designations = DoctorDesignation::all();
        return view('dashboard.doctors', compact('doctors', 'departments', 'designations'));
    }

    public function delete_doctors($doctor_id)
    {
        $doctor = Doctor::find($doctor_id);
        $doctor->delete();
        return redirect()->back()->with('success', 'Doctor details deleted successfully!');
    }


    public function new_doctors(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name',
            'qualifications',
            'designation_id', // Validate designation ID
            'department_id', // Validate department ID
            'file', // Validate file type and size
            'status',
        ]);

        // Fetch the department using the name provided
        $department = Department::find($request->department_id);
        if (!$department) {
            return redirect()->back()->withErrors(['department_id' => 'Invalid department selected.']);
        }

        // Handle file upload with custom directory structure
        // $file = $request->file('file');
        // $departmentName = $department->department_name; // Use the department name
        // $destinationPath = "img/doctors/{$departmentName}";
        // $fileName = time() . '_' . $file->getClientOriginalName(); // Generate a unique file name

        // // Store the file in the custom directory
        // $file->storeAs($destinationPath, $fileName, 'public');

        // // Construct the file path
        // $profilePath = "{$destinationPath}/{$fileName}";

        $file = $request->file('file');
        $departmentName = $department->department_name; // Use the department name

        // Define the destination path relative to the public folder
        $destinationPath = public_path("img/doctors/{$departmentName}");

        // Generate a unique file name
        $fileName = time() . '_' . $file->getClientOriginalName();

        // Ensure the directory exists
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true); // Create directory with proper permissions
        }

        // Move the file to the public directory
        $file->move($destinationPath, $fileName);

        // Construct the file path relative to the public directory
        $profilePath = "img/doctors/{$departmentName}/{$fileName}";

        // Save the relative path to the database


        // Create a new doctor entry
        $doctor = new Doctor();
        $doctor->name = $request->name;
        $doctor->qualifications = $request->qualifications;
        $doctor->designation_id = $request->designation_id;
        $doctor->department_id = $department->department_id; // Store department ID
        $doctor->profile_path = $profilePath; // Store file path
        $doctor->status = $request->status;
        $doctor->save();

        return redirect()->back()->with('success', 'Doctor added successfully!');
    }

    public function update_doctors(Request $request, $doctor_id)
    {
        // Validate the incoming request
        $request->validate([
            'doctor_id',
            'name',
            'qualifications',
            'designation_id', // Validate designation ID
            'department_id', // Validate department ID
            'file', // Validate file type and size
            'status',
        ]);


        // Fetch the doctor record
        $doctor = Doctor::find($doctor_id);
        if (!$doctor) {
            return redirect()->back()->withErrors(['doctor_id' => 'Doctor not found.']);
        }

        // Fetch the department using the name provided
        $department = Department::find($request->department_id);
        if (!$department) {
            return redirect()->back()->withErrors(['department_id' => 'Invalid department selected.']);
        }

        // Handle file upload with custom directory structure

        $file = $request->file('file');
        if ($file) {
            // Handle new file upload
            $departmentName = Department::find($request->department_id)->department_name;
            $destinationPath = public_path("img/doctors/{$departmentName}");
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Ensure the directory exists
            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            // Move the file
            $file->move($destinationPath, $fileName);

            // Construct the new file path
            $profilePath = "img/doctors/{$departmentName}/{$fileName}";
        } else {
            // Use the existing file path if no new file is uploaded
            $profilePath = $doctor->profile_path;
        }

        // Save the relative path to the database


        // Create a new doctor entry
        $doctor = Doctor::find($request->input('doctor_id'));
        $doctor->name = $request->name;
        $doctor->qualifications = $request->qualifications;
        $doctor->designation_id = $request->designation_id;
        $doctor->department_id = $department->department_id; // Store department ID
        $doctor->profile_path = $profilePath; // Store file path
        $doctor->status = $request->status;
        $doctor->save();

        return redirect()->back()->with('success', 'Doctor Updated successfully!');
    }

    public function hods()
    {
        $hods = HOD::with(['doctor'])->get();
        $doctors = Doctor::all();
        $departments = Department::all();
        return view('dashboard.hods', compact('hods', 'doctors', 'departments'));
    }

    public function delete_hods($hod_id)
    {
        $hod = HOD::find($hod_id);
        $hod->delete();
        return redirect()->back()->with('success', 'HOD details deleted successfully!');
    }


    public function new_hods(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'doctor_id', // Ensure doctor exists
            'department_id', // Ensure department exists
            'image_url', // Validate image file
            'quote', // Limit quote length
            'title', // Validate title
            'status', // Ensure status is Y or N
            'priority', // Validate priority as positive integer
        ]);

        // Handle file upload
        $imageUrl = null;

        if ($request->hasFile('image_url')) {
            $file = $request->file('image_url');
            $destinationPath = public_path('img/hods');
            $fileName = time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $fileName);
            $imageUrl = "img/hods/{$fileName}";
        }

        // Create a new HOD entry
        HOD::create([
            'doctor_id' => $request->doctor_id,
            'department_id' => $request->department_id, // Add department_id
            'image_url' => $imageUrl,
            'quote' => $request->quote,
            'title' => $request->title,
            'status' => $request->status,
            'priority' => $request->priority,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'HOD added successfully!');
    }

    public function getDoctorsByDepartment($department_id)
    {
        $doctors = Doctor::where('department_id', $department_id)->get(['doctor_id', 'name']);
        return response()->json($doctors); // Directly return the array
    }

    public function update_hods(Request $request, $hod_id)
    {
        // Validate the incoming request
        $request->validate([
            'doctor_id' => 'required|exists:doctors,doctor_id',
            'image_url' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            'quote' => 'required|string',
            'title' => 'required|string|max:100',
            'status' => 'required|in:Y,N',
            'priority' => 'required|integer|min:0',
        ]);

        // Fetch the HOD record
        $hod = HOD::find($hod_id);
        if (!$hod) {
            return redirect()->back()->withErrors(['hod_id' => 'HOD not found.']);
        }

        // Handle file upload
        $file = $request->file('image_url');
        if ($file) {
            $destinationPath = public_path('img/hods');
            $fileName = time() . '_' . $file->getClientOriginalName();

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $fileName);
            $imageUrl = "img/hods/{$fileName}";
        } else {
            $imageUrl = $hod->image_url; // Use existing image URL
        }

        // Update the HOD record
        $hod->doctor_id = $request->doctor_id;
        $hod->image_url = $imageUrl;
        $hod->quote = $request->quote;
        $hod->title = $request->title;
        $hod->status = $request->status;
        $hod->priority = $request->priority;
        $hod->save();

        return redirect()->back()->with('success', 'HOD updated successfully!');
    }
}

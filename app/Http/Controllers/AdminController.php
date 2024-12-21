<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\DoctorDesignation;
use App\Models\Doctor;
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
}

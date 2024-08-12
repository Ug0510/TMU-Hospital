<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Service;

class DepartmentController extends Controller
{
    public function show($departmentName)
    {
        // Fetch the department based on the name
        $department = Department::where('url_name', $departmentName)->first();

        // Check if the department exists
        if (!$department) {
            // Redirect to the home page if the department is not found
            return redirect('/');
        }

        // Fetch related services for the department
        $services = Service::where('department_id', $department->id)->get();

        // Fetch the HOD related to the department
        $hod = $department->hod;

        // Return the view with department, services, and hod data
        return view('department.show', compact('department', 'services', 'hod'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Service;
use App\Models\Edutip;

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

        // Fetch related educational tips for the department
        $edutips = Edutip::where('department_id', $department->id)->get();

        // Fetch the HOD related to the department
        $hod = $department->hod;

        // Return the view with department, services, hod, and edutips data
        return view('department.show', compact('department', 'services', 'hod', 'edutips'));
    }

    public function cardiology()
    {
        // Fetch the department based on the name
        $department = Department::where('name', 'cardiology')->first();

        // Check if the department exists
        if (!$department) {
            // Redirect to the home page if the department is not found
            return redirect('/');
        }

        // Fetch related services for the department
        $services = Service::where('department_id', $department->id)->get();

        // Fetch related educational tips for the department
        $edutips = Edutip::where('department_id', $department->id)->get();

        // Fetch the HOD related to the department
        $hod = $department->hod;

        // Return the view with department, services, hod, and edutips data
        return view('department.super_speciality.cardiology', compact('department', 'services', 'hod', 'edutips'));
    }
}


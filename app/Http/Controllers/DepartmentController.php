<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Department_id;
use App\Models\Service;
use App\Models\Edutip;
use App\Models\HOD;

class DepartmentController extends Controller
{

    public function speciality($slug)
    {
        $department = Department::where('slug', $slug)->first();
        if (!$department) {
            return redirect('/');
        }
        $services = Service::where('department_id', $department->department_id)->get();
        $edutips = Edutip::where('department_id', $department->department_id)->get();
        $hod = HOD::where('department_id', $department->department_id)->first();
        
        return view('department.super_speciality.show', compact('department', 'services', 'hod', 'edutips'));
    
    }
    public function department($slug)
    {
        $department = Department::where('slug', $slug)->first();
        if (!$department) {
            return redirect('/');
        }
        $services = Service::where('department_id', $department->department_id)->get();
        $edutips = Edutip::where('department_id', $department->department_id)->get();
        $hod = HOD::where('department_id', $department->department_id)->first();
        
        return view('department.multi_speciality.show', compact('department', 'services', 'hod', 'edutips'));
    }

    
}



                    
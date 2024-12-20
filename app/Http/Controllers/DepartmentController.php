<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Service;
use App\Models\Edutip;

class DepartmentController extends Controller
{
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

    public function nephrology()
    {
        $department = Department::where('name', 'nephrology')->first();
        if (!$department) {
            return redirect('/');
        }
        $services = Service::where('department_id', $department->id)->get();
        $edutips = Edutip::where('department_id', $department->id)->get();
        $hod = $department->hod;
        return view('department.super_speciality.nephrology', compact('department', 'services', 'hod', 'edutips'));
    }

    public function neurology()
    {
        $department = Department::where('name', 'neurology')->first();
        if (!$department) {
            return redirect('/');
        }
        $services = Service::where('department_id', $department->id)->get();
        $edutips = Edutip::where('department_id', $department->id)->get();
        $hod = $department->hod;
        return view('department.super_speciality.neurology', compact('department', 'services', 'hod', 'edutips'));
    }

    public function neuro_surgery()
    {
        $department = Department::where('name', 'neuro surgery')->first();
        if (!$department) {
            return redirect('/');
        }
        $services = Service::where('department_id', $department->id)->get();
        $edutips = Edutip::where('department_id', $department->id)->get();
        $hod = $department->hod;
        return view('department.super_speciality.neuro_surgery', compact('department', 'services', 'hod', 'edutips'));
    }

    public function ctvs()
    {
        $department = Department::where('name', 'ctvs')->first();
        if (!$department) {
            return redirect('/');
        }
        $services = Service::where('department_id', $department->id)->get();
        $edutips = Edutip::where('department_id', $department->id)->get();
        $hod = $department->hod;
        return view('department.super_speciality.ctvs', compact('department', 'services', 'hod', 'edutips'));
    }

    public function plastic_surgery()
    {
        $department = Department::where('name', 'plastic surgery')->first();
        if (!$department) {
            return redirect('/');
        }
        $services = Service::where('department_id', $department->id)->get();
        $edutips = Edutip::where('department_id', $department->id)->get();
        $hod = $department->hod;
        return view('department.super_speciality.plastic_surgery', compact('department', 'services', 'hod', 'edutips'));
    }

    public function gastroenterology()
    {
        $department = Department::where('name', 'gastroenterology')->first();
        if (!$department) {
            return redirect('/');
        }
        $services = Service::where('department_id', $department->id)->get();
        $edutips = Edutip::where('department_id', $department->id)->get();
        $hod = $department->hod;
        return view('department.super_speciality.gastroenterology', compact('department', 'services', 'hod', 'edutips'));
    }

    public function urology()
    {
        $department = Department::where('name', 'urology')->first();
        if (!$department) {
            return redirect('/');
        }
        $services = Service::where('department_id', $department->id)->get();
        $edutips = Edutip::where('department_id', $department->id)->get();
        $hod = $department->hod;
        return view('department.super_speciality.urology', compact('department', 'services', 'hod', 'edutips'));
    }


    public function ent()
    {
        return $this->loadDepartmentData('ent');
    }

    public function opthamalogy()
    {
        return $this->loadDepartmentData('opthamalogy');
    }

    public function respiratory_medicine()
    {
        return $this->loadDepartmentData('respiratory medicine');
    }

    public function psychiatrist()
    {
        return $this->loadDepartmentData('psychiatrist');
    }

    public function dermatology()
    {
        return $this->loadDepartmentData('dermatology');
    }

    public function radiology()
    {
        return $this->loadDepartmentData('radiology');
    }

    private function loadDepartmentData($departmentName)
    {
        $department = Department::where('name', $departmentName)->first();
        if (!$department) {
            return redirect('/');
        }
        $services = Service::where('department_id', $department->id)->get();
        $edutips = Edutip::where('department_id', $department->id)->get();
        $hod = $department->hod;

        return view("department.super_speciality.$departmentName", compact('department', 'services', 'hod', 'edutips'));
    }

}



                    
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

    public function cardiology()
    {
        // Fetch the department_id from the department_id table (this table holds department identifiers)
        $department_id = Department_id::where('department_name', 'Cardiology')->first(); // Or any specific condition if necessary
        // Check if the department_id exists
        if (!$department_id) {
            return redirect('/'); // Redirect if no department_id is found
        }
        // Fetch the corresponding department from the departments table based on department_id
        $department = Department::where('department_id', $department_id->department_id)->first();
        // Fetch all related services from the services table where department_id matches
        $services = Service::where('department_id', $department_id->department_id)->get();
        // Fetch all related educational tips from the edutips table where department_id matches
        $edutips = Edutip::where('department_id', $department_id->department_id)->get();
        // Fetch the head of department (HOD) from the hods table where department_id matches
        $hod = HOD::where('department_id', $department_id->department_id)->first();
        // Return the view with all the necessary data
        return view('department.super_speciality.cardiology', compact('department_id', 'department', 'services', 'edutips', 'hod'));
    }




    public function nephrology()
    {
        $department_id = Department_id::where('department_name', 'Nephrology')->first();
        if (!$department_id) {
            return redirect('/');
        }
        $department = Department::where('department_id', $department_id->department_id)->first();
        $services = Service::where('department_id', $department_id->department_id)->get();
        $edutips = Edutip::where('department_id', $department_id->department_id)->get();
        $hod = HOD::where('department_id', $department_id->department_id)->first();
        return view('department.super_speciality.nephrology', compact('department_id', 'department', 'services', 'edutips', 'hod'));
    }

    public function neurology()
    {
        $department_id = Department_id::where('department_name', 'Neurology')->first();
        if (!$department_id) {
            return redirect('/');
        }
        $department = Department::where('department_id', $department_id->department_id)->first();
        $services = Service::where('department_id', $department_id->department_id)->get();
        $edutips = Edutip::where('department_id', $department_id->department_id)->get();
        $hod = HOD::where('department_id', $department_id->department_id)->first();
        return view('department.super_speciality.neurology', compact('department_id', 'department', 'services', 'edutips', 'hod'));
    }

    public function neuro_surgery()
    {
        $department_id = Department_id::where('department_name', 'Neuro Surgery')->first();
        if (!$department_id) {
            return redirect('/');
        }
        $department = Department::where('department_id', $department_id->department_id)->first();
        $services = Service::where('department_id', $department_id->department_id)->get();
        $edutips = Edutip::where('department_id', $department_id->department_id)->get();
        $hod = HOD::where('department_id', $department_id->department_id)->first();
        return view('department.super_speciality.neuro_surgery', compact('department_id', 'department', 'services', 'edutips', 'hod'));
    }

    public function ctvs()
    {
        $department_id = Department_id::where('department_name', 'CTVS')->first();
        if (!$department_id) {
            return redirect('/');
        }
        $department = Department::where('department_id', $department_id->department_id)->first();
        $services = Service::where('department_id', $department_id->department_id)->get();
        $edutips = Edutip::where('department_id', $department_id->department_id)->get();
        $hod = HOD::where('department_id', $department_id->department_id)->first();
        return view('department.super_speciality.ctvs', compact('department_id', 'department', 'services', 'edutips', 'hod'));
    }

    public function plastic_surgery()
    {
        $department_id = Department_id::where('department_name', 'plastic surgery')->first();
        if (!$department_id) {
            return redirect('/');
        }
        $department = Department::where('department_id', $department_id->department_id)->first();
        $services = Service::where('department_id', $department_id->department_id)->get();
        $edutips = Edutip::where('department_id', $department_id->department_id)->get();
        $hod = HOD::where('department_id', $department_id->department_id)->first();
        return view('department.super_speciality.plastic_surgery', compact('department_id', 'department', 'services', 'edutips', 'hod'));
    }

    public function gastroenterology()
    {
        $department_id = Department_id::where('department_name', 'gastroenterology')->first();
        if (!$department_id) {
            return redirect('/');
        }
        $department = Department::where('department_id', $department_id->department_id)->first();
        $services = Service::where('department_id', $department_id->department_id)->get();
        $edutips = Edutip::where('department_id', $department_id->department_id)->get();
        $hod = HOD::where('department_id', $department_id->department_id)->first();
        return view('department.super_speciality.gastroenterology', compact('department_id', 'department', 'services', 'edutips', 'hod'));
    }

    public function urology()
    {
        $department_id = Department_id::where('department_name', 'urology')->first();
        if (!$department_id) {
            return redirect('/');
        }
        $department = Department::where('department_id', $department_id->department_id)->first();
        $services = Service::where('department_id', $department_id->department_id)->get();
        $edutips = Edutip::where('department_id', $department_id->department_id)->get();
        $hod = HOD::where('department_id', $department_id->department_id)->first();
        return view('department.super_speciality.urology', compact('department_id', 'department', 'services', 'edutips', 'hod'));
    }


    public function ent()
    {
        $department_id = Department_id::where('department_name', 'ent')->first();
        if (!$department_id) {
            return redirect('/');
        }
        $department = Department::where('department_id', $department_id->department_id)->first();
        $services = Service::where('department_id', $department_id->department_id)->get();
        $edutips = Edutip::where('department_id', $department_id->department_id)->get();
        $hod = HOD::where('department_id', $department_id->department_id)->first();
        return view('department.multi_speciality.ent', compact('department_id', 'department', 'services', 'edutips', 'hod'));
    }

    public function ophthalmology()
    {
        $department_id = Department_id::where('department_name', 'opthalmology')->first();
        if (!$department_id) {
            return redirect('/');
        }
        $department = Department::where('department_id', $department_id->department_id)->first();
        $services = Service::where('department_id', $department_id->department_id)->get();
        $edutips = Edutip::where('department_id', $department_id->department_id)->get();
        $hod = HOD::where('department_id', $department_id->department_id)->first();
        return view('department.multi_speciality.opthalmology', compact('department_id', 'department', 'services', 'edutips', 'hod'));
    }

    public function respiratory_medicine()
    {
        $department_id = Department_id::where('department_name', 'respiratory medicine')->first();
        if (!$department_id) {
            return redirect('/');
        }
        $department = Department::where('department_id', $department_id->department_id)->first();
        $services = Service::where('department_id', $department_id->department_id)->get();
        $edutips = Edutip::where('department_id', $department_id->department_id)->get();
        $hod = HOD::where('department_id', $department_id->department_id)->first();
        return view('department.multi_speciality.respiratory_medicine', compact('department_id', 'department', 'services', 'edutips', 'hod'));
    }

    public function psychitary()
    {
        $department_id = Department_id::where('department_name', 'psychitary')->first();
        if (!$department_id) {
            return redirect('/');
        }
        $department = Department::where('department_id', $department_id->department_id)->first();
        $services = Service::where('department_id', $department_id->department_id)->get();
        $edutips = Edutip::where('department_id', $department_id->department_id)->get();
        $hod = HOD::where('department_id', $department_id->department_id)->first();
        return view('department.multi_speciality.psychitary', compact('department_id', 'department', 'services', 'edutips', 'hod'));
    }

    public function dermatology()
    {
        $department_id = Department_id::where('department_name', 'dermatology')->first();
        if (!$department_id) {
            return redirect('/');
        }
        $department = Department::where('department_id', $department_id->department_id)->first();
        $services = Service::where('department_id', $department_id->department_id)->get();
        $edutips = Edutip::where('department_id', $department_id->department_id)->get();
        $hod = HOD::where('department_id', $department_id->department_id)->first();
        return view('department.multi_speciality.dermatology', compact('department_id', 'department', 'services', 'edutips', 'hod'));
    }

    public function radiology()
    {
        $department_id = Department_id::where('department_name', 'radiology')->first();
        if (!$department_id) {
            return redirect('/');
        }
        $department = Department::where('department_id', $department_id->department_id)->first();
        $services = Service::where('department_id', $department_id->department_id)->get();
        $edutips = Edutip::where('department_id', $department_id->department_id)->get();
        $hod = HOD::where('department_id', $department_id->department_id)->first();
        return view('department.dignosis.radiology', compact('department_id', 'department', 'services', 'edutips', 'hod'));
    }

}



                    
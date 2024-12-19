<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Service;
use App\Models\Edutip;
use App\Models\Doctor;


class HospitalController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function contact_us()
    {
        return view('contact');
    }

    public function about_us()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blog_details()
    {
        return view('blog_details');
    }

    public function test()
    {
        return view('test');
    }

    public function services_test()
    {
        return view('services.test');
    }

    public function our_doctors(Request $request)
    {

        // Fetch all departments for the dropdown
        $departments = Department::all();

        // Check if a department filter is applied
        $query = Doctor::query();

        if ($request->has('department_id') && $request->department_id != '') {
            $query->where('department_id', $request->department_id);
        }

        // Fetch doctors, sorted alphabetically by name
        $doctors = $query->orderBy('name')->get();

        return view('our_doctors', compact('doctors', 'departments'));
    }
}

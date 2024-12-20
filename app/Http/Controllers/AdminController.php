<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\HOD;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view ('dashboard.index');
    }

    public function departments()
    {
        $departments=Department::all();
        return view ('dashboard.departments', compact('departments'));
    }

    public function new_departments(Request $data)
    {
        $department=new department();
        $department->name=$data->input('name');
        return view ('dashboard.departments', compact('departments'));
    }

    public function hod()
    {
        $hods=HOD::all();
        return view ('dashboard.hod', compact('hods'));
    }
}

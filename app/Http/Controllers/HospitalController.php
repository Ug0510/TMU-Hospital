<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Service;
use App\Models\Edutip;


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
}
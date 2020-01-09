<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Location;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $students = Auth::user()->students;
        $locations = Auth::user()->locations;
        return view('home',compact("students",'locations'));
    }
}

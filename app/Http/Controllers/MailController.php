<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MailController extends Controller
{
    public function index()
    {

        $user = Auth::user()->name;


        return view('mails.index');
    }
}

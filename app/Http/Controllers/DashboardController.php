<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $school_detail = Contact::first();
        return view('dashboard.home',compact('school_detail'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    public function index() 
    {
    	return view('templates.dashboard', ['title' => 'User Dashboard']);	
    }
}

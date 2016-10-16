<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories;
use App\Http\Requests;

class ClientController extends Controller
{
	// get
    public function index()
    {
   		$handler = new Repositories\ApplicationClientHandler();
   		$viewdata['title'] = 'Client Management';
   		$viewdata['clients'] = $handler->listings();
   		return view('client.list', $viewdata);
    }	
    //get
    public function create() 
    {
    	$viewdata['title'] = "Create Client";
    	return view('client.create', $viewdata);
    }
    // get
	public function delete()
	{

	}   
	// post
	public function register(Request $request)
	{
		$handler = new Repositories\ApplicationClientHandler();
		if( $handler->create() ) 
		{
			// redirect('client');
		}	
		else 
		{
			redirect('client/create');
		}
	} 
	// post
	public function remove()
	{

	}

}

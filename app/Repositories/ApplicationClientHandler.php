<?php
namespace App\Repositories;
use App\Client;

class ApplicationClientHandler 
{
	public function listings() 
	{
		return Client::all();		
	}

	public function create()
	{
		// $client = new Client;
		// $client->first_name = request()-
		dd(request()->input('first_name'));
		return TRUE;
	}

}
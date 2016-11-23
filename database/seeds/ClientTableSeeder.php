<?php

use Illuminate\Database\Seeder;
use App\Client;
class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = [
        	['first_name' => 'client', 'last_name' => 'first', 'address' => 'somewhere over the rainbow', 'phone_no' => '09120391023', 'mobile_no' => '0123018230812'],
        	['first_name' => 'client', 'last_name' => 'fourth', 'address' => 'somewhere over the rainbow', 'phone_no' => '09120391023', 'mobile_no' => '0123018230812'],
        	['first_name' => 'client', 'last_name' => 'second', 'address' => 'somewhere over the rainbow', 'phone_no' => '09120391023'],
        	['first_name' => 'client', 'last_name' => 'third', 'address' => 'somewhere over the rainbow', 'mobile_no' => '0123018230812']
        ];

        foreach($data as $row)
        {
        	$client = new Client;
        	foreach($row as $column => $value)
        	{
        		$client->{$column} = $value;
        	}
        	$client->save();
        }
    }
}

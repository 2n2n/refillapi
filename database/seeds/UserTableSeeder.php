<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
        	['name' => 'client account', 'usertype_id' => '1', 'password' => 'asdf1234*'],
        	['name' => 'Employee account', 'usertype_id' => '2', 'password' => 'asdf1234*'],
        	['name' => 'Owner account', 'usertype_id' => '3', 'password' => 'asdf1234*'],
        	['name' => 'Super User account', 'usertype_id' => '4', 'password' => 'asdf1234*']
        ]);
    }
}

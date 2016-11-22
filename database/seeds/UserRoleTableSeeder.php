<?php

use Illuminate\Database\Seeder;
use App\UserRole;
class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [ 'id' => 1,  'role' => 'Client'],
            [ 'id' => 2,  'role' => 'Employee'],
            [ 'id' => 3,  'role' => 'Owner'],
            [ 'id' => 4,  'role' => 'Super User']
        ];

        UserRole::insert($roles);
    }
}

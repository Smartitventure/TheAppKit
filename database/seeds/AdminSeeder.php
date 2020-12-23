<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Buildapp;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Buildapp::create([
        	'user_template'=> 'template',
        	'user_custom' => 'custom'
        ]);
        
        $role= Role::create([
        	'name'=> 'customer',
        	'description'=>'Customer Role'
        ]);
        $role= Role::create([
        	'name'=> 'admin',
        	'description'=>'Admin Role'
        ]);

        $user = User::create([
            'business_name' => 'appkit',
            'first_name' => 'super',
            'last_name' => 'admin',
            'number' => '+915689237485',
            'email' => 'admin@admin.com',
            'country' => 'India',
            'password' => bcrypt('adminking'),
            'role_id' => $role->id,
        ]);
    }
}

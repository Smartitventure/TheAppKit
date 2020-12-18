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
        Role::create([
        	'role_name'=> 'user',
        	'role_status'=>'active'
        ]);
        $role = Role::create([
        	'role_name'=> 'admin',
        	'role_status'=>'active'
        ]);
        $user = User::create([
            'business_name' => 'appkit',
            'first_name' => 'super',
            'last_name' => 'admin',
            'number' => '+915689237485',
            'email' => 'admin@admin.com',
            'country' => 'India',
            'password' => bcrypt('adminking'),
        ]);
        $user->roles()->attach($role->id);  
    }
}

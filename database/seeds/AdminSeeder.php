<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $role= Role::create([
        	'name'=> 'custom',
        	'description'=>'custom Role'
        ]);

        $role= Role::create([
        	'name'=> 'admin',
        	'description'=>'Admin Role'
        ]);

        Role::create([
        	'name'=> 'template',
        	'description'=>'Template Role'
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

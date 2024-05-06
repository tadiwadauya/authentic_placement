<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@ap.com',
                'phone' => '2020',               
                'first_name' => 'Tadiwa',
                'last_name' => 'Dauya',
                'is_admin' => '1',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'User',
                'email' => 'normal@ap.com',                            
                'first_name' => 'Vimbai',
                'last_name' => 'Huchu',
                'gender' => 'female',
                'dob' => '1996-12-04',
                'phone' => '0784946414', 
                'address' => '24753 unit N ext seke chitungwiza',
                'location' => 'Harare',        
                'is_admin' => '0',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'SuperUser',
                'email' => 'superadmin@ap.com',
                'phone' => '2020',               
                'first_name' => 'Tariro',
                'last_name' => 'Dauya',
                'is_admin' => '2',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'indeliblemark',
                'email' => 'info@indeliblemark.com',
                'employer' => 'indeliblemark',
                'phone' => '2020',               
                'first_name' => 'Panashe',
                'last_name' => 'Ngorima',  
                'address' => '24753 unit N ext seke chitungwiza',
                'location' => 'Harare', 
                'website' => 'indeliblemark.com',
                'description' => 'indeliblemark it solutions. we live a permanent mark', 
                'is_admin' => '3',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}

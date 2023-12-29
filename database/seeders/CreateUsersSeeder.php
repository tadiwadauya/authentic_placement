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
                'is_admin' => '1',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'User',
                'email' => 'normal@ap.com',
                'is_admin' => '0',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'SuperUser',
                'email' => 'superadmin@ap.com',
                'is_admin' => '2',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Company',
                'email' => 'company@ap.com',
                'is_admin' => '3',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}

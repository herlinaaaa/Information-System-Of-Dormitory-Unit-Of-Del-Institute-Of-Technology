<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
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
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'admin'
            ],
            [
                'name' => 'Pengguna',
                'email' => 'pengguna@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 'user'
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
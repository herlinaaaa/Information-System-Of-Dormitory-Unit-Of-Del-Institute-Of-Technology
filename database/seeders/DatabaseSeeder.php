<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = [
            [
                'name' => 'Administrator',
                'username' => 'admin01',
                'password' => bcrypt('123456'),
                'role' => 'admin'
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
        // $this->call([UserData::class]);
    }
}
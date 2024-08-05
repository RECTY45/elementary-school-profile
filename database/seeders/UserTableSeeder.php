<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username' => 'Bintang Admin',
                'email' => 'akbar@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'),
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
    }
}

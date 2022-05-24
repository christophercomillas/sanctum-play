<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => '$2a$12$SS/gdYs.EDePEG6fSk.Sy.UtOZGZ0sxIh1g1mZ.tJUbHPw60OnYI2', // password2022
        ]);

        $user->assignRole('admin');
    }
}

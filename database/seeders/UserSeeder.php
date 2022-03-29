<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'm@m.m',
            'password' => bcrypt('password'),
            'institution_id' => 1,
        ]);
        $admin->assignRole('admin');
    }
}

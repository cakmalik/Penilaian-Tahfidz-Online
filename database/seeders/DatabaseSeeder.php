<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Database\Seeders\InstitutionSeeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Role::create(['name' => 'super-admin']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'teacher']);
        Role::create(['name' => 'student']);
        // Permission::create(['name' => 'edit articles']);
        $this->call(InstitutionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(GradeSeeder::class);
    }
}

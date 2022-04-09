<?php

namespace Database\Seeders;

use App\Models\Institution;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return DB::table('institutions')->insert([
        [
            'name' => 'SDIT Harapan Umat',
            'phone' => '085333920007',
            'email' => 'hasinilmalik@gmail.com',
            'address' => 'Jalan Danau Toba Gg. Islamic Center',
            'city' => 'Jember',
        ],
        [
            'name' => 'SMPIT Al-Ghazali',
            'phone' => '085333920007',
            'email' => 'smpit@gmail.com',
            'address' => 'Jalan jalan',
            'city' => 'Jember',
        ]
        ]);
    }
}

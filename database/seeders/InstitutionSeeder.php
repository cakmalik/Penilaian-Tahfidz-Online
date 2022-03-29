<?php

namespace Database\Seeders;

use App\Models\Institution;
use Illuminate\Database\Seeder;
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
        return Institution::Create([
            'name' => 'SDIT Harapan Umat',
            'phone' => '085333920007',
            'email' => 'hasinilmalik@gmail.com',
            'address' => 'Jalan Danau Toba Gg. Islamic Center',
            'city' => 'Jember',
        ]);
    }
}

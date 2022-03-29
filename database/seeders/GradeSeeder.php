<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            [
                'name'=>'1 Abu Bakar',
            ],
            [
                'name'=>'1 Umar Bin Khattab',
            ],
            [
                'name'=>'1 Utsman Bin Affan',
            ],
            [
                'name'=>'1 Ali Bin Abi Thalib',
            ],
            ///
            [
                'name'=>'2 Abu Bakar',
            ],
            [
                'name'=>'2 Umar Bin Khattab',
            ],
            [
                'name'=>'2 Utsman Bin Affan',
            ],
            [
                'name'=>'2 Ali Bin Abi Thalib',
            ],
            ///
            [
                'name'=>'3 Abu Bakar',
            ],
            [
                'name'=>'3 Umar Bin Khattab',
            ],
            [
                'name'=>'3 Utsman Bin Affan',
            ],
            [
                'name'=>'3 Ali Bin Abi Thalib',
            ],
            ///
            [
                'name'=>'4 Abu Bakar',
            ],
            [
                'name'=>'4 Umar Bin Khattab',
            ],
            [
                'name'=>'4 Utsman Bin Affan',
            ],
            [
                'name'=>'4 Ali Bin Abi Thalib',
            ],
            ///
            [
                'name'=>'5 Abu Bakar',
            ],
            [
                'name'=>'5 Umar Bin Khattab',
            ],
            [
                'name'=>'5 Utsman Bin Affan',
            ],
            [
                'name'=>'5 Ali Bin Abi Thalib',
            ],
            ///
            [
                'name'=>'6 Abu Bakar',
            ],
            [
                'name'=>'6 Umar Bin Khattab',
            ],
            [
                'name'=>'6 Utsman Bin Affan',
            ],
            [
                'name'=>'6 Ali Bin Abi Thalib',
            ],
       ]);
    }
}

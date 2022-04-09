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
                'institution_id' => 1,
                'name'=>'1 Abu Bakar',
            ],
            [   'institution_id' => 1,
                'name'=>'1 Umar Bin Khattab',
            ],
            [   'institution_id' => 1,
                'name'=>'1 Utsman Bin Affan',
            ],
            [   'institution_id' => 1,
                'name'=>'1 Ali Bin Abi Thalib',
            ],
            ///
            [   'institution_id' => 1,
                'name'=>'2 Abu Bakar',
            ],
            [   'institution_id' => 1,
                'name'=>'2 Umar Bin Khattab',
            ],
            [   'institution_id' => 1,
                'name'=>'2 Utsman Bin Affan',
            ],
            [   'institution_id' => 1,
                'name'=>'2 Ali Bin Abi Thalib',
            ],
            ///
            [   'institution_id' => 1,
                'name'=>'3 Abu Bakar',
            ],
            [   'institution_id' => 1,
                'name'=>'3 Umar Bin Khattab',
            ],
            [   'institution_id' => 1,
                'name'=>'3 Utsman Bin Affan',
            ],
            [   'institution_id' => 1,
                'name'=>'3 Ali Bin Abi Thalib',
            ],
            ///
            [   'institution_id' => 1,
                'name'=>'4 Abu Bakar',
            ],
            [   'institution_id' => 1,
                'name'=>'4 Umar Bin Khattab',
            ],
            [   'institution_id' => 1,
                'name'=>'4 Utsman Bin Affan',
            ],
            [   'institution_id' => 1,
                'name'=>'4 Ali Bin Abi Thalib',
            ],
            ///
            [   'institution_id' => 1,
                'name'=>'5 Abu Bakar',
            ],
            [   'institution_id' => 1,
                'name'=>'5 Umar Bin Khattab',
            ],
            [   'institution_id' => 1,
                'name'=>'5 Utsman Bin Affan',
            ],
            [   'institution_id' => 1,
                'name'=>'5 Ali Bin Abi Thalib',
            ],
            ///
            [   'institution_id' => 1,
                'name'=>'6 Abu Bakar',
            ],
            [   'institution_id' => 1,
                'name'=>'6 Umar Bin Khattab',
            ],
            [   'institution_id' => 1,
                'name'=>'6 Utsman Bin Affan',
            ],
            [   'institution_id' => 1,
                'name'=>'6 Ali Bin Abi Thalib',
            ],
       ]);
    }
}

<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel, WithHeadingRow
{

    public function model(array $row)
    {
        return new Student([
            'grade_id'    => $row['class_id'], 
            'name'     => $row['name'],
        ]);
    }
}

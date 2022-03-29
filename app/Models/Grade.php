<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    public function student()
    {
        return $this->hasOne(Student::class);
    }
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class,'grade_teacher');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'user_id'];

   public function user(){
       return $this->belongsTo(User::class);
   }
   public function grades()
   {
       return $this->belongsToMany(Grade::class,'grade_teacher');
   }
}

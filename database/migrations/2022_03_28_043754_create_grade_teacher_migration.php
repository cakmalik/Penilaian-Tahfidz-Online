<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('grade_teacher', function (Blueprint $table) {
            $table->integer('grade_id')->unsigned();
            $table->integer('teacher_id')->unsigned();
            $table->foreign('grade_id')->references('id')->on('grades')
            ->onDelete('cascade');            
            $table->foreign('teacher_id')->references('id')->on('teachers')
            ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('grade_teacher_migration');
    }
};

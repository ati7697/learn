<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class() extends Migration {
    public function up()
    {
        Schema::create('course_user', function (Blueprint $table) {
            $table->id();
            // Since we follow the naming conventions
            // can find id on users/courses
            $table->foreignId('user_id');
            $table->foreignId('course_id');
            // Will need to specify table
            $table->foreignID('current_lesson_id')->on('lessons');
            $table->timestamps();
        });
    }
};

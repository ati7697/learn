<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class() extends Migration {
    public function up()
    {
        Schema::create('lesson_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('lesson_id');
            $table->unsignedInteger('user_id');
            $table->json('game_state')->nullable();
            $table->boolean('completed')->default(false);
            $table->timestamps();
        });
    }
};

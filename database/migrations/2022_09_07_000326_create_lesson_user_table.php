<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class() extends Migration {
    public function up()
    {
        Schema::create('lesson_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lesson_id');
            $table->foreignId('user_id');
            $table->json('game_state')->nullable();
            $table->boolean('completed')->default(false);
            $table->timestamps();
        });
    }
};

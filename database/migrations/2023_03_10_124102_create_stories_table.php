<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stories', function (Blueprint $table) {
            $table->ulid()->unique();
            $table->string('cover');
            $table->foreignUlid('user_id');
            $table->foreignId('genre_id');
            $table->string('title', 100);
            $table->string('synopsis', 300);
            $table->longText('content');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stories');
    }
};

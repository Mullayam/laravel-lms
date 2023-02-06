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
        Schema::create('my_videos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('video_vid')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->boolean('is_playlist')->default(false);
            $table->string('playlist_id')->default('PL-myplaylist');
            $table->date('valid_to');
            $table->foreign('playlist_id')->references('play_id')->on('playlist');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('my_videos');
    }
};

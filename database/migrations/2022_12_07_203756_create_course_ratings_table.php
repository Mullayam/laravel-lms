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
        Schema::create('course_ratings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->integer('rating')->default(0);
            $table->longText('review')->nullable();
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
        Schema::dropIfExists('course_ratings');
    }
};

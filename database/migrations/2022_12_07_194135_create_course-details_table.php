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
        Schema::create('course_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->string('short_desc',100);
            $table->string('description')->nullable();
            $table->string('tags')->default("Free Videos,PDF");
            $table->string('level')->default("Beginner");
            $table->string('language')->default('Hindi');
            $table->string('requirements')->default('WiFi');
            $table->string('links')->nullable();
            $table->string('index_list')->nullable();
            $table->string('seo')->default("Free Video,SSC/Banking/Defence,Paid Batchs,Telegram Vidoes");
            $table->foreign('course_id')->references('id')->on('courses');

            $table->date("created_at")->default(now());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course-details');
    }
};

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
    public $timestamps=false;
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string("video_id");
            $table->foreignId("course_id")->constrained();
            $table->foreignId("section_id")->nullable()->constrained();
            $table->string("name");
            $table->string("details")->nullable();
            $table->string("type");
            $table->string("link");
            $table->string("poster")->nullable();
            $table->unsignedBigInteger("category_id")->constrained();
            $table->boolean("is_paid")->default(false);
            $table->boolean("is_down")->default(true);
            $table->boolean("is_active")->default(true);
            $table->date("add_on")->default(now());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
};

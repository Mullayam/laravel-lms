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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('thumbnail');
            $table->string('content_id')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->string('subcat_id');
            $table->string('add_by')->default('Learn');
            $table->string('course_length');
            $table->string('total_lecture');
            $table->float('price',5)->default(29.20);
            $table->boolean('is_free')->default(true);
            $table->integer('has_discount')->default(0);
            $table->string('sale_type')->default("subscription");
            $table->boolean('is_featured')->default(false);
            $table->enum('is_new',['1','2','3','4','5','6'])->default(1);
            $table->boolean('is_active')->default(true);

            $table->foreign('category_id')->references('id')->on('categories');
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
        Schema::dropIfExists('courses');
    }
};

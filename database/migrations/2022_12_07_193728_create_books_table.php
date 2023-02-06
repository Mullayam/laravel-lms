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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('book_id');
            $table->string('img');
            $table->string('pages')->default('NA');
            $table->string('size')->default('NA');
            $table->unsignedBigInteger('category_id');            
            $table->string('subject')->nullable();
            $table->string('type')->default('Others');
            $table->string('d_link');
            $table->boolean('is_active')->default(true);
            $table->boolean('is_down')->default(true);
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories');
          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};

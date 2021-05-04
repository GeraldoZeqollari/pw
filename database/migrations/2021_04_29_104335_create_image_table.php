<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image', function (Blueprint $table) {
            $table->integer('image_id')->primary();
            $table->string('path_name', 250);
            $table->integer('category_id');
            $table->integer('stock');
            $table->integer('artist_id');
            $table->decimal('price');
            $table->string('image_title', 50);
            $table->string('image_description', 1000);
            $table->dateTime('year');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_details', function (Blueprint $table) {
            $table->integer('card_id')->primary();
            $table->integer('card_number')->unique();
            $table->integer('payment_id');
            $table->integer('csc');
            $table->timestamp('expiration_date');
            $table->string('addres1', 50);
            $table->string('addres2', 50);
            $table->integer('zip_code');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('card_details');
    }
}

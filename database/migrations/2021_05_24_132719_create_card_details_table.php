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
            $table->id();
            $table->integer('user_id');
            $table->integer('card_number')->unique();
            $table->integer('payment_id');
            $table->integer('csc');
            $table->string('expiration_dateM');
            $table->string('expiration_dateY');
            $table->string('address1', 50);
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

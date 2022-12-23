<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewcheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newcheckouts', function (Blueprint $table) {
            $table->id();
            $table->integer('uid')->nullable();
            $table->integer('pid')->nullable();
            $table->string('checkout_productname')->nullable();
            $table->integer('checkout_price')->nullable();
            $table->integer('checkout_quantity')->nullable();
            $table->string('checkout_name')->nullable();
            $table->longText('checkout_number')->nullable();
            $table->string('checkout_email')->nullable();
            $table->string('checkout_method')->nullable();
            $table->string('checkout_state')->nullable();
            $table->string('checkout_city')->nullable();
            $table->string('checkout_status')->nullable();
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
        Schema::dropIfExists('newcheckouts');
    }
}

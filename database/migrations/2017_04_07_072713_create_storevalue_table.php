<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorevalueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storevalues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->dateTime('datetime');
            $table->integer('amount of money');
            $table->string('payment method');
            $table->string('bank name/code');
            $table->rememberToken();
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
        Schema::dropIfExists('storevalues');
    }
}

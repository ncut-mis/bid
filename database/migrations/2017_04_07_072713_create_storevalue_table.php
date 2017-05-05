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
            $table->integer('user_id');
            $table->timestampTz('datetime');
            $table->integer('amount_of_money');
            $table->string('payment_method');
            $table->string('bank_name_code');
            $table->rememberToken();
            $table->timestampsTz();
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

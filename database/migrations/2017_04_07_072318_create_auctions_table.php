<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('bid_type');
            $table->integer('max_bids');
            $table->integer('min_bids');
            $table->integer('quantity');
            $table->string('bid_function');
            $table->string('situation');
            $table->integer('winning_numbers');
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
       Schema::dropIfExists('auctions');
    }
}

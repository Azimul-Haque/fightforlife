<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('donation_id');
            $table->string('name');
            $table->string('institute');
            $table->string('phone');

            $table->string('amount');
            $table->string('aamarpay_charge')->default(0)
            $table->string('trxid')->nullable();
            $table->integer('payment_status');
            $table->string('card_type')->nullable();
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
        Schema::drop('donations');
    }
}

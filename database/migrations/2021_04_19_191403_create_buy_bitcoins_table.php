<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyBitcoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_bitcoins', function (Blueprint $table) {
            // Schema::enableForeignKeyConstraints();
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // $table->foreignId('user_id')->default(1)->constrained('users');
            $table->string('amount');
            $table->string('wallet_name');
            $table->string('hash_key');
            $table->string('status')->default('pending');
            $table->timestamps();
            // $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buy_bitcoins');
    }
}

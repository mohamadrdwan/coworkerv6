<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSyriatelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('syriatel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->double('categories');
            $table->double('prepay_price');
            $table->double('postpay_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('syriatel');
    }
}

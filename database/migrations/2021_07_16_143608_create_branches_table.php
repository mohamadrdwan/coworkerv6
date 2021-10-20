<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('branches');
        Schema::create('branches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('address');
          //  $table->unsignedBigInteger('operation_id');
           // $table->unsignedBigInteger('report_id');
            $table->unsignedBigInteger('governorate_id');
            $table->foreign('governorate_id')->references('id')->on('governorates');
           // $table->foreign('operation_id')->references('id')->on('operations');
           // $table->foreign('report_id')->references('id')->on('reports');
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
        Schema::dropIfExists('branches');
    }
}

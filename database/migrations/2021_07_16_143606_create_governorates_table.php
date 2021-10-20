<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGovernoratesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('governorates');
        Schema::create('governorates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
           // $table->unsignedBigInteger('branch_id');
           // $table->unsignedBigInteger('operation_id');
          //  $table->unsignedBigInteger('report_id');
          //  $table->foreign('branch_id')->references('id')->on('branches');
          //  $table->foreign('operation_id')->references('id')->on('operations');
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
        Schema::dropIfExists('governorates');
    }
}

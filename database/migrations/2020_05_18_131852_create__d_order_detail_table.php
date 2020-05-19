<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDOrderDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_d_order_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fOrderGuid', 50)->nullable();
            $table->string('fUserId', 50)->nullable();
            $table->string('fPId', 50)->nullable();
            $table->string('fName', 50)->nullable();
            $table->string('fPrice', 50)->nullable();
            $table->string('fQty', 50)->nullable();
            $table->string('fIsApproved', 50)->nullable();
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
        Schema::dropIfExists('_d_order_detail');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_d_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fOrderGuid', 50)->nullable();
            $table->string('fUserId', 50)->nullable();
            $table->string('fReceiver', 50)->nullable();
            $table->string('fEmail', 50)->nullable();
            $table->string('fAddress', 50)->nullable();
            $table->datetime('fDate');
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
        Schema::dropIfExists('_d_order');
    }
}

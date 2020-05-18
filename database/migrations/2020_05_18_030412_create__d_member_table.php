<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_d_member', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fUserId', 50)->nullable();
            $table->string('fPwd', 50)->nullable();
            $table->string('fName', 50)->nullable();
            $table->string('fEmail', 50)->nullable();
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
        Schema::dropIfExists('_d_member');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referrees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('borrower_id');
            $table->foreign('borrower_id')->references('id')->on('borrowers');
            $table->text('name');
            $table->unsignedInteger('mobile_no');
            $table->text('relationship');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('referrees');
    }
}

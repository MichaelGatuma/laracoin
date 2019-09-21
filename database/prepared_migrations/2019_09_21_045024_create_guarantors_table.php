<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuarantorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guarantors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('borrower_id');
            $table->foreign('borrower_id')->references('id')->on('borrowers');
            $table->text('fullname');
            $table->text('nickname');
            $table->unsignedInteger('mobile_no');
            $table->text('residence');
            $table->string('coordinates',24);
            $table->text('occupation');
            $table->text('relationship');
            $table->unsignedInteger('id_no');
            $table->longText('id_imageurl');
            $table->longText('signatureurl');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guarantors');
    }
}

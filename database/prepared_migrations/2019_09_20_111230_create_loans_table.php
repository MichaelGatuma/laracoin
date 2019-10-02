<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('borrowerid')->unsigned;
            $table->foreign('borrowerid')
                  ->references('id')->on('borrowers');
            $table->text('term');
            $table->longtext('details');
            $table->unsignedInteger('amount');
            $table->unsignedInteger('interest_rate');
            $table->dateTime('applied_at');
            $table->dateTime('disbursed_at');
            $table->date('repayment_deadline');
            $table->text('loan_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans');
    }
}

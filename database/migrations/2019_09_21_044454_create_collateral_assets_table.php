<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollateralAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collateral_assets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id');
            $table->foreign('owner_id')->references('id')->on('borrowers');
            $table->text('category');
            $table->text('serial_no');
            $table->date('year_purchase');
            $table->unsignedInteger('purchase_price');
            $table->unsignedInteger('current_value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collateral_assets');
    }
}

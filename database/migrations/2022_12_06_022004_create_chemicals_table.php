<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chemical', function (Blueprint $table) {
            $table->id();
            $table->string('Chemical_Name');
            $table->string('Lot_No');
            $table->string('Product_No');
            $table->string('CAS_No');
            $table->string('Formula');
            $table->string('Brand');
            $table->string('Packing_size');
            $table->integer('Quantity');
            $table->date('Received_Date');
            $table->date('Expired_Date');
            $table->string('Location');
            $table->string('Bottle_ID');

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
        Schema::dropIfExists('chemical');
    }
};

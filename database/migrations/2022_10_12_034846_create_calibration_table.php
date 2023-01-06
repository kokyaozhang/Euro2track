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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('Identification_No');
            $table->foreign('Identification_No')->references('Identification_No')->on('fieldequips');
            $table->date('Date_Performed');
            $table->string('Category');
            $table->string('Type');
            $table->string('Nature_of_Problem');
            $table->date('Correction_factor');
            $table->string('Validated_by');
            $table->string('Validated_Date');
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
        Schema::dropIfExists('calibrations');
    }
};

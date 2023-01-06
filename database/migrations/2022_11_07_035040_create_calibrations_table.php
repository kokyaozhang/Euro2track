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
        Schema::create('calibrations', function (Blueprint $table) {
            $table->id();
            $table->string('Identification_No');
            $table->foreign('Identification_No')->references('Identification_No')->on('fieldequips');
            $table->string('Calibration_point');
            $table->date('Expired_Date');
            $table->date('Calibration_Date');
            $table->date('Next_Due_Date');
            $table->string('Correction_factor');
            $table->string('Validated_by');
            $table->date('Validated_Date');
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

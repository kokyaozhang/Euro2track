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
        Schema::create('breakdowns', function (Blueprint $table) {
            $table->id();
            $table->string('Identification_No');
            $table->foreign('Identification_No')->references('Identification_No')->on('fieldequips');
            $table->date('Breakdown_date');
            $table->string('Breakdown_problem');
            $table->string('Breakdown_parts');
            $table->string('Description');
            $table->date('Complete_date');
            $table->string('Action_by');
            $table->string('Reviewed_by');
            $table->string('Remarks');
            $table->string('filename');
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
        Schema::dropIfExists('breakdowns');
    }
};

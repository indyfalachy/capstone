<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientQueues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_queues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('patient_id');
            $table->unsignedBigInteger('unit_service_id');
            $table->integer('queue');
            $table->integer('status');

            $table->foreign('patient_id')
                ->references('id')
                ->on('patients')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign('unit_service_id')
                ->references('id')
                ->on('unit_services')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
//
//            $table->foreign('medical_initial_id')
//                ->references('id')
//                ->on('medical_initials')
//                ->cascadeOnDelete()
//                ->cascadeOnUpdate();

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
        Schema::dropIfExists('patient_queues');
    }
}

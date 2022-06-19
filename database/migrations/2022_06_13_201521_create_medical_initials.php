<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalInitials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_initials', function (Blueprint $table) {
            $table->id();
            $table->text('main_complaint');
            $table->text('medical_history_now');
            $table->text('medical_history-past');
            $table->text('condotion');
            $table->text('awarnes');
            $table->text('gcs');
            $table->text('sick_state');
            $table->text('nutritional_status');
            $table->string('blood_pressure');
            $table->integer('pulse');
            $table->double('temperature');
            $table->integer('weight');
            $table->integer('height');
            $table->text('addition_note');

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
        Schema::dropIfExists('medical_initials');
    }
}

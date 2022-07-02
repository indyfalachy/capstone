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
            $table->text('medical_history_now')->nullable();
            $table->text('medical_history-past')->nullable();
            $table->text('condition')->nullable();
            $table->text('awareness')->nullable();
            $table->text('gcs')->nullable();
            $table->text('sick_state')->nullable();
            $table->text('nutritional_status')->nullable();
            $table->string('blood_pressure')->nullable();
            $table->integer('pulse')->nullable();
            $table->double('temperature')->nullable();
            $table->integer('weight')->nullable();
            $table->integer('height')->nullable();
            $table->text('addition_note')->nullable();

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

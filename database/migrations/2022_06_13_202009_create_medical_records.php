<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('pasien_id');
            $table->string('file_location');
            $table->unsignedBigInteger('unit_service_id');
            $table->text('soap');
            $table->text('action');
            $table->string('type');
            $table->integer('refer');
            $table->string('file_addition');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign('pasien_id')
                ->references('id')
                ->on('pasiens')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign('unit_service_id')
                ->references('id')
                ->on('unit_services')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

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
        Schema::dropIfExists('medical_records');
    }
}

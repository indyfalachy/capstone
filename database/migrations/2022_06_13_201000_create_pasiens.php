<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik');
            $table->string('kk')->nullable();
            $table->text('address')->nullable();
            $table->text('birth_place')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('village')->nullable();
            $table->string('district')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('job')->nullable();
            $table->integer('bpjs_status')->default(1);
            $table->string('no_bpjs')->nullable();
            $table->string('allergy')->nullable();
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
        Schema::dropIfExists('patients');
    }
}

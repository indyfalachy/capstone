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
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nik');
            $table->text('address');
            $table->text('birth_place');
            $table->date('birth_date');
            $table->string('village');
            $table->string('district');
            $table->string('gender');
            $table->string('religion');
            $table->string('job');
            $table->string('no_bpjs');
            $table->string('allergy');



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
        Schema::dropIfExists('pasiens');
    }
}

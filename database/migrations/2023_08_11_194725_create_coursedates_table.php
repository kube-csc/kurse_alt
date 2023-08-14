<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coursedates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trainer_id');        //idtrainer
            $table->unsignedBigInteger('course_id');         //idkurs
            $table->unsignedBigInteger('sportSection_id');   //idgruppe
            $table->date('kurstermin');
            $table->time('startzeit');
            $table->time('startzeitmax');
            $table->time('laenge');

            $table->dateTime('kursstarttermin');
            $table->dateTime('kursendtermin');
            $table->dateTime('kursstartvorschlag');
            $table->dateTime('kursendvorschlag');
            $table->dateTime('kursstartvorschlagkunde');
            $table->dateTime('kursendvorschlagkunde');

            $table->integer('sportgeraetanzahl');

            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('bearbeiter_id');

            $table->SoftDeletes();
            $table->timestamps();

            $table->foreign('trainer_id')->references('id')->on('users');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('sportSection_id')->references('id')->on('sport_sections');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coursedates');
    }
};

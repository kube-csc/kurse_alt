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
        Schema::create('sport_equipment_bookeds', function (Blueprint $table) {
            $table->id();

            $table->integer('trainer_id');
            $table->integer('mitglied_id')->nullable();
            $table->integer('teilnehmer_id')->nullable();
            $table->integer('sportgeraet_id')->nullable();
            $table->integer('kurs_id');

            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sport_equipment_bookeds');
    }
};

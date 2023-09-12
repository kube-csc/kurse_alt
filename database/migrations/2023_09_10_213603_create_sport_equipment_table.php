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
        Schema::create('sport_equipment', function (Blueprint $table) {
            $table->id();

            //$table->integer('idsportgeraet', true);
            $table->string('sportgeraet');
            $table->unsignedBigInteger('sportSection_id');
            $table->string('bild', 100);
            $table->integer('pixx')->default(0);
            $table->integer('pixy')->default(0);
            $table->date('anschafdatum');
            $table->date('verschrottdatum')->nullable();
            $table->unsignedBigInteger('mitgliedprivat_id')->nullable();
            $table->integer('sportleranzahl')->default(0);
            $table->float('laenge', 3);
            $table->float('breite', 3);
            $table->float('hoehe', 3);
            $table->float('gewicht', 3);
            $table->float('tragkraft', 3);
            $table->text('typ')->nullable();
            $table->string('privat', 1);

            $table->unsignedBigInteger('autor_id');
            $table->unsignedBigInteger('bearbeiter_id');

            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sport_equipment');
    }
};

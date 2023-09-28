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
        Schema::create('course_participants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sportSection_id');
            $table->string('nachname', 60);
            $table->string('vorname', 60);
            $table->string('passwort');
            $table->string('email', 60);
            $table->string('telefon', 60);
            $table->string('loginname', 60);
            $table->integer('nachricht');
            $table->integer('status');

            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_participants');
    }
};

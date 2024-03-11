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
        Schema::create('o_speakers', function (Blueprint $table) {
            $table->id();
            $table->string('speaker_name');
            $table->string('speaker_email');
            $table->string('speaker_image');
            $table->string('speaker_contact');
            $table->string('speaker_date');
            $table->string('speaker_time');
            $table->string('speaker_city');
            $table->string('speaker_info');
            $table->string('experience');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('o_speakers');
    }
};

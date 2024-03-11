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
        Schema::create('add_events', function (Blueprint $table) {
            $table->id();
            $table->string('event_date');
            $table->string('event_time');
            $table->string('event_image');
            $table->string('event_start_date_booking');
            $table->string('event_detail');
            $table->string('event_organize_team_name');
            $table->string('event_price');
            $table->string('event_place');
            $table->string('event_city');
            $table->string('event_address');
            $table->string('speacker_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_events');
    }
};

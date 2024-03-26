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
        Schema::create('eventinformations', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("event_date");
            $table->string("event_time");
            $table->string("event_details");
            $table->string("event_price");
            $table->string("event_place");
            $table->string("event_city");
            $table->string("event_address");
            $table->string("image");
            $table->string("start_date_booking");
            $table->string("event_organization_team_nme");
            $table->string("event_speaker_nae");
            $table->string("max_seats");
            $table->string("cat_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventinformations');
    }
};

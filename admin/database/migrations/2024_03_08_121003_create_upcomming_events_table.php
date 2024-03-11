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
        Schema::create('upcomming_events', function (Blueprint $table) {
            $table->id();
            $table->string("main_title");
            $table->string("sub_title1");
            $table->string("sub_title2");
            $table->string("information");
            $table->string("time");
            $table->string("place");
            $table->string("event_details");
            $table->string("image");
            $table->string("book_ticket");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upcomming_events');
    }
};

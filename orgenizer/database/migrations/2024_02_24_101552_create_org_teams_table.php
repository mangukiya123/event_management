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
        Schema::create('org_teams', function (Blueprint $table) {
            $table->id();
            $table->string('org_team_name');
            $table->string('org_team_email');
            $table->string('org_team_about');
            $table->string('org_team_images');
            $table->string('org_team_contact');
            $table->string('org_team_city');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('org_teams');
    }
};

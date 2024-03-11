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
        Schema::create('staff_registers', function (Blueprint $table) {
            $table->id();
            $table->string('staff_name');
            $table->string('staff_birthdate');
            $table->string('staff_address');
            $table->string('staff_email');
            $table->string('password');
            $table->string('image');
            $table->string('phone_no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_registers');
    }
};

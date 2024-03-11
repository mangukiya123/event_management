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
        Schema::create('comment_tables', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("cmt");
            $table->string("event_id");
            $table->string("customer_id");
            $table->string("proffession");
            $table->string("cmt_date");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment_tables');
    }
};

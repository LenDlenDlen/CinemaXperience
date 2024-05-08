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
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('series_id');
            $table->foreign('series_id')->references('series_id')->on('series')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('duration');
            $table->string('title', 50);
            $table->integer('episode_number');
            $table->integer('season_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('episodes');
    }
};

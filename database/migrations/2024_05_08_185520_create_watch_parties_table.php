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
        Schema::create('watch_parties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('watch_sessions_id');
            $table->foreign('watch_sessions_id')->references('id')->on('watch_sessions')->onDelete('cascade')->onUpdate('cascade');
            $table->string('status', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('watch_parties');
    }
};

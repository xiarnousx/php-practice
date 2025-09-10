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
        Schema::create('service_logs', function (Blueprint $table) {
            $table->id();
            $table->string('message', 255);
            $table->json('context')->nullable();
            $table->string('level');
            $table->string('channel')->index();
            $table->string('file')->nullable();
            $table->integer('line')->nullable();
            $table->string('remote_addr')->nullable();
            $table->string('user_agent', 1024)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_logs');
    }
};

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
        Schema::create('message', function (Blueprint $table) {
            $table->id();
            $table->string('order_id');
            $table->bigInteger('sender_id')->nullable();
            $table->bigInteger('receive_id')->nullable();
            $table->longText('message')->nullable();
            $table->json('media')->nullable();
            $table->enum('status',['Read','UnRead'])->default('UnRead');
            $table->enum('send_by',['Admin','Writer']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('message');
    }
};

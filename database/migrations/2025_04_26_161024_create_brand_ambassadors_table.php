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
        Schema::create('brand_ambassadors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sender_id'); // Your ID
            $table->string('sender_name');           // Your Name
            $table->string('receiver_name');          // Receiver Name
            $table->string('subject');                // Email Subject
            $table->text('message'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand_ambassadors');
    }
};

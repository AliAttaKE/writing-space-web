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
        Schema::create('cms_websites', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();

            $table->string('heading_one')->nullable();
            $table->text('content_one')->nullable();
            $table->string('heading_two')->nullable();
            $table->text('content_two')->nullable();


            $table->string('heading_three')->nullable();
            $table->text('content_three')->nullable();
            $table->string('heading_four')->nullable();
            $table->text('content_four')->nullable();
            
            $table->boolean('status')->default(true); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms_websites');
    }
};

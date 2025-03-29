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
        Schema::create('papers', function (Blueprint $table) {
            $table->id();
            $table->string('subject_topic');
            $table->string('paper_type')->nullable();
            $table->string('word_count')->nullable();
            $table->string('paper_title')->nullable();
            $table->string('citation')->nullable();
            $table->string('paper_summary')->nullable();
            $table->string('paper_outline')->nullable();
            $table->string('turnitin_ai_report')->nullable();
            $table->string('turnitin_plg_report')->nullable();
            $table->string('paper')->nullable();
            $table->enum('status', ['Enable', 'Disable'])->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('papers');
    }
};

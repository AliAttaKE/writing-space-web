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
       Schema::create('file_chat_g_p_t_s', function (Blueprint $table) {
            $table->id();
            $table->string('file_name')->nullable();
            $table->string('title')->nullable();
             $table->string('order_id')->nullable();
            $table->string('file_path')->nullable();
            $table->string('file_type')->nullable();
            $table->string('Writer')->nullable();
            $table->string('Size')->nullable();
            $table->string('total_size')->nullable();
            $table->string('download_time')->nullable();
           $table->string('status')->nullable()->default('0');

            $table->foreignId('folder_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_chat_g_p_t_s');
    }
};

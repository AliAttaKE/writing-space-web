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
        Schema::create('custom_invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('date')->nullable();
            $table->string('invoice_id')->nullable();
            $table->string('from_name')->nullable();
            $table->string('from_email')->nullable();
            $table->text('from_note')->nullable();
            $table->string('to_name')->nullable();
            $table->string('to_email')->nullable();
            $table->text('to_note')->nullable();
            $table->json('item_name')->nullable();
            $table->json('description')->nullable();
            $table->json('pages')->nullable();
            $table->json('price_per_page')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('custom_invoices');
    }
};

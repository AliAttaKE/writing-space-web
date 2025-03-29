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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('invoice_id')->nullable();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('item_name')->nullable();
            $table->integer('page')->nullable();
            $table->integer('price_per_page')->nullable();
            $table->integer('total')->nullable();
            $table->string('to_name')->nullable();
            $table->string('to_email')->nullable();
            $table->string('order_id')->nullable();
            $table->longText('description')->nullable();
            //added 05-04-2024
            $table->enum('invoice_type',['custom_inc','package_inc'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};

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
        Schema::create('customer_data', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('account_id');
            $table->string('email')->unique();
            $table->string('customer_group');
            $table->string('payment_method');
            $table->enum('status', ['enable', 'disable']); // Enum data type with 'enable' and 'disable' values
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_data');
    }
    
};

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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('amount')->nullable(); 
            $table->string('authenticationStatus')->nullable(); 
            $table->string('userid')->nullable(); 
            $table->string('chargeback_amount')->nullable(); 
            $table->string('chargeback_currency')->nullable(); 
            $table->timestamp('creationTime')->nullable(); 
            $table->string('currency')->nullable(); 
            $table->string('reference')->nullable(); 
            $table->string('status')->nullable(); 
            $table->string('merchantAmount')->nullable(); 
            $table->string('merchantCategoryCode')->nullable(); 
            $table->string('merchantCurrency')->nullable(); 
            $table->timestamp('lastUpdatedTime')->nullable(); 
            $table->string('totalAuthorizedAmount')->nullable(); 
            $table->string('totalCapturedAmount')->nullable(); 
            $table->string('totalDisbursedAmount')->nullable(); 
            $table->string('totalRefundedAmount')->nullable(); 
            $table->string('fundingMethod')->nullable(); 
            $table->string('user_id')->nullable();
         
            
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};

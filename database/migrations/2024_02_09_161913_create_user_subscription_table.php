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
        Schema::create('user_subscription', function (Blueprint $table) {
            $table->id();
            $table->string('subscription_id');
            $table->string('user_id');
            $table->string('total_pages');
            $table->bigInteger('remaining_pages')->default(0);
            $table->bigInteger('rollover_pages');
            $table->bigInteger('remaining_rollover_pages')->default(0);
            $table->string('due_date');
            $table->enum('status',['Active','InActive'])->default('Active');
            $table->enum('isEmail',['Yes','No'])->default('NO');
            $table->enum('isEmailExpire',['Yes','No'])->default('NO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_subscription');
    }
};

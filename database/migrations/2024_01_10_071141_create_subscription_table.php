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
        Schema::create('subscription', function (Blueprint $table) {
            $table->id();
            $table->string('subscription_name');
            $table->string('service_type')->nullable();
            $table->bigInteger('cost_per_page')->nullable();
            $table->string('set_time')->nullable();
            $table->bigInteger('min_page')->nullable();
            $table->bigInteger('max_page')->nullable();
            $table->bigInteger('rollover_limit')->nullable();
            $table->bigInteger('total_subscription')->nullable();
            $table->json('restrictions')->nullable();
            $table->bigInteger('inform_customer_expiry_date')->nullable();
            $table->string('inform_customer_email')->nullable();
            $table->json('more_restrictions')->nullable();
            $table->integer('daily')->nullable();
            $table->integer('select_days')->nullable();
            $table->integer('best_offer')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription');
    }
};

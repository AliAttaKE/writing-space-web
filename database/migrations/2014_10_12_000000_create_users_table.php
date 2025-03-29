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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('account_id')->nullable();
            $table->enum('role',['admin','customer'])->default('customer');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->longText('description')->nullable();
            $table->string('language')->nullable();
            $table->boolean('status')->default(true);
            $table->string('avatar')->nullable();
            $table->string('phone')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postcode')->nullable();
            $table->string('country')->nullable();
            $table->time('authenticated_at')->nullable();
            $table->enum('tier',['tier_1','tier_2','tier_3','tier_4','tier_5','prospects'])->default('prospects');
            $table->enum('customer',['Custom','Subscription'])->default('Custom');
            $table->string('subscription_id')->nullable();
            $table->integer('is_brand_amb')->default(0);
            $table->integer('brand_amb_created_by')->default(0);
            $table->integer('is_block')->default(0);
            $table->string('verify_code')->nullable();
            $table->boolean('verified')->default(0);
            $table->boolean('deleted_record')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }




    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id');
            $table->longText('subject');
            $table->longText('description')->nullable();
            $table->string('academic_level')->nullable();
            $table->string('type_of_paper')->nullable();
            $table->string('paper_format')->nullable();
             $table->string('Summaryorder_status')->nullable();
            $table->string('language_spelling')->nullable();
            $table->bigInteger('number_of_pages')->nullable();
            $table->string('revision_status')->nullable();
            $table->string('spacing')->nullable();
            $table->bigInteger('powerpoint_slide')->nullable();
            $table->bigInteger('no_of_extra_sources')->nullable();
            $table->string('deadline')->nullable();
            $table->boolean('statistical_analysis')->nullable();
            $table->enum('order_type',['Custom','Subscription','Product']);
            $table->enum('order_show',['Enable','Disable'])->default('Enable');
            $table->enum('order_status', ['Pending','In-Progress','Revision','Delivered','Canceled','Completed','Refund', ])->nullable();
            $table->longText('topic')->nullable();
            $table->longText('submitting')->nullable();
            $table->json('additional_info')->nullable();
            $table->longText('coupon')->nullable();
            $table->string('discount')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->float('additional_cost')->nullable();
            $table->float('cost')->nullable();
            $table->float('total_cost')->nullable();
            $table->string('payment_status')->nullable();
            $table->bigInteger('cost_per_page')->nullable();
            $table->string('email')->nullable();
            $table->string('backup_email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionpivotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptionpivots', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('subscription_id');
            $table->string('duration')->nullable();
            $table->string('duration_type')->nullable();
            $table->string('start_date')->nullable();
            $table->string('pages_no')->nullable();
            $table->string('price_pp')->nullable();
            $table->string('actual_price')->nullable();
            $table->string('compare_price')->nullable();
            $table->string('product_type')->nullable();
            $table->string('stock')->nullable();
            $table->string('min_purchase')->nullable();
            $table->string('max_purchase')->nullable();
            $table->foreign('subscription_id')->references('id')->on('subscriptions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptionpivots');
    }
}

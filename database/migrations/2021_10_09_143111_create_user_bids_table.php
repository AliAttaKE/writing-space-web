<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_bids', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('erp_user_id');
            $table->unsignedInteger('erp_order_id');
            $table->unsignedInteger('commission_id');
            $table->string('erp_status')->default('0');
            $table->string('erp_description')->nullable();
            $table->string('erp_datetime')->nullable();
            $table->string('erp_time')->nullable();
            $table->string('erp_type')->nullable();
            $table->foreign('erp_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('erp_order_id')->references('id')->on('create_orders')->onDelete('cascade');
            $table->foreign('commission_id')->references('id')->on('add_commissionx`')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_bids');
    }
}

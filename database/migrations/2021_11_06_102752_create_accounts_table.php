<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('team_order_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('commission_id');
            $table->string('title')->nullable();
            $table->string('hours')->nullable();
            $table->integer('ext_source')->nullable();
            $table->integer('pages')->nullable();
            $table->integer('spacing')->nullable();
            $table->integer('commission_rate')->nullable();
            $table->integer('payment_status')->nullable();
            $table->integer('type')->nullable();
            $table->foreign('order_id')->references('id')->on('create_orders')->onDelete('cascade');
            $table->foreign('team_order_id')->references('id')->on('team_orders')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('commission_id')->references('id')->on('add_commission')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('accounts');
    }
}

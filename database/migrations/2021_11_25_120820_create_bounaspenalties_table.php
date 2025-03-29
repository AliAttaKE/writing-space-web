<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBounaspenaltiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bounaspenalties', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('type')->nullable();
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('team_order_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('commission_id');
            $table->string('reason')->nullable();
            $table->integer('amount')->nullable();
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
        Schema::dropIfExists('bounaspenalties');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('order_id');
            $table->unsignedInteger('team_order_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('commission_id');
            $table->string('title')->nullable();
            $table->string('sec_title')->nullable();
            $table->string('keywords')->nullable();
            $table->longText('description')->nullable();
            $table->string('cat_1')->nullable();
            $table->string('cat_2')->nullable();
            $table->string('main_file')->nullable();
            $table->text('sources')->nullable();
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
        Schema::dropIfExists('submissions');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('erp_user_id');
            $table->unsignedInteger('erp_role_id');
            $table->string('erp_bids')->nullable();
            $table->string('erp_claims')->nullable();
            $table->foreign('erp_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('erp_role_id')->references('id')->on('work_flow')->onDelete('cascade');
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
        Schema::dropIfExists('bids');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddCommissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_commission', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('erp_role_id')->nullable();
            $table->unsignedInteger('erp_level_id')->nullable();
            $table->string('package_name')->nullable();
            $table->string('erp_daily_bids')->nullable();
            $table->string('erp_daily_claims')->nullable();
            $table->string('erp_eight_hrs')->nullable();
            $table->string('erp_tf_hrs')->nullable();
            $table->string('erp_fe_hrs')->nullable();
            $table->string('erp_three_days')->nullable();
            $table->string('erp_five_days')->nullable();
            $table->string('erp_seven_days')->nullable();
            $table->string('erp_fourteen_days')->nullable();
            $table->string('erp_fourteen_plus_days')->nullable();
            $table->foreign('erp_role_id')->references('id')->on('work_flow')->onDelete('cascade');
            $table->foreign('erp_level_id')->references('id')->on('commission')->onDelete('cascade');

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
        Schema::dropIfExists('add_commission');
    }
}

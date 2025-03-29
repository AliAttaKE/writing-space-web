<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_orders', function (Blueprint $table) {

                       $table->increments('id')->unsigned();
                       $table->unsignedInteger('erp_team_id')->nullable();
                       $table->unsignedInteger('erp_commission_id')->nullable();
                       $table->unsignedInteger('erp_order_id')->nullable();
                       $table->unsignedInteger('erp_user_id')->nullable();
                       $table->string('available_status')->nullable();
                       $table->string('pick_status')->nullable();
                       $table->string('complete_status')->nullable();
                       $table->string('revision')->nullable();
                       $table->longText('reason')->nullable();
                       $table->string('order_files')->nullable();
                       $table->string('order_links')->nullable();
                       $table->foreign('erp_commission_id')->references('id')->on('add_commission')->onDelete('cascade');
                       $table->foreign('erp_team_id')->references('id')->on('teams')->onDelete('cascade');
                       $table->foreign('erp_user_id')->references('id')->on('users')->onDelete('cascade');
                       $table->foreign('erp_order_id')->references('id')->on('create_orders')->onDelete('cascade');
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
        Schema::dropIfExists('team_orders');
    }
}

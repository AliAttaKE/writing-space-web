<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructionPivotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instruction_pivots', function (Blueprint $table) {


                $table->increments('id')->unsigned();
                $table->unsignedInteger('erp_users_id');
                $table->unsignedInteger('erp_order_id');
                $table->text('erp_message')->nullable();
                $table->foreign('erp_users_id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('erp_order_id')->references('id')->on('create_orders')->onDelete('cascade');

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
        Schema::dropIfExists('instruction_pivots');
    }
}

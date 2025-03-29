<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('RequestPages', function (Blueprint $table) {


                                                           $table->increments('id')->unsigned();
                                                           $table->unsignedInteger('team_order_id')->nullable();
                                                           $table->string('pages_no')->nullable();
                                                           $table->string('DateTime')->nullable();
                                                           $table->string('description')->nullable();
                                                           $table->foreign('team_order_id')->references('id')->on('team_orders')->onDelete('cascade');
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
        Schema::dropIfExists('request_pages');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaneltiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panelties', function (Blueprint $table) {


                               $table->increments('id')->unsigned();
                               $table->unsignedInteger('erp_users_id');
                               $table->string('erp_title')->nullable();
                                $table->string('erp_status')->nullable();
                                $table->text('erp_message')->nullable();
                                $table->text('erp_panelty')->nullable();
                                $table->foreign('erp_users_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('panelties');
    }
}

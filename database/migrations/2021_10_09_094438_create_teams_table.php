<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('teams', function (Blueprint $table) {

                  $table->increments('id')->unsigned();
                  $table->string('erp_team_name')->nullable();
                  $table->string('erp_status')->nullable();
                  $table->string('erp_package')->nullable();
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
        Schema::dropIfExists('teams');
    }
}

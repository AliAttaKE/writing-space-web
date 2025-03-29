<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('announcements', function (Blueprint $table) {

                    $table->increments('id')->unsigned();
                    $table->string('erp_title')->nullable();
                     $table->string('erp_timetype')->nullable();
                     $table->string('Date')->nullable();
                     $table->string('erp_status')->nullable();
                     $table->text('erp_message')->nullable();
                     $table->string('erp_file')->nullable();
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
        Schema::dropIfExists('announcements');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitationStylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citation__styles', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('erp_user_id');
            $table->string('erp_title')->nullable();
            $table->string('erp_citation_message')->nullable();
            $table->string('erp_file_type')->nullable();
            $table->string('erp_datetime')->nullable();
            $table->string('erp_date')->nullable();
            $table->string('erp_status')->default('0');
            $table->foreign('erp_user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('citation__styles');
    }
}

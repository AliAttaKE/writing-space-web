<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaperTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper_types', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('erp_user_id');
            $table->string('erp_paper_type')->nullable();
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
        Schema::dropIfExists('paper_types');
    }
}

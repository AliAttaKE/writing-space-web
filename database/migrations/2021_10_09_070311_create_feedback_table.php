<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('erp_user_id');
            $table->string('erp_coutomer_services')->nullable();
            $table->string('erp_feedback_beans')->nullable();
            $table->string('erp_delivery_drives')->nullable();
            $table->string('erp_requirement_need')->nullable();
            $table->string('erp_general_feedback')->nullable();
            $table->string('erp_beans_clients')->nullable();
            $table->string('erp_feedback_message')->nullable();
            $table->string('erp_suggestion')->nullable();
            $table->foreign('erp_user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('feedback');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignquizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignquiz', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('level_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('users_id')->nullable();
            $table->unsignedInteger('quizzes')->nullable();
            $table->unsignedInteger('quiz_is_done')->nullable();
            $table->unsignedInteger('quiz_is_passed')->nullable();
            $table->string('quiz_type')->nullable();
             $table->string('order_by')->nullable();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('work_flow')->onDelete('cascade');
            $table->foreign('level_id')->references('id')->on('commission')->onDelete('cascade');
            $table->foreign('quizzes')->references('id')->on('quizzes')->onDelete('cascade');
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
        Schema::dropIfExists('assignquiz');
    }
}

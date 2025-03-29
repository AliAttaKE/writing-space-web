<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('quizzes', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('erp_user_id');
            $table->string('erp_quiz_name')->nullable();
            $table->string('erp_quiz_type')->nullable();
            $table->string('erp_quiz_formats')->nullable();
            $table->string('erp_quiz_timer')->nullable();
            $table->string('erp_quiz_status')->default('0');
            $table->string('erp_quiz_passing')->nullable();
            $table->string('erp_quiz_result')->nullable();
            $table->string('erp_order_by')->nullable();
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
        Schema::dropIfExists('quizzes');
    }
}

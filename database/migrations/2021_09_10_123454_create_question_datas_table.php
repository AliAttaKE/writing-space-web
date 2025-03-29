<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_datas', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('erp_quiz_id');
            $table->unsignedInteger('erp_question_id');
            $table->string('erp_question_text')->nullable();
            $table->string('erp_question_type')->nullable();
            $table->string('erp_checkbox_option')->nullable();
            $table->string('erp_checkbox_hints')->nullable();
            $table->string('erp_file')->nullable();
            $table->string('erp_file_type')->nullable();
            $table->string('erp_comment')->nullable();
            $table->foreign('erp_quiz_id')->references('id')->on('quizzes')->onDelete('cascade');
            $table->foreign('erp_question_id')->references('id')->on('questions')->onDelete('cascade');
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
        Schema::dropIfExists('question_datas');
    }
}

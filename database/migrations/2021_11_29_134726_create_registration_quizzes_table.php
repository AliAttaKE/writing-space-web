<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

{
        Schema::create('registrationquizzes', function (Blueprint $table) {


                                                     $table->increments('id')->unsigned();
                                                    $table->unsignedInteger('user_id')->nullable();
                                                    $table->unsignedInteger('quiz_id')->nullable();
                                                    $table->string('quiz_type')->nullable();
                                                    $table->string('quiz_reorder')->nullable();
                                                    $table->string('quiz_is_done')->nullable();
                                                    $table->string('quiz_is_passed')->nullable();
                                                    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                                                    $table->foreign('quiz_id')->references('id')->on('quizzes')->onDelete('cascade');
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
        Schema::dropIfExists('registration_quizzes');
    }
}

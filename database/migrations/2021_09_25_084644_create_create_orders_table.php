<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_orders', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->unsignedInteger('erp_user_id');
            $table->string('erp_status')->default('0');
            $table->string('erp_order_topic')->nullable();
            $table->string('erp_order_text')->nullable();
            $table->longText('erp_order_message')->nullable();
            $table->string('erp_academic_name')->nullable();
            $table->longText('erp_academic_description')->nullable();
            $table->string('erp_paper_type')->nullable();
            $table->longText('erp_paper_description')->nullable();
            $table->string('erp_subject_name')->nullable();
            $table->longText('erp_subject_description')->nullable();
            $table->string('erp_paper_format')->nullable();
            $table->longText('erp_format_description')->nullable();
            $table->unsignedInteger('erp_team');
            $table->string('erp_language_name')->nullable();
            $table->string('erp_resource_materials')->nullable();
            $table->string('erp_resource_file')->nullable();
            $table->string('erp_number_Pages')->nullable();
            $table->string('erp_spacing')->nullable();
            $table->string('erp_powerPoint_slides')->nullable();
            $table->string('erp_extra_source')->nullable();
            $table->string('erp_deadline')->nullable();
            $table->string('erp_copy_sources')->nullable();
            $table->string('erp_page_summary')->nullable();
            $table->string('erp_paper_outline')->nullable();
            $table->string('erp_abstract_page')->nullable();
            $table->string('erp_statistical_analysis')->nullable();
            $table->foreign('erp_user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('erp_team')->references('id')->on('teams')->onDelete('cascade');
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
        Schema::dropIfExists('create_orders');
    }
}

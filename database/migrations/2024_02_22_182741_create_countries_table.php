<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('iso');
            $table->string('name');
            $table->string('nicename');
            $table->string('iso3')->nullable();
            $table->smallInteger('numcode')->nullable();
            $table->integer('phonecode')->nullable();
            $table->timestamps();
        });
    }

    // CREATE TABLE IF NOT EXISTS `country` (
    //     `id` int(11) NOT NULL AUTO_INCREMENT,
    //     `iso` char(2) NOT NULL,
    //     `name` varchar(80) NOT NULL,
    //     `nicename` varchar(80) NOT NULL,
    //     `iso3` char(3) DEFAULT NULL,
    //     `numcode` smallint(6) DEFAULT NULL,
    //     `phonecode` int(5) NOT NULL,
    //     PRIMARY KEY (`id`)
    //   ) ENGINE=MyISAM  DEFAULT CHARSET=latin1;

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};

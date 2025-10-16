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
        Schema::table('message', function (Blueprint $table) {
            $table->enum('send_by', ['Admin', 'Writer', 'Customer'])->change();
            $table->enum('send_to', ['Admin', 'Writer', 'Customer'])->after('send_by');
            $table->enum('type', ['Admin', 'Writer', 'Customer'])->after('send_to');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('message', function (Blueprint $table) {
            $table->enum('send_by', ['Admin', 'Writer'])->change();
            $table->dropColumn(['send_to', 'type']);
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('booking_job_items', function (Blueprint $table) {
            //
            // $table->float('orgUnitPrice')->nullable();
            // $table->boolean('is_inclusive')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('booking_job_items', function (Blueprint $table) {
            //
            // $table->dropColumn('orgUnitPrice')->nullable();
            // $table->dropColumn('is_inclusive')->nullable();
        });
    }
};

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
        Schema::table('vendor_profiles', function (Blueprint $table) {
        // $table->integer('is_vat')->default(0);
        // $table->integer('is_main_account')->default(0);
        // $table->integer('is_finish')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vendor_profiles', function (Blueprint $table) {
            // $table->dropColumn('is_vat')->nullable();
            // $table->dropColumn('is_main_account')->nullable();
            // $table->dropColumn('is_finish')->nullable();
        });
    }
};

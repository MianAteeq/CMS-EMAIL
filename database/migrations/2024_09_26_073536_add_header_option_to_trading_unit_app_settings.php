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
        Schema::table('trading_unit_app_settings', function (Blueprint $table) {

            $table->integer('header_option')->default(1);
            $table->integer('footer_option')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trading_unit_app_settings', function (Blueprint $table) {

            $table->dropColumn('header_option')->nullable();
            $table->dropColumn('footer_option')->nullable();

        });
    }
};

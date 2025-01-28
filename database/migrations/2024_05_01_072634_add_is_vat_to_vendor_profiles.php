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

            $table->integer('is_overview')->default(0);
            $table->integer('is_business_info')->default(0);
            $table->integer('is_trading_names')->default(0);
            $table->integer('is_business_activity')->default(0);
            $table->integer('is_trading_unit')->default(0);
            $table->integer('is_subscription')->default(0);
            $table->integer('is_direct_debit')->default(0);
            $table->integer('is_bank')->default(0);
            $table->integer('is_terms')->default(0);
            $table->integer('bank_status')->default(0);

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
            $table->dropColumn('is_overview')->nullable();
            $table->dropColumn('is_business_info')->nullable();

            $table->dropColumn('is_trading_names')->nullable();
            $table->dropColumn('is_business_activity')->nullable();
            $table->dropColumn('is_trading_unit')->nullable();
            $table->dropColumn('is_subscription')->nullable();
            $table->dropColumn('is_direct_debit')->nullable();

            $table->dropColumn('is_bank')->nullable();
            $table->dropColumn('is_terms')->nullable();

            $table->dropColumn('bank_status')->nullable();
        });
    }
};

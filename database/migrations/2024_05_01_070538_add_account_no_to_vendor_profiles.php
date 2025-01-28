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
            $table->string('account_name')->nullable();
            $table->string('sort_code')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bank_proof')->nullable();
            $table->string('bank_proof_name')->nullable();
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
            $table->dropColumn('account_name')->nullable();
            $table->dropColumn('sort_code')->nullable();
            $table->dropColumn('account_number')->nullable();
            $table->dropColumn('bank_proof')->nullable();
            $table->dropColumn('bank_proof_name')->nullable();
        });
    }
};

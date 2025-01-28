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
        Schema::table('invoices', function (Blueprint $table) {
            //

            // $table->date('invoice_date')->nullable();
            // $table->string('contact_email')->nullable();
            // $table->string('address_line_1')->nullable();
            // $table->string('address_line_2')->nullable();
            // $table->string('address_line_3')->nullable();
            // $table->string('address_line_4')->nullable();
            // $table->string('city')->nullable();
            // $table->string('postal_code')->nullable();
            // $table->string('mobile_no')->nullable();
            // $table->string('name')->nullable();
            // $table->string('company')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
            //
        });
    }
};

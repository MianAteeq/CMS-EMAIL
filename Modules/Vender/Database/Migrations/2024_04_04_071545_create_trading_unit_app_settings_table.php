<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trading_unit_app_settings', function (Blueprint $table) {
            $table->id();
            $table->integer('trading_id')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('interval')->nullable();
            $table->string('business_name')->nullable();
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('address_line_3')->nullable();
            $table->string('address_line_4')->nullable();
            $table->string('city')->nullable();
            $table->string('postcode')->nullable();
            $table->string('landline')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('vat_no')->nullable();
            $table->string('footer_business_name')->nullable();
            $table->string('footer_office_address')->nullable();
            $table->string('company_number')->nullable();
            $table->integer('vat_register')->default(0);
            $table->integer('vat_booking')->default(0);
            $table->integer('vat_quote')->default(0);
            $table->integer('vat_job')->default(0);

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
        Schema::dropIfExists('trading_unit_app_settings');
    }
};

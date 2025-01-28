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
        Schema::create('booking_job_items', function (Blueprint $table) {
            $table->id();
            $table->integer('vender_id')->nullable();
            $table->integer('booking_id')->nullable();
            $table->integer('job_type_id')->nullable();
            $table->integer('price_type_id')->nullable();
            $table->longText('job_description')->nullable();
            $table->longText('product')->nullable();
            $table->float('unit_price')->nullable();
            $table->float('qty')->nullable();
            $table->float('discount')->nullable();
            $table->float('vat_rate')->nullable();
            $table->float('vat_price')->nullable();
            $table->float('total_price')->nullable();
            $table->float('sub_total_ex_vat')->nullable();
            $table->integer('is_job')->default(0);
            $table->integer('quote_id')->default(0);
            $table->float('orgUnitPrice')->nullable();
            $table->boolean('is_inclusive')->nullable()->default(false);
            $table->string('job_item_no')->nullable();

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
        Schema::dropIfExists('booking_job_items');
    }
};

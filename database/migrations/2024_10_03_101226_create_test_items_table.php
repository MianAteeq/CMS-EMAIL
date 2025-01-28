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
        Schema::create('test_items', function (Blueprint $table) {
            $table->id();
            $table->integer('vender_id')->nullable();
            $table->integer('quotation_id')->nullable();
            $table->integer('job_type_id')->nullable();
            $table->integer('price_type_id')->nullable();
            $table->longText('job_description')->nullable();
            $table->longText('product')->nullable();
            $table->float('unit_price')->nullable();
            $table->integer('qty')->nullable();
            $table->integer('is_job')->nullable();
            $table->integer('quote_id')->nullable();
            $table->float('discount')->nullable();
            $table->float('vat_rate')->nullable();
            $table->float('vat_price')->nullable();
            $table->float('total_price')->nullable();
            $table->float('sub_total_ex_vat')->nullable();
            $table->boolean('is_inclusive')->nullable()->default(false);
            $table->float('orgUnitPrice')->nullable();
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
        Schema::dropIfExists('test_items');
    }
};

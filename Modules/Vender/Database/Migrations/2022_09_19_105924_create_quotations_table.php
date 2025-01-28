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
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->string('quotation_no');
            $table->integer('contact_detail_id');
            $table->integer('vender_id');
            $table->integer('vehicle_id');
            $table->integer('service_id');
            $table->string('service_type')->default('On-Premises');
            $table->float('total')->default(0);
            $table->float('sub_total')->default(0);
            $table->float('vat')->default(0);
            $table->integer('is_hub')->default(0);
            $table->enum('status',['DRAFT','REQUEST_FOR_PRICE','BEING_PREPARED','PRICED','REQUEST_FOR_INFO', 'REQUEST_FOR_AMENDMENT','EXPIRED', 'DECLINE','CANCELLED','APPROVED'])->default('DRAFT');
            $table->date('quotation_date')->nullable();
            $table->string('price_type')->nullable();
            $table->string('quote_valid')->nullable();
            $table->string('post_code')->nullable();
            $table->longText('note')->nullable();
            $table->string('millage')->nullable();

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
        Schema::dropIfExists('quotations');
    }
};

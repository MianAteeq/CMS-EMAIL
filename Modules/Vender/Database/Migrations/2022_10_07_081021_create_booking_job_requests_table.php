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
        Schema::create('booking_job_requests', function (Blueprint $table) {
            $table->id();
            $table->longText('name')->nullable();
            $table->longText('product_id')->nullable();
            $table->longText('product')->nullable();
            $table->longText('job_request_id')->nullable();
            $table->integer('vender_id')->nullable();
            $table->integer('booking_id')->nullable();
            $table->integer('job_type_id')->nullable();
            $table->integer('price_type_id')->nullable();
            $table->longText('job_description')->nullable();
            $table->longText('image')->nullable();
            $table->longText('note')->nullable();
            $table->integer('is_job')->default(0);

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
        Schema::dropIfExists('booking_job_requests');
    }
};

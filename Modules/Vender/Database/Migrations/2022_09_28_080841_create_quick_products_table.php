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
        Schema::create('quick_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_no');
            $table->integer('vender_id');
            $table->string('product_name');
            $table->float('price');
            $table->enum('price_type',['FIXED','STARTING_FROM']);
            $table->longText('description')->nullable();;
            $table->longText('term_condition')->nullable();;
            $table->longText('image')->nullable();;
            $table->integer('job_type_id')->nullable();
            $table->integer('job_coverage_id')->nullable();

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
        Schema::dropIfExists('quick_products');
    }
};

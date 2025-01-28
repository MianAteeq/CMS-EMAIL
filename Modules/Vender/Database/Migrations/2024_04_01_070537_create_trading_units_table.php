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
        Schema::create('trading_units', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('vender_id')->nullable();
            $table->integer('trading_name_id')->nullable();
            $table->integer('site_id')->nullable();
            $table->string('operation_type')->nullable();
            $table->string('city')->nullable();
            $table->string('postcode')->nullable();
            $table->string('radius')->nullable();
            $table->string('landline')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('status')->default('PENDING');
            $table->string('active_status')->default('OFFLINE');

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
        Schema::dropIfExists('trading_units');
    }
};

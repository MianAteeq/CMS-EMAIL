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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->integer('vender_id');
            $table->integer('contact_id')->nullable();
            $table->string('vrm')->nullable();
            $table->string('vin_number')->nullable();
            $table->integer('vehicle_make_id')->nullable();
            $table->integer('vehicle_model_id')->nullable();
            $table->integer('engine_size_id')->nullable();
            $table->integer('transmission_type_id')->nullable();
            $table->integer('fuel_type_id')->nullable();
            $table->integer('color_id')->nullable();
            $table->string('year')->default('2023');

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
        Schema::dropIfExists('vehicles');
    }
};

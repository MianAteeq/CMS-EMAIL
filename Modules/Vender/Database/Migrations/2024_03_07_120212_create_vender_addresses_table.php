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
        Schema::create('vender_addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('vender_id')->nullable();
            $table->longText('address_line_1')->nullable();
            $table->longText('address_line_2')->nullable();
            $table->longText('address_line_3')->nullable();
            $table->longText('address_line_4')->nullable();
            $table->longText('city')->nullable();
            $table->longText('postcode')->nullable();
            $table->longText('type')->nullable();
            $table->longText('proof')->nullable();
            $table->longText('proof_name')->nullable();

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
        Schema::dropIfExists('vender_addresses');
    }
};

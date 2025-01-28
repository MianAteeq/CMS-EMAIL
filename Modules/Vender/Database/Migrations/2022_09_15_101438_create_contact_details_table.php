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
        Schema::create('contact_details', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('vender_id')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email')->nullable();
            $table->longText('address')->nullable();
            $table->longText('address_line3')->nullable();
            $table->longText('address_line2')->nullable();
            $table->longText('address_line4')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->longText('company')->nullable();
            $table->integer('hub_id')->nullable();

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
        Schema::dropIfExists('contact_details');
    }
};

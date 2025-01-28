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
        Schema::create('trading_names', function (Blueprint $table) {
            $table->id();
            $table->integer('vender_id')->nullable();
            $table->longText('name')->nullable();
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
        Schema::dropIfExists('trading_names');
    }
};

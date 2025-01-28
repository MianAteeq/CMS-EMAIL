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
        Schema::create('vender_invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('vender_id')->nullable();
            $table->integer('subscription_id')->nullable();
            $table->string('invoice_id')->nullable();
            $table->string('number')->nullable();
            $table->string('pdf')->nullable();
            $table->string('amount_due')->nullable();
            $table->string('amount_paid')->nullable();
            $table->string('status')->nullable();
            $table->string('plan')->nullable();
            $table->string('customer')->nullable();

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
        Schema::dropIfExists('vender_invoices');
    }
};

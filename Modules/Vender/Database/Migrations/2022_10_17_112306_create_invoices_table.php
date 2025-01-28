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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no')->nullable();
            $table->integer('booking_id')->nullable();
            $table->integer('vender_id')->nullable();
            $table->float('total')->default(0);
            $table->float('sub_total')->default(0);
            $table->float('vat')->default(0);
            $table->integer('contact_id')->default(0);
            $table->longText('payment_id')->nullable();
            $table->enum('status', ['DUE', 'PAID','REJECTED','CREDIT'])->default('DUE');
            $table->date('invoice_date')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('address_line_1')->nullable();
            $table->string('address_line_2')->nullable();
            $table->string('address_line_3')->nullable();
            $table->string('address_line_4')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('name')->nullable();
            $table->string('company')->nullable();

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
        Schema::dropIfExists('invoices');
    }
};

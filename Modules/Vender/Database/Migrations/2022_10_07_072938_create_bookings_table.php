<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Modules/Vender/Database/Migrations/2022_10_07_072938_create_bookings_table.php
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('booking_no');
            $table->string('quotation_id')->nullable();
            $table->integer('contact_detail_id');
            $table->integer('vender_id');
            $table->integer('vehicle_id');
            $table->integer('is_hub')->default(0);
            $table->integer('service_id');
            $table->string('service_type')->default('On-Premises');
            $table->float('total')->default(0);
            $table->float('sub_total')->default(0);
            $table->float('vat')->default(0);
            $table->enum('status', ['DRAFT', 'BOOKING_REQUEST', 'CUSTOMER_PENDING', 'BOOKED','CANCELLED', 'ARRIVED','MISSED','RE_SCHEDULE','DECLINE','DIAGNOSING','DIAGNOSING_COMPLETE','COMPLETED','PROGRESS','INPROGRESS', 'FINAL_CHECKS','READ_FOR_COLLECTION','READY_FOR_DELIVERY','COLLECTED','DELIVERED','VOID','DUE'])->default('DRAFT');
            $table->date('booking_date')->nullable();
            $table->string('booking_time')->nullable();
            $table->string('post_code')->nullable();
            $table->string('millage')->nullable();
            $table->string('note')->nullable();
            $table->longText('address_line_1')->nullable();
            $table->longText('address_line_2')->nullable();
            $table->longText('address_line_3')->nullable();
            $table->longText('address_line_4')->nullable();
            $table->longText('city')->nullable();
            $table->string('job_no')->nullable();
            $table->integer('job_id')->default(0);
            $table->integer('job_delete')->default(0);
        
            

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
        Schema::dropIfExists('bookings');
    }
};

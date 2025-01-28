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
        Schema::create('trading_unit_hub_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('trading_id')->nullable();
            $table->integer('is_marketplace')->default(0);
            $table->integer('is_quote')->default(0);
            $table->integer('is_booking')->default(0);

            $table->integer('is_monday')->default(0);
            $table->string('monday_start_time')->default('9:00 AM');
            $table->string('monday_end_time')->default('1:00 PM');

            $table->integer('is_tuesday')->default(0);
            $table->string('tuesday_start_time')->default('9:00 AM');
            $table->string('tuesday_end_time')->default('1:00 PM');

            $table->integer('is_wednesday')->default(0);
            $table->string('wednesday_start_time')->default('9:00 AM');
            $table->string('wednesday_end_time')->default('1:00 PM');

            $table->integer('is_thursday')->default(0);
            $table->string('thursday_start_time')->default('9:00 AM');
            $table->string('thursday_end_time')->default('1:00 PM');

            $table->integer('is_friday')->default(0);
            $table->string('friday_start_time')->default('9:00 AM');
            $table->string('friday_end_time')->default('1:00 PM');

            $table->integer('is_saturday')->default(0);
            $table->string('saturday_start_time')->default('9:00 AM');
            $table->string('saturday_end_time')->default('1:00 PM');

            $table->integer('is_sunday')->default(0);
            $table->string('sunday_start_time')->default('9:00 AM');
            $table->string('sunday_end_time')->default('1:00 PM');

            $table->string('website')->default('#');
            $table->string('facebook')->default('#');
            $table->string('instagram')->default('#');
            $table->string('trust_pilot')->default('#');

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
        Schema::dropIfExists('trading_unit_hub_profiles');
    }
};

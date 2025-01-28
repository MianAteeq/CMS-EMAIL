<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venders', function ($table) {
            $table->increments('id');
            $table->string('name', 255)->nullable();
            $table->string('last_name', 255)->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('email', 255)->nullable();
            $table->string('password', 64)->nullable();
            $table->integer('vender_id')->default(0);
            $table->string('status')->default('Active');
            $table->string('stripe_id')->nullable()->index();
            $table->string('pm_type')->nullable();
            $table->string('pm_last_four', 4)->nullable();
            $table->timestamp('trial_ends_at')->nullable();
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
        Schema::table('venders', function (Blueprint $table) {

            Schema::dropIfExists('venders');
          
        });
    }
};

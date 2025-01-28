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
        Schema::create('package_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->integer('vender_id')->nullable();
            $table->integer('is_active')->default(1);
            $table->string('payment_intent')->nullable();
            $table->string('payment_intent_client_secret')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->string('status')->default('PENDING');

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
        Schema::dropIfExists('package_subscriptions');
    }
};

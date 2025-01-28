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
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->Text('name')->nullable();
            $table->float('price')->nullable();
            $table->Text('time')->nullable();
            $table->Text('commission')->nullable();
            $table->Text('description')->nullable();
            $table->Text('random_key')->nullable();
            $table->Text('stripe_package_id')->nullable();
            $table->Text('stripe_price_id')->nullable();
            $table->integer('amount_required')->nullable();
            $table->integer('status')->default('0');
            $table->integer('is_repair_app')->default('0');
            $table->integer('is_hub')->default('0');
            $table->string('sub_title')->nullable();
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
        Schema::dropIfExists('packages');
    }
};

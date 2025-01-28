<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Admin\Entities\PaymentMethod;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_methods', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->timestamps();
        });

        $methods=[['name'=>'CASH'],['name' => 'CHEQUE'],['name' => 'DEBIT CARD'],['name' => 'CREDIT CARD'],
        ['name' => 'MOBILE PAYMENT'],['name' => 'BANK TRANSFER']];

        PaymentMethod::insert($methods);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment_methods');
    }
};

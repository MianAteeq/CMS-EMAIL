<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Hash;
use Modules\ClientHub\Entities\Client;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
           
            $table->string('name', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('password', 64)->nullable();
            $table->timestamps();
        });

        Client::create([
            "name" => "Hub Monster",
            "email" => "info@test.com",
            "password" => Hash::make("12345678"),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};

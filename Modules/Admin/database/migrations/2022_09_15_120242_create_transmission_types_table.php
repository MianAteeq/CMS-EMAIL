<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Admin\Entities\TransmissionType;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transmission_types', function (Blueprint $table) {
            $table->id();
            $table->string('transmission_types');

            $table->timestamps();
        });


        TransmissionType::create([
            "transmission_types" => 'Manual Transmissions'
        ]);
        TransmissionType::create([
            "transmission_types" => 'Automatic Transmissions'
        ]);
        TransmissionType::create([
            "transmission_types" => 'CVT Transmissions'
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transmission_types');
    }
};

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Admin\Entities\VehicleColor;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_colors', function (Blueprint $table) {
            $table->id();
            $table->string('color');
            $table->string('code');

            $table->timestamps();
        });
        

        VehicleColor::create([
            "color" => 'White',
            "code" => '#FFFFFF'
        ]);
        VehicleColor::create([
            "color" => 'Black',
            "code" => '#000000'
        ]);
        VehicleColor::create([
            "color" => 'Gray',
            "code" => '#808080'
        ]);
        VehicleColor::create([
            "color" => 'Silver',
            "code" => '#C0C0C0'
        ]);
        VehicleColor::create([
            "color" => 'Red',
            "code" => '#FF0000'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_colors');
    }
};

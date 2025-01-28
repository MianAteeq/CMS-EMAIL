<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Admin\Entities\FuelType;

class FuelTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FuelType::truncate();
        $arr = array(
            array(
                "FT_FUEL_TYPE" => "Petrol"), 
            array(
                "FT_FUEL_TYPE" => "Diesel"), 
            array(
                "FT_FUEL_TYPE" => "Hybrid"), 
            array(
                "FT_FUEL_TYPE" => "Petrol / Hybrid"), 
            array(
                "FT_FUEL_TYPE" => "Diesel / Hybrid"), 
            array(
                "FT_FUEL_TYPE" => "Electric"), 
            array(
                "FT_FUEL_TYPE" => "LPG"), 
            array(
                "FT_FUEL_TYPE" => "Biofuels"), 
            array(
                "FT_FUEL_TYPE" => "Other")
        );
        foreach ($arr as $key => $role) {

            $role = FuelType::create(['name' => $role['FT_FUEL_TYPE']]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Admin\Entities\TransmissionType;

class TransMissionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TransmissionType::truncate();
        $arr = array(
            array(
                "TT_TRANSMISSION_TYPE" => "Manual"), 
            array(
                "TT_TRANSMISSION_TYPE" => "Automatic"), 
            array(
                "TT_TRANSMISSION_TYPE" => "Automatic with Manual Controls"), 
            array(
                "TT_TRANSMISSION_TYPE" => "CVT (Continuously Variable Transmission)"), 
            array(
                "TT_TRANSMISSION_TYPE" => "Semi Automatic"), 
            array(
                "TT_TRANSMISSION_TYPE" => "TipTronic"), 
            array(
                "TT_TRANSMISSION_TYPE" => "DSG (Direct Shift Gearbox)"), 
            array(
                "TT_TRANSMISSION_TYPE" => "Other")
        );

        foreach ($arr as $key => $role) {

            $role = TransmissionType::create(['transmission_types' => $role['TT_TRANSMISSION_TYPE']]);
        }

    }
}

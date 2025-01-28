<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Admin\Entities\EngineSize;

class EngineSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EngineSize::truncate();
        $arr = array(
            array(
                "ES_ENGINE_SIZE" => "0.5 L"), 
            array(
                "ES_ENGINE_SIZE" => "0.6 L"), 
            array(
                "ES_ENGINE_SIZE" => "0.7 L"), 
            array(
                "ES_ENGINE_SIZE" => "0.8 L"), 
            array(
                "ES_ENGINE_SIZE" => "0.9 L"), 
            array(
                "ES_ENGINE_SIZE" => "1.0 L"), 
            array(
                "ES_ENGINE_SIZE" => "1.1 L"), 
            array(
                "ES_ENGINE_SIZE" => "1.2 L"), 
            array(
                "ES_ENGINE_SIZE" => "1.3 L"), 
            array(
                "ES_ENGINE_SIZE" => "1.4 L"), 
            array(
                "ES_ENGINE_SIZE" => "1.5 L"), 
            array(
                "ES_ENGINE_SIZE" => "1.6 L"), 
            array(
                "ES_ENGINE_SIZE" => "1.7 L"), 
            array(
                "ES_ENGINE_SIZE" => "1.8 L"), 
            array(
                "ES_ENGINE_SIZE" => "1.9 L"), 
            array(
                "ES_ENGINE_SIZE" => "2.0 L"), 
            array(
                "ES_ENGINE_SIZE" => "2.1 L"), 
            array(
                "ES_ENGINE_SIZE" => "2.2 L"), 
            array(
                "ES_ENGINE_SIZE" => "2.3 L"), 
            array(
                "ES_ENGINE_SIZE" => "2.4 L"), 
            array(
                "ES_ENGINE_SIZE" => "2.5 L"), 
            array(
                "ES_ENGINE_SIZE" => "2.6 L"), 
            array(
                "ES_ENGINE_SIZE" => "2.7 L"), 
            array(
                "ES_ENGINE_SIZE" => "2.8 L"), 
            array(
                "ES_ENGINE_SIZE" => "2.9 L"), 
            array(
                "ES_ENGINE_SIZE" => "3.0 L"), 
            array(
                "ES_ENGINE_SIZE" => "3.1 L"), 
            array(
                "ES_ENGINE_SIZE" => "3.2 L"), 
            array(
                "ES_ENGINE_SIZE" => "3.3 L"), 
            array(
                "ES_ENGINE_SIZE" => "3.4 L"), 
            array(
                "ES_ENGINE_SIZE" => "3.5 L"), 
            array(
                "ES_ENGINE_SIZE" => "3.6 L"), 
            array(
                "ES_ENGINE_SIZE" => "3.7 L"), 
            array(
                "ES_ENGINE_SIZE" => "3.8 L"), 
            array(
                "ES_ENGINE_SIZE" => "3.9 L"), 
            array(
                "ES_ENGINE_SIZE" => "4.0 L"), 
            array(
                "ES_ENGINE_SIZE" => "4.1 L"), 
            array(
                "ES_ENGINE_SIZE" => "4.2 L"), 
            array(
                "ES_ENGINE_SIZE" => "4.3 L"), 
            array(
                "ES_ENGINE_SIZE" => "4.4 L"), 
            array(
                "ES_ENGINE_SIZE" => "4.5 L"), 
            array(
                "ES_ENGINE_SIZE" => "4.6 L"), 
            array(
                "ES_ENGINE_SIZE" => "4.7 L"), 
            array(
                "ES_ENGINE_SIZE" => "4.8 L"), 
            array(
                "ES_ENGINE_SIZE" => "4.9 L"), 
            array(
                "ES_ENGINE_SIZE" => "5.0 L"), 
            array(
                "ES_ENGINE_SIZE" => "5.1 L"), 
            array(
                "ES_ENGINE_SIZE" => "5.2 L"), 
            array(
                "ES_ENGINE_SIZE" => "5.3 L"), 
            array(
                "ES_ENGINE_SIZE" => "5.4 L"), 
            array(
                "ES_ENGINE_SIZE" => "5.5 L"), 
            array(
                "ES_ENGINE_SIZE" => "5.6 L"), 
            array(
                "ES_ENGINE_SIZE" => "5.7 L"), 
            array(
                "ES_ENGINE_SIZE" => "5.8 L"), 
            array(
                "ES_ENGINE_SIZE" => "5.9 L"), 
            array(
                "ES_ENGINE_SIZE" => "6.0 L"), 
            array(
                "ES_ENGINE_SIZE" => "6.0 L +"), 
            array(
                "ES_ENGINE_SIZE" => "Other")
        );

        foreach ($arr as $key => $role) {

            $role = EngineSize::create(['eng_size' => $role['ES_ENGINE_SIZE']]);
        }
    }
}

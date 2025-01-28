<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Admin\Entities\CarMaker;

class MakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarMaker::truncate();
        $arr = array(
            array(
                "MKE_MAKE" => "Abarth"), 
            array(
                "MKE_MAKE" => "AC"), 
            array(
                "MKE_MAKE" => "Acura"), 
            array(
                "MKE_MAKE" => "Alfa Romeo"), 
            array(
                "MKE_MAKE" => "Allard"), 
            array(
                "MKE_MAKE" => "Alpina"), 
            array(
                "MKE_MAKE" => "Alpine"), 
            array(
                "MKE_MAKE" => "Alvis"), 
            array(
                "MKE_MAKE" => "AMC"), 
            array(
                "MKE_MAKE" => "Ariel"), 
            array(
                "MKE_MAKE" => "Armstrong Siddeley"), 
            array(
                "MKE_MAKE" => "Ascari"), 
            array(
                "MKE_MAKE" => "Aston Martin"), 
            array(
                "MKE_MAKE" => "Audi"), 
            array(
                "MKE_MAKE" => "Austin"), 
            array(
                "MKE_MAKE" => "Austin-Healey"), 
            array(
                "MKE_MAKE" => "Autobianchi"), 
            array(
                "MKE_MAKE" => "Auverland"), 
            array(
                "MKE_MAKE" => "Avanti"), 
            array(
                "MKE_MAKE" => "Beijing"), 
            array(
                "MKE_MAKE" => "Bentley"), 
            array(
                "MKE_MAKE" => "Berkeley"), 
            array(
                "MKE_MAKE" => "Bitter"), 
            array(
                "MKE_MAKE" => "Bizzarrini"), 
            array(
                "MKE_MAKE" => "BMW"), 
            array(
                "MKE_MAKE" => "Brilliance"), 
            array(
                "MKE_MAKE" => "Bristol"), 
            array(
                "MKE_MAKE" => "Bugatti"), 
            array(
                "MKE_MAKE" => "Buick"), 
            array(
                "MKE_MAKE" => "Cadillac"), 
            array(
                "MKE_MAKE" => "Caterham"), 
            array(
                "MKE_MAKE" => "Checker"), 
            array(
                "MKE_MAKE" => "Chevrolet"), 
            array(
                "MKE_MAKE" => "Chrysler"), 
            array(
                "MKE_MAKE" => "Citroen"), 
            array(
                "MKE_MAKE" => "Dacia"), 
            array(
                "MKE_MAKE" => "Daewoo"), 
            array(
                "MKE_MAKE" => "DAF"), 
            array(
                "MKE_MAKE" => "Daihatsu"), 
            array(
                "MKE_MAKE" => "Daimler"), 
            array(
                "MKE_MAKE" => "Datsun"), 
            array(
                "MKE_MAKE" => "De Tomaso"), 
            array(
                "MKE_MAKE" => "DKW"), 
            array(
                "MKE_MAKE" => "Dodge"), 
            array(
                "MKE_MAKE" => "Donkervoort"), 
            array(
                "MKE_MAKE" => "Eagle"), 
            array(
                "MKE_MAKE" => "Fairthorpe"), 
            array(
                "MKE_MAKE" => "Ferrari"), 
            array(
                "MKE_MAKE" => "Fiat"), 
            array(
                "MKE_MAKE" => "Fisker"), 
            array(
                "MKE_MAKE" => "Ford"), 
            array(
                "MKE_MAKE" => "GAZ"), 
            array(
                "MKE_MAKE" => "Geely"), 
            array(
                "MKE_MAKE" => "Ginetta"), 
            array(
                "MKE_MAKE" => "GMC"), 
            array(
                "MKE_MAKE" => "Holden"), 
            array(
                "MKE_MAKE" => "Honda"), 
            array(
                "MKE_MAKE" => "Hudson"), 
            array(
                "MKE_MAKE" => "Humber"), 
            array(
                "MKE_MAKE" => "Hummer"), 
            array(
                "MKE_MAKE" => "Hyundai"), 
            array(
                "MKE_MAKE" => "Infiniti"), 
            array(
                "MKE_MAKE" => "Innocenti"), 
            array(
                "MKE_MAKE" => "Isuzu"), 
            array(
                "MKE_MAKE" => "Italdesign"), 
            array(
                "MKE_MAKE" => "Jaguar"), 
            array(
                "MKE_MAKE" => "Jeep"), 
            array(
                "MKE_MAKE" => "Jensen"), 
            array(
                "MKE_MAKE" => "Kia"), 
            array(
                "MKE_MAKE" => "Koenigsegg"), 
            array(
                "MKE_MAKE" => "Lada"), 
            array(
                "MKE_MAKE" => "Lamborghini"), 
            array(
                "MKE_MAKE" => "Lancia"), 
            array(
                "MKE_MAKE" => "Land Rover"), 
            array(
                "MKE_MAKE" => "Lexus"), 
            array(
                "MKE_MAKE" => "Lincoln"), 
            array(
                "MKE_MAKE" => "London Taxi INT"), 
            array(
                "MKE_MAKE" => "Lotec"), 
            array(
                "MKE_MAKE" => "Lotus"), 
            array(
                "MKE_MAKE" => "Luxgen"), 
            array(
                "MKE_MAKE" => "Mahindra"), 
            array(
                "MKE_MAKE" => "Marcos"), 
            array(
                "MKE_MAKE" => "Maserati"), 
            array(
                "MKE_MAKE" => "Matra-Simca"), 
            array(
                "MKE_MAKE" => "Maybach"), 
            array(
                "MKE_MAKE" => "Mazda"), 
            array(
                "MKE_MAKE" => "MCC"), 
            array(
                "MKE_MAKE" => "McLaren"), 
            array(
                "MKE_MAKE" => "Mercedes-Benz"), 
            array(
                "MKE_MAKE" => "Mercury"), 
            array(
                "MKE_MAKE" => "MG"), 
            array(
                "MKE_MAKE" => "Mini"), 
            array(
                "MKE_MAKE" => "Mitsubishi"), 
            array(
                "MKE_MAKE" => "Monteverdi"), 
            array(
                "MKE_MAKE" => "Moretti"), 
            array(
                "MKE_MAKE" => "Morgan"), 
            array(
                "MKE_MAKE" => "Morris"), 
            array(
                "MKE_MAKE" => "Nissan"), 
            array(
                "MKE_MAKE" => "Noble"), 
            array(
                "MKE_MAKE" => "NSU"), 
            array(
                "MKE_MAKE" => "Oldsmobile"), 
            array(
                "MKE_MAKE" => "Opel"), 
            array(
                "MKE_MAKE" => "Packard"), 
            array(
                "MKE_MAKE" => "Pagani"), 
            array(
                "MKE_MAKE" => "Panoz"), 
            array(
                "MKE_MAKE" => "Peugeot"), 
            array(
                "MKE_MAKE" => "Pininfarina"), 
            array(
                "MKE_MAKE" => "Plymouth"), 
            array(
                "MKE_MAKE" => "Pontiac"), 
            array(
                "MKE_MAKE" => "Porsche"), 
            array(
                "MKE_MAKE" => "Proton"), 
            array(
                "MKE_MAKE" => "Reliant"), 
            array(
                "MKE_MAKE" => "Renault"), 
            array(
                "MKE_MAKE" => "Riley"), 
            array(
                "MKE_MAKE" => "Rolls-Royce"), 
            array(
                "MKE_MAKE" => "Rover"), 
            array(
                "MKE_MAKE" => "Saab"), 
            array(
                "MKE_MAKE" => "Saleen"), 
            array(
                "MKE_MAKE" => "Samsung"), 
            array(
                "MKE_MAKE" => "Saturn"), 
            array(
                "MKE_MAKE" => "Scion"), 
            array(
                "MKE_MAKE" => "Seat"), 
            array(
                "MKE_MAKE" => "Simca"), 
            array(
                "MKE_MAKE" => "Singer"), 
            array(
                "MKE_MAKE" => "Skoda"), 
            array(
                "MKE_MAKE" => "Smart"), 
            array(
                "MKE_MAKE" => "Spyker"), 
            array(
                "MKE_MAKE" => "SsangYong"), 
            array(
                "MKE_MAKE" => "SSC"), 
            array(
                "MKE_MAKE" => "Steyr"), 
            array(
                "MKE_MAKE" => "Studebaker"), 
            array(
                "MKE_MAKE" => "Subaru"), 
            array(
                "MKE_MAKE" => "Sunbeam"), 
            array(
                "MKE_MAKE" => "Suzuki"), 
            array(
                "MKE_MAKE" => "Talbot"), 
            array(
                "MKE_MAKE" => "Tata"), 
            array(
                "MKE_MAKE" => "Tatra"), 
            array(
                "MKE_MAKE" => "Tesla"), 
            array(
                "MKE_MAKE" => "Toyota"), 
            array(
                "MKE_MAKE" => "Trabant"), 
            array(
                "MKE_MAKE" => "Triumph"), 
            array(
                "MKE_MAKE" => "TVR"), 
            array(
                "MKE_MAKE" => "Vauxhall"), 
            array(
                "MKE_MAKE" => "Vector"), 
            array(
                "MKE_MAKE" => "Venturi"), 
            array(
                "MKE_MAKE" => "Volkswagen"), 
            array(
                "MKE_MAKE" => "Volvo"), 
            array(
                "MKE_MAKE" => "Wartburg"), 
            array(
                "MKE_MAKE" => "Westfield"), 
            array(
                "MKE_MAKE" => "Willys-Overland"), 
            array(
                "MKE_MAKE" => "Xedos"), 
            array(
                "MKE_MAKE" => "Zagato"), 
            array(
                "MKE_MAKE" => "Zastava"), 
            array(
                "MKE_MAKE" => "ZAZ"), 
            array(
                "MKE_MAKE" => "Zenvo"), 
            array(
                "MKE_MAKE" => "ZIL"), 
            array(
                "MKE_MAKE" => "LEVC")
        );
        foreach ($arr as $key => $role) {

            $role = CarMaker::create(['name' => $role['MKE_MAKE']]);
        }
    }
}

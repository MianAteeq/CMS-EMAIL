<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Admin\Entities\CarModel;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarModel::truncate();
        $arr = array(
            array(
                "MOD_MODEL" => 1000, 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "1000 Bialbero", 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "1000 GT", 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "1000 TC Corsa", 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "103 GT", 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => 124, 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => 1300, 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => 1500, 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => 1600, 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => 2000, 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => 205, 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => 207, 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => 208, 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => 209, 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => 210, 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => 2200, 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => 2400, 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => 500, 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => 595, 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => 600, 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => 700, 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => 750, 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "800 Scorpione Coupe Allemano", 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => 850, 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "A 112", 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "Bialbero", 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "Coupe", 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "Grande Punto", 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "Lancia 037", 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "Mono 1000", 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "Monomille", 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "Monotipo", 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "OT", 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "Renault", 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "Simca", 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "Spider Riviera", 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "Stola", 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 1), 
            array(
                "MOD_MODEL" => "2-Litre", 
                "MOD_MKE_ID" => 2), 
            array(
                "MOD_MODEL" => 427, 
                "MOD_MKE_ID" => 2), 
            array(
                "MOD_MODEL" => 428, 
                "MOD_MKE_ID" => 2), 
            array(
                "MOD_MODEL" => "Ace", 
                "MOD_MKE_ID" => 2), 
            array(
                "MOD_MODEL" => "Aceca", 
                "MOD_MKE_ID" => 2), 
            array(
                "MOD_MODEL" => "Aceca-Bristol", 
                "MOD_MKE_ID" => 2), 
            array(
                "MOD_MODEL" => "Cobra", 
                "MOD_MKE_ID" => 2), 
            array(
                "MOD_MODEL" => "Greyhound", 
                "MOD_MKE_ID" => 2), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 2), 
            array(
                "MOD_MODEL" => "CL", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "CL-X", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "CSX", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "EL", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "ILX", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "ILX Hybrid", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "Integra", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "Legend", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "MDX", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "NSX", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "RDX", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "RL", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "RLX", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "RSX", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "SLX", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "TL", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "TLX", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "TSX", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "Vigor", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "ZDX", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 3), 
            array(
                "MOD_MODEL" => 145, 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => 146, 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => 147, 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => 155, 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => 156, 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => 159, 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => 164, 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => 166, 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => 175, 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => 1750, 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => 179, 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => 1900, 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => 2000, 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => 2600, 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => 33, 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "33 Race", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "33 Stradale", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "33 Tt", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "6C", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => 75, 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "8C Competizione", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => 90, 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Alfa 6", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Alfasud", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Alfetta", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "AR 51", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Arna", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Bella", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Berlina", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Brera", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Caimano", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Carabo", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Centauri", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Coupe", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Crosswagon", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Cuneo", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Dardo", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Disco Volante", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Eagle", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Giulia", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Giulietta", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "GP 158", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "GP 159", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Graduate", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "GT", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "GTA", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "GTV", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "GTV6", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Junior", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Kamal", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "MiTo", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Navajo", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Nuvola", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Proteo", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "RZ", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Scarabeo", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Scighera", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Spider", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Sportiva", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Sportut", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Sportwagon", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Sprint", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "SZ", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 4), 
            array(
                "MOD_MODEL" => "GT", 
                "MOD_MKE_ID" => 5), 
            array(
                "MOD_MODEL" => "J", 
                "MOD_MKE_ID" => 5), 
            array(
                "MOD_MODEL" => "J1", 
                "MOD_MKE_ID" => 5), 
            array(
                "MOD_MODEL" => "J2", 
                "MOD_MKE_ID" => 5), 
            array(
                "MOD_MODEL" => "J2R", 
                "MOD_MKE_ID" => 5), 
            array(
                "MOD_MODEL" => "J2X", 
                "MOD_MKE_ID" => 5), 
            array(
                "MOD_MODEL" => "K1", 
                "MOD_MKE_ID" => 5), 
            array(
                "MOD_MODEL" => "K2", 
                "MOD_MKE_ID" => 5), 
            array(
                "MOD_MODEL" => "K3", 
                "MOD_MKE_ID" => 5), 
            array(
                "MOD_MODEL" => "M1", 
                "MOD_MKE_ID" => 5), 
            array(
                "MOD_MODEL" => "P1", 
                "MOD_MKE_ID" => 5), 
            array(
                "MOD_MODEL" => "Palm Beach", 
                "MOD_MKE_ID" => 5), 
            array(
                "MOD_MODEL" => "Safari", 
                "MOD_MKE_ID" => 5), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 5), 
            array(
                "MOD_MODEL" => 2002, 
                "MOD_MKE_ID" => 6), 
            array(
                "MOD_MODEL" => 3, 
                "MOD_MKE_ID" => 6), 
            array(
                "MOD_MODEL" => "B", 
                "MOD_MKE_ID" => 6), 
            array(
                "MOD_MODEL" => "B 10", 
                "MOD_MKE_ID" => 6), 
            array(
                "MOD_MODEL" => "B 12", 
                "MOD_MKE_ID" => 6), 
            array(
                "MOD_MODEL" => "B3", 
                "MOD_MKE_ID" => 6), 
            array(
                "MOD_MODEL" => "B5", 
                "MOD_MKE_ID" => 6), 
            array(
                "MOD_MODEL" => "B6", 
                "MOD_MKE_ID" => 6), 
            array(
                "MOD_MODEL" => "B7", 
                "MOD_MKE_ID" => 6), 
            array(
                "MOD_MODEL" => "D3", 
                "MOD_MKE_ID" => 6), 
            array(
                "MOD_MODEL" => "Roadster", 
                "MOD_MKE_ID" => 6), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 6), 
            array(
                "MOD_MODEL" => "A", 
                "MOD_MKE_ID" => 7), 
            array(
                "MOD_MODEL" => "A 106", 
                "MOD_MKE_ID" => 7), 
            array(
                "MOD_MODEL" => "A 108", 
                "MOD_MKE_ID" => 7), 
            array(
                "MOD_MODEL" => "A 110", 
                "MOD_MKE_ID" => 7), 
            array(
                "MOD_MODEL" => "A 310", 
                "MOD_MKE_ID" => 7), 
            array(
                "MOD_MODEL" => "A 442", 
                "MOD_MKE_ID" => 7), 
            array(
                "MOD_MODEL" => "A 610", 
                "MOD_MKE_ID" => 7), 
            array(
                "MOD_MODEL" => "V6", 
                "MOD_MKE_ID" => 7), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 7), 
            array(
                "MOD_MODEL" => "TA 14", 
                "MOD_MKE_ID" => 8), 
            array(
                "MOD_MODEL" => "TA 21", 
                "MOD_MKE_ID" => 8), 
            array(
                "MOD_MODEL" => "TB 14", 
                "MOD_MKE_ID" => 8), 
            array(
                "MOD_MODEL" => "TB 21", 
                "MOD_MKE_ID" => 8), 
            array(
                "MOD_MODEL" => "TC", 
                "MOD_MKE_ID" => 8), 
            array(
                "MOD_MODEL" => "TC 108 G", 
                "MOD_MKE_ID" => 8), 
            array(
                "MOD_MODEL" => "TC 21", 
                "MOD_MKE_ID" => 8), 
            array(
                "MOD_MODEL" => "TD", 
                "MOD_MKE_ID" => 8), 
            array(
                "MOD_MODEL" => "TF", 
                "MOD_MKE_ID" => 8), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 8), 
            array(
                "MOD_MODEL" => "Ambassador", 
                "MOD_MKE_ID" => 9), 
            array(
                "MOD_MODEL" => "AMX", 
                "MOD_MKE_ID" => 9), 
            array(
                "MOD_MODEL" => "AMX III", 
                "MOD_MKE_ID" => 9), 
            array(
                "MOD_MODEL" => "Gremlin", 
                "MOD_MKE_ID" => 9), 
            array(
                "MOD_MODEL" => "Hornet", 
                "MOD_MKE_ID" => 9), 
            array(
                "MOD_MODEL" => "Javelin", 
                "MOD_MKE_ID" => 9), 
            array(
                "MOD_MODEL" => "Matador", 
                "MOD_MKE_ID" => 9), 
            array(
                "MOD_MODEL" => "Pacer", 
                "MOD_MKE_ID" => 9), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 9), 
            array(
                "MOD_MODEL" => "Atom", 
                "MOD_MKE_ID" => 10), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 10), 
            array(
                "MOD_MODEL" => 16, 
                "MOD_MKE_ID" => 11), 
            array(
                "MOD_MODEL" => "Sapphire", 
                "MOD_MKE_ID" => 11), 
            array(
                "MOD_MODEL" => "Star Sapphire", 
                "MOD_MKE_ID" => 11), 
            array(
                "MOD_MODEL" => "Whitley", 
                "MOD_MKE_ID" => 11), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 11), 
            array(
                "MOD_MODEL" => "A10", 
                "MOD_MKE_ID" => 12), 
            array(
                "MOD_MODEL" => "Ecosse", 
                "MOD_MKE_ID" => 12), 
            array(
                "MOD_MODEL" => "FG-T", 
                "MOD_MKE_ID" => 12), 
            array(
                "MOD_MODEL" => "KZ1", 
                "MOD_MKE_ID" => 12), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 12), 
            array(
                "MOD_MODEL" => 15, 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "2-Litre", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "AM Vantage", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "Atom", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "Cygnet", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "DB2", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "DB3", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "DB4", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "DB5", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "DB6", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "DB7", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "DB9", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "DBR2", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "DBS", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "Lagonda", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "One-77", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "Project Vantage", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "Rapide", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "V12", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "V12 Vantage", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "V8", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "V8 Saloon", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "V8 Vantage", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "V8 Volante", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "V8 Zagato", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "Vanquish", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "Vantage", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "Virage", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 13), 
            array(
                "MOD_MODEL" => 100, 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => 200, 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => 4000, 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => 50, 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => 5000, 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => 80, 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => 90, 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "A1", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "A2", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "A3", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "A3 e-tron", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "A4", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "A5", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "A6", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "A7", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "A8", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "AD", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "AL2", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Allroad", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Asso", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Avantissimo", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Avus", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Coupe", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Fox", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "LeMans", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Nuvolari Quattro", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Pikes Peak Quattro", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Q1", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Q3", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Q5", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Q7", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Q7 e-tron", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Quattro", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "R8", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "R8R", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Rosemeyer", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "RS 5", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "RS 7", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "RS2", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "RS3", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "RS4", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "RS5", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "RS6", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "S2", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "S3", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "S4", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "S5", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "S6", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "S7", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "S8", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Sport", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "SQ5", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Steppenwolf", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Super 90", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "TT", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "TTS", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "UR", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "V8", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Variant", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 14), 
            array(
                "MOD_MODEL" => "10 HP", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => 1300, 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => 16, 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => 1800, 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => 2200, 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => 3, 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "3-Litre", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => 7, 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => 8, 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "A", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "A 110", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "A 125", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "A 135", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "A 30", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "A 35", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "A 40", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "A 55", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "A 60", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "A 70", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "A 90", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "A 95", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "A 99", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "A135", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "Allegro", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "Ambassador", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "Maestro", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "Marina", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "Maxi", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "Mini Clubman", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "Mini Cooper", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "Mini Metro", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "Mini Sky", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "Montego", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "Princess", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 15), 
            array(
                "MOD_MODEL" => 100, 
                "MOD_MKE_ID" => 16), 
            array(
                "MOD_MODEL" => 3000, 
                "MOD_MKE_ID" => 16), 
            array(
                "MOD_MODEL" => "3000 Mk II", 
                "MOD_MKE_ID" => 16), 
            array(
                "MOD_MODEL" => "3000 Mk III", 
                "MOD_MKE_ID" => 16), 
            array(
                "MOD_MODEL" => "Sports Convertible", 
                "MOD_MKE_ID" => 16), 
            array(
                "MOD_MODEL" => "Sprite", 
                "MOD_MKE_ID" => 16), 
            array(
                "MOD_MODEL" => "Tickford", 
                "MOD_MKE_ID" => 16), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 16), 
            array(
                "MOD_MODEL" => "A 112", 
                "MOD_MKE_ID" => 17), 
            array(
                "MOD_MODEL" => "Bianchina", 
                "MOD_MKE_ID" => 17), 
            array(
                "MOD_MODEL" => "Primula", 
                "MOD_MKE_ID" => 17), 
            array(
                "MOD_MODEL" => "Stellina", 
                "MOD_MKE_ID" => 17), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 17), 
            array(
                "MOD_MODEL" => "A3", 
                "MOD_MKE_ID" => 18), 
            array(
                "MOD_MODEL" => "A4", 
                "MOD_MKE_ID" => 18), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 18), 
            array(
                "MOD_MODEL" => "Avanti", 
                "MOD_MKE_ID" => 19), 
            array(
                "MOD_MODEL" => "Sport Convertible", 
                "MOD_MKE_ID" => 19), 
            array(
                "MOD_MODEL" => "Studebaker", 
                "MOD_MKE_ID" => 19), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 19), 
            array(
                "MOD_MODEL" => "BJ 2020", 
                "MOD_MKE_ID" => 20), 
            array(
                "MOD_MODEL" => "BJ 2021", 
                "MOD_MKE_ID" => 20), 
            array(
                "MOD_MODEL" => "BJ 212", 
                "MOD_MKE_ID" => 20), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 20), 
            array(
                "MOD_MODEL" => "Arnage", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "Azure", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "Brooklands", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "Continental", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "Continental Flying Spur", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "Continental GT", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "Continental GTC", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "Continental Supersports", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "Continental T", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "Exp Speed 8", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "Flying Spur", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "Hunaudieres", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "Java", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "Mark VI", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "MK V", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "Mulsane", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "Mulsanne", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "R Type Continental", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "S1", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "S2", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "State Limousine", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "T", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "T2", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "Turbo", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 21), 
            array(
                "MOD_MODEL" => "B", 
                "MOD_MKE_ID" => 22), 
            array(
                "MOD_MODEL" => "B 95", 
                "MOD_MKE_ID" => 22), 
            array(
                "MOD_MODEL" => "Foursome", 
                "MOD_MKE_ID" => 22), 
            array(
                "MOD_MODEL" => "QB", 
                "MOD_MKE_ID" => 22), 
            array(
                "MOD_MODEL" => "Sports", 
                "MOD_MKE_ID" => 22), 
            array(
                "MOD_MODEL" => "Twosome", 
                "MOD_MKE_ID" => 22), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 22), 
            array(
                "MOD_MODEL" => "CD", 
                "MOD_MKE_ID" => 23), 
            array(
                "MOD_MODEL" => "Diplomat", 
                "MOD_MKE_ID" => 23), 
            array(
                "MOD_MODEL" => "SC", 
                "MOD_MKE_ID" => 23), 
            array(
                "MOD_MODEL" => "Type III", 
                "MOD_MKE_ID" => 23), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 23), 
            array(
                "MOD_MODEL" => "A3C", 
                "MOD_MKE_ID" => 24), 
            array(
                "MOD_MODEL" => "BZ-2001", 
                "MOD_MKE_ID" => 24), 
            array(
                "MOD_MODEL" => "GT", 
                "MOD_MKE_ID" => 24), 
            array(
                "MOD_MODEL" => "GTS", 
                "MOD_MKE_ID" => 24), 
            array(
                "MOD_MODEL" => "Manta", 
                "MOD_MKE_ID" => 24), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 24), 
            array(
                "MOD_MODEL" => "1 Series", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 116, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 118, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 120, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 123, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 125, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 128, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 130, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 135, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 1500, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 1502, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 1600, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 1602, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 1800, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "2 Series", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "2 Series Active Tourer", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 2.8, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 2000, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 2002, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 2004, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 2800, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 3, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "3 Series", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "3 Series Gran Turismo", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 3.3, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 315, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 316, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 317, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 318, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 320, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "3200 CS", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 323, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 324, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 325, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 328, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 330, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 332, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 333, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 335, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 340, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "4 Series", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "4 Series Gran Coupe", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "5 Series", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "5 Series Gran Turismo", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 5.8, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 501, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 502, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 503, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 507, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 518, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 520, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 523, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 524, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 525, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 528, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 529, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 530, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 535, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 538, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 540, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 545, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 550, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "6 series", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "6 Series Gran Coupe", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 600, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 628, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 630, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 633, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 635, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 640, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 645, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 650, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "7 Series", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 700, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 725, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 728, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 729, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 730, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 732, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 735, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 740, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 745, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 748, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 750, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 760, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 840, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 845, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 850, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 854, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => 856, 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "ActiveHybrid 3", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "ActiveHybrid 5", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "ActiveHybrid 7", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Alpina", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "ALPINA B6 Gran Coupe", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "ALPINA B7", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "B7", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Breyton", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "CLS", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Compact", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Convertible", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Coupe", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Dinan", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Formula FB02", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Formula One", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "FW 27", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Isetta", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Just 4", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Karmann Asso di Quadri", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "L7", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "LMR", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "M", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "M1", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "M12", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "M28i", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "M3", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "M4", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "M5", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "M6", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "M6 Gran Coupe", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Mini ACV 30", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "MM Roadster", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Pickster", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "S3", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Touring", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Turbo", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "V12", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Veritas Rennsportwagen", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "X Activity", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "X Coupe", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "X1", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "X3", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "X4", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "X5", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "X5 M", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "X6", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "X6 M", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "X7", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Z1", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Z18", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Z22", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Z3", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Z4", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Z8", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Z9", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Z9 Gran Turismo Convertible", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "BS4", 
                "MOD_MKE_ID" => 26), 
            array(
                "MOD_MODEL" => "BS6", 
                "MOD_MKE_ID" => 26), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 26), 
            array(
                "MOD_MODEL" => 400, 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => 401, 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => 402, 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => 403, 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => 404, 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => 405, 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => 406, 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => 407, 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => 408, 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => 409, 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => 410, 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => 411, 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => 412, 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => 450, 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => 603, 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => "Beaufighter", 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => "Blenheim", 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => "Brigand", 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => "Britannia", 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => "Fighter", 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => "Project Fighter", 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 27), 
            array(
                "MOD_MODEL" => 251, 
                "MOD_MKE_ID" => 28), 
            array(
                "MOD_MODEL" => "Chiron", 
                "MOD_MKE_ID" => 28), 
            array(
                "MOD_MODEL" => "EB 110", 
                "MOD_MKE_ID" => 28), 
            array(
                "MOD_MODEL" => "EB 112", 
                "MOD_MKE_ID" => 28), 
            array(
                "MOD_MODEL" => "EB 118", 
                "MOD_MKE_ID" => 28), 
            array(
                "MOD_MODEL" => "EB 18-3 Chiron", 
                "MOD_MKE_ID" => 28), 
            array(
                "MOD_MODEL" => "EB 18-4 Veyron", 
                "MOD_MKE_ID" => 28), 
            array(
                "MOD_MODEL" => "EB 218", 
                "MOD_MKE_ID" => 28), 
            array(
                "MOD_MODEL" => "ID 90", 
                "MOD_MKE_ID" => 28), 
            array(
                "MOD_MODEL" => "Type 101", 
                "MOD_MKE_ID" => 28), 
            array(
                "MOD_MODEL" => "Type 68", 
                "MOD_MKE_ID" => 28), 
            array(
                "MOD_MODEL" => "Type 73", 
                "MOD_MKE_ID" => 28), 
            array(
                "MOD_MODEL" => "Veyron", 
                "MOD_MKE_ID" => 28), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 28), 
            array(
                "MOD_MODEL" => 40, 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => 70, 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Blackhawk", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Centieme", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Centurion", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Century", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Cielo", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Electra", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Enclave", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Encore", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Envision", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Estate", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "GS", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Invicta", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "LaCrosse", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "LeSabre", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Lucerne", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Park Avenue", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Rainier", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Reatta", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Regal", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Rendezvous", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Riviera", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Roadmaster", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Signia", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Skyhawk", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Skylark", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Terraza", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Verano", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Wildcat", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "XP2000", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 29), 
            array(
                "MOD_MODEL" => 60, 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => 61, 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => 62, 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "6239D", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "Allante", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "ATS", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "ATS Coupe", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "ATS-V", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "Aurora", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "Biarritz", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "BLS", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "Brougham", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "Calais", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "Catera", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "Cimarron", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "CT6", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "CTS", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "CTS Coupe", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "CTS Wagon", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "CTS-V", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "CTS-V Coupe", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "CTS-V Wagon", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "DeVille", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "DTS", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "Eldorado", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "ELR", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "Escalade", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "Escalade ESV", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "Fleetwood", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "Imaj", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "Le Mans", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "LMP", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "Park Avenue", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "Seville", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "Sixty", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "Solitaire", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "SRX", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "STS", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "STS-V", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "V Sixteen", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "Vizon", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "XLR", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "XTS", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 30), 
            array(
                "MOD_MODEL" => 1700, 
                "MOD_MKE_ID" => 31), 
            array(
                "MOD_MODEL" => 21, 
                "MOD_MKE_ID" => 31), 
            array(
                "MOD_MODEL" => 7, 
                "MOD_MKE_ID" => 31), 
            array(
                "MOD_MODEL" => "Beaulieu", 
                "MOD_MKE_ID" => 31), 
            array(
                "MOD_MODEL" => "C21", 
                "MOD_MKE_ID" => 31), 
            array(
                "MOD_MODEL" => "Seven", 
                "MOD_MKE_ID" => 31), 
            array(
                "MOD_MODEL" => "Super 7", 
                "MOD_MKE_ID" => 31), 
            array(
                "MOD_MODEL" => "Superlight R", 
                "MOD_MKE_ID" => 31), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 31), 
            array(
                "MOD_MODEL" => "Aerobus", 
                "MOD_MKE_ID" => 32), 
            array(
                "MOD_MODEL" => "Town", 
                "MOD_MKE_ID" => 32), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 32), 
            array(
                "MOD_MODEL" => 2103, 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Adventure", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Aerovette", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Alero", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "APV", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Astro", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Astrovette", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Avalanche", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Aveo", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Bel Air", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Beretta", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Biscayne", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Blazer", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "C-10", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Camaro", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Caprice", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Captiva", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Cavalier", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Celebrity", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Celta", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Chevelle", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Chevette", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Cheyenne", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Citation", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Citation II", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "City Express", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Cobalt", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Colorado", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Comodoro", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Corsica", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Corvair", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Corvette", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Corvette Stingray", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Cruze", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "DeLuxe", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "DeVille", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "El Camino", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Epica", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Equinox", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Evanda", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Express", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Express Cargo", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Grand Blazer", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Half-Ton", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "HHR", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Impala", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Intimidator", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Journey", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "K-20", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Kalos", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Kodiak", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Lacetti", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Lumina", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Malibu", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Matiz", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Metro", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Monte Carlo", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Monza", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Nomad", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Nova", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Nubira", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Optra", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Orlando", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Pickup", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Prizm", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Relsamo", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Rezzo", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "S-10", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Sabia", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Silverado", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Silverado 1500", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Silverado 2500HD", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Silverado 3500HD", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Sonic", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Spark", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Spark EV", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Sprint", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "SS", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "SSR", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Suburban", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Tahoe", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Tandem 2000", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Tracker", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Trailblazer", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Trans Sport", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Traverse", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Trax", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Triax", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Uplander", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Vega", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Venture", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Vivant", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Volt", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "XP 882", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "XP 897 GT", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "XP 898", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 33), 
            array(
                "MOD_MODEL" => 100, 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => 160, 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => 1609, 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => 1610, 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => 200, 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "200 CONVERTIBLE", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => 300, 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Airflite", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Aspen", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Atlantic", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Avenger", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Aviat", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "C", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "CCV", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Centura", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Charger", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Chronos", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Cirrus", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Concorde", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Conquest", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Cordoba", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Crossfire", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Dart", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Daytona", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Delta", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Dodge 3700", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Dodge Phoenix", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "E", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "ES", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "ESX 3", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Executive", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Expresso", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Grand Voyager", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "GS", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Howler", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Imperial", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Java", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Laser", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Le Baron", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "LHS", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Limousine", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Millenium", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Neon", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "New Yorker", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Newport", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Pacifica", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Panel Cruiser", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Phaeton", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "PT Cruiser", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "PT Dream Cruiser", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Sebring", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Sedan", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "TC", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Thunderbolt", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Town & Country", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Town and Country", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Valiant", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Viper", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Voyager", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Windsor", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Ypsilon", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 34), 
            array(
                "MOD_MODEL" => 1.6, 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => 11, 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => 15, 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "2CV", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => 7, 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "7A", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Activa", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Ak 350", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Ami", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Aventure", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "AX", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Axel", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Berlingo", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Bijou", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "BX", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "C", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "C 15", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "C-Airdream", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "C-Crosser", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "C-Zero", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "C1", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "C2", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "C3", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "C4", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "C5", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "C6", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "C8", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "CX", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "DS", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Dyane", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Dyane 4", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Dyane 6", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Eco 2000", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Eole", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "GS", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "GSA", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "ID 19", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Karin", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "LN", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "LNA", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Mehari", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Mini-Zup", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Multispace", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Osee", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Picasso", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Pluriel", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Rally Raid", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Saxo", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "SM", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Traction", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Visa", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Xanae", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Xantia", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "XM", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Xsara", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "ZX", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "Duster", 
                "MOD_MKE_ID" => 36), 
            array(
                "MOD_MODEL" => "Logan", 
                "MOD_MKE_ID" => 36), 
            array(
                "MOD_MODEL" => "Sandero", 
                "MOD_MKE_ID" => 36), 
            array(
                "MOD_MODEL" => "Supernova", 
                "MOD_MKE_ID" => 36), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 36), 
            array(
                "MOD_MODEL" => "Arcadia", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Brougham", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Chairman", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Espero", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Evanda", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Joyster", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Kalos", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Korando", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Lacetti", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Lanos", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Leganza", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Maepsy-Na", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Magnus", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Matiz", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Musiro", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Musson", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Nexia", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "No 1", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Nubira", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Prince", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Rexton", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Rezzo", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Tacuma", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Tocsa", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Vada", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 37), 
            array(
                "MOD_MODEL" => 44, 
                "MOD_MKE_ID" => 38), 
            array(
                "MOD_MODEL" => 46, 
                "MOD_MKE_ID" => 38), 
            array(
                "MOD_MODEL" => 600, 
                "MOD_MKE_ID" => 38), 
            array(
                "MOD_MODEL" => 66, 
                "MOD_MKE_ID" => 38), 
            array(
                "MOD_MODEL" => 750, 
                "MOD_MKE_ID" => 38), 
            array(
                "MOD_MODEL" => "Daffodil", 
                "MOD_MKE_ID" => 38), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 38), 
            array(
                "MOD_MODEL" => "Altis", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Applause", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Atrai", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Bee", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Charade", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Charmant", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Compagno", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Consorte", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Copen", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Cuore", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Delta", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Domino", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Fellow", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Feroza", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Fourtrak TDX", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Freeclimber", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Gran Move", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Leeza", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Materia", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Micros 3l", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Mira", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Move", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Muse", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Naked", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Opti", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Rocky", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Sirion", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "SP-4", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Taft", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Terios", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Terios II", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Trevis", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "U4 B", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "YRV", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 39), 
            array(
                "MOD_MODEL" => 4.2, 
                "MOD_MKE_ID" => 40), 
            array(
                "MOD_MODEL" => "Conquest", 
                "MOD_MKE_ID" => 40), 
            array(
                "MOD_MODEL" => "DE 27", 
                "MOD_MKE_ID" => 40), 
            array(
                "MOD_MODEL" => "DE 36", 
                "MOD_MKE_ID" => 40), 
            array(
                "MOD_MODEL" => "DK", 
                "MOD_MKE_ID" => 40), 
            array(
                "MOD_MODEL" => "One-O-Four", 
                "MOD_MKE_ID" => 40), 
            array(
                "MOD_MODEL" => "Super Eight", 
                "MOD_MKE_ID" => 40), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 40), 
            array(
                "MOD_MODEL" => 1000, 
                "MOD_MKE_ID" => 41), 
            array(
                "MOD_MODEL" => "100A Cherry", 
                "MOD_MKE_ID" => 41), 
            array(
                "MOD_MODEL" => 1200, 
                "MOD_MKE_ID" => 41), 
            array(
                "MOD_MODEL" => 1600, 
                "MOD_MKE_ID" => 41), 
            array(
                "MOD_MODEL" => 1800, 
                "MOD_MKE_ID" => 41), 
            array(
                "MOD_MODEL" => "240Z", 
                "MOD_MKE_ID" => 41), 
            array(
                "MOD_MODEL" => "260Z", 
                "MOD_MKE_ID" => 41), 
            array(
                "MOD_MODEL" => 280, 
                "MOD_MKE_ID" => 41), 
            array(
                "MOD_MODEL" => "280Z", 
                "MOD_MKE_ID" => 41), 
            array(
                "MOD_MODEL" => "Laurel", 
                "MOD_MKE_ID" => 41), 
            array(
                "MOD_MODEL" => "Violet", 
                "MOD_MKE_ID" => 41), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 41), 
            array(
                "MOD_MODEL" => "Bigua", 
                "MOD_MKE_ID" => 42), 
            array(
                "MOD_MODEL" => "Deauville", 
                "MOD_MKE_ID" => 42), 
            array(
                "MOD_MODEL" => "Guara", 
                "MOD_MKE_ID" => 42), 
            array(
                "MOD_MODEL" => "Longchamp", 
                "MOD_MKE_ID" => 42), 
            array(
                "MOD_MODEL" => "Mangusta", 
                "MOD_MKE_ID" => 42), 
            array(
                "MOD_MODEL" => "Pantera", 
                "MOD_MKE_ID" => 42), 
            array(
                "MOD_MODEL" => "Vallelunga", 
                "MOD_MKE_ID" => 42), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 42), 
            array(
                "MOD_MODEL" => "3-6 Monza", 
                "MOD_MKE_ID" => 43), 
            array(
                "MOD_MODEL" => 600, 
                "MOD_MKE_ID" => 43), 
            array(
                "MOD_MODEL" => "Coupe", 
                "MOD_MKE_ID" => 43), 
            array(
                "MOD_MODEL" => "F 102", 
                "MOD_MKE_ID" => 43), 
            array(
                "MOD_MODEL" => "F 11", 
                "MOD_MKE_ID" => 43), 
            array(
                "MOD_MODEL" => "F 89", 
                "MOD_MKE_ID" => 43), 
            array(
                "MOD_MODEL" => "F 91", 
                "MOD_MKE_ID" => 43), 
            array(
                "MOD_MODEL" => "F 93", 
                "MOD_MKE_ID" => 43), 
            array(
                "MOD_MODEL" => "Junior", 
                "MOD_MKE_ID" => 43), 
            array(
                "MOD_MODEL" => "Munga", 
                "MOD_MKE_ID" => 43), 
            array(
                "MOD_MODEL" => "Reichklasse F8", 
                "MOD_MKE_ID" => 43), 
            array(
                "MOD_MODEL" => "Universal", 
                "MOD_MKE_ID" => 43), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 43), 
            array(
                "MOD_MODEL" => 600, 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Aspen", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Avenger", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Caliber", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Caravan", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Challenger", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Charger", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Charger RT Concept", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Colt", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Conquest", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Copperhead", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Coronet", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Custom", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Dakota", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Dart", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Daytona", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Durango", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Dynasty", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Grand Caravan", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Hemi Super 8", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Intrepid", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Journey", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Kahuna", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Lancer", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "M80", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Magnum", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Maxx Cab", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Mirada", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Monaco", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Neon", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Nitro", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Omni", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Polara", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Power Box", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Prowler", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Ram", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Razor", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Shadow", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Sidewinder", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Spirit", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Sprinter", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "SRT Viper", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Stealth", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Stratus", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "T-Rex 6x6", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Venom", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Viper", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "WC 51", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 44), 
            array(
                "MOD_MODEL" => "D8", 
                "MOD_MKE_ID" => 45), 
            array(
                "MOD_MODEL" => "S7", 
                "MOD_MKE_ID" => 45), 
            array(
                "MOD_MODEL" => "S8", 
                "MOD_MKE_ID" => 45), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 45), 
            array(
                "MOD_MODEL" => "Summit", 
                "MOD_MKE_ID" => 46), 
            array(
                "MOD_MODEL" => "Talon", 
                "MOD_MKE_ID" => 46), 
            array(
                "MOD_MODEL" => "Vision", 
                "MOD_MKE_ID" => 46), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 46), 
            array(
                "MOD_MODEL" => "Summit", 
                "MOD_MKE_ID" => 47), 
            array(
                "MOD_MODEL" => "Talon", 
                "MOD_MKE_ID" => 47), 
            array(
                "MOD_MODEL" => "Vision", 
                "MOD_MKE_ID" => 47), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 47), 
            array(
                "MOD_MODEL" => 125, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "125 F1", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "125S", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 126, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 156, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 158, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "159S", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 166, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 195, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 196, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 206, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 208, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 212, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 225, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 246, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 250, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "250 GT", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "250 GTE", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "250 GTO", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "250 LM", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "250 Mille Miglia", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "250 Testarossa", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "255 S", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "256 F1", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 275, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "288 GTO", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 306, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 308, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 312, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "328 GTB", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "328 GTS", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 330, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "330GT", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "340 America", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "340 F1", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "340 Mexico", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "340 MM", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "340 Spider", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "342 America", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 348, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "348 TS Targa", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "355 Spider", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "355 TS", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 360, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "365 BB", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "365 California", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "365 GT", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "365 GT4", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "365 GTB", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "365 GTC", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "365 GTC 4", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "365 GTS", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "375 America", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "375 Indy", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "375 Mille Miglia", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "3Z", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 400, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "400 Superamerica", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "410 Superamerica", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "412 GT", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "412 MI", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "412 T2", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 456, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "456M", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 458, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "458 Italia", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "500 F2", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "500 Mondial", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "500 Superfast", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "500 Testarossa", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "512 BB", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "512 BBi", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "512 BBi Turbo", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "512 F1", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "512 M", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "512 S", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "512 TR", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 550, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "553 F1", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "553 F2", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "575 Superamerica", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "575M Maranello", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 599, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "599 GTB Fiorano", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 612, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "612 Scaglietti", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "625 F1", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 735, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 750, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "801 F1", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 850, 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "C62", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "California", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "D 50", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "Dino", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "Enzo", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "F 2005", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "F1 156", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "F1 2000", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "F1 86", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "F1 88", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "F1 89", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "F1 90", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "F1 93", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "F310", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "F333", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "F355", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "F399", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "F40", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "F430", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "F50", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "F512 M", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "F55", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "F550", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "FF", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "FF HELE", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "GTO", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "KS 360 Modena", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "Maranello", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "Mondial", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "Mythos", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "P2", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "P5", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "Pinin", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "Rossa", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "Superamerica", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "Testarossa", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 48), 
            array(
                "MOD_MODEL" => 1100, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 1200, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 124, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 125, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 126, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 127, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 128, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 130, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 1300, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 131, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 132, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 133, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 1400, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 1500, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 1600, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 1800, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 1900, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 2100, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 2300, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 500, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "500e", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "500L", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "500X", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 600, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 750, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => 850, 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "8V", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Abarth", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Albea", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Argenta", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Armadillo", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Barchetta", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Berline", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Brava", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Bravo", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Cabriolet", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Campagnola", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Cinquecento", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Coupe", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Croma", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Dino", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Doblo", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Ducato", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Duna", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Ecobasic", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Ecobasis", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "ESV", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Fiorino", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Freemont", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Grand Break", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Grande Punto", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Idea", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Legram", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Linea", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Marea", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Marea Weekend", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Mirafiori", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Multipla", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "OT", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Palio", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Palio II", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Panda", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Punto", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Regata", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Ritmo", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Scudo", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Sedici", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Seicento", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Siena", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Stilo", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Strada", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Tempra", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Tipo", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Ulysse", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Uno", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "V8", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Vivace", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "X1-9", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 49), 
            array(
                "MOD_MODEL" => "Karma", 
                "MOD_MKE_ID" => 50), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 50), 
            array(
                "MOD_MODEL" => "021 C", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "12 M", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => 17, 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "17M", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => 2000, 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => 24.7, 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => 427, 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => 49, 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Aerostar", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Anglia", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Artic", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Aspire", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Bantam", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Bronco", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Bronco II", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "C 100", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "C-MAX", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "C-Max Energi", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "C-Max Hybrid", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Capri", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Coin", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Consul", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Contour", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Corsair", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Cortina", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Cougar", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Courier", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Crestline", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Crown Victoria", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Custom", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Desert Excursion", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "E-150", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "E-250", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "E-350", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "e-Ka", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "E-Series", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "E-Series Van", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "E-Series Wagon", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Econoline", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Econovan", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Ecosport", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Edge", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Equator", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Escape", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Escort", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "EX", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Excursion", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Expedition", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Explorer", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Extreme EX", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "F", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "F-150", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "F-250", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "F-250 Super Duty", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "F-350", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "F-350 Super Duty", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "F-450", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "F-450 Super Duty", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "F-650", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Fairlane", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Falcon", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Festiva", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Fiesta", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Five Hundred", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Flex", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Focus", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Focus ST", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "FPV BF GT", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Freestar", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Freestyle", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Fusion", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Fusion Energi", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Fusion Hybrid", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Galaxy", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Gran Torino", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Granada", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "GT", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "GT 40", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "GT 500", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "GT 70", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Husky", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Ikon", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Indigo", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Ka", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Kuga", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Laser", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Libre", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Limited", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Lotus Cortina", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "LTD", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Lynx", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Maverick", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Megastar II", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Meteor", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Model U", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Monarch", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Mondeo", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Mustang", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "O21 C", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Orion", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Pilot", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Popular", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Prefect", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Probe", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Puma", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Ranchero", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Ranger", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Royale", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "RS 200", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "S-Max", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Saetta", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Scorpio", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Shelby GR-1 Concept", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Shelby GT 500", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Shelby GT500", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Sierra", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Skyliner", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "ST 460", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Station Wagon", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Synergy 2010", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Taunus", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Taurus", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Taurus X", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "TE-50", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Telstar", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Tempo", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Territory", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Think", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Think Neighbor", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Thunderbird", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "TL-50", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Tonka", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Torino", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Tracer", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Transit Connect", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Transit Van", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Transit Wagon", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Triton", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "TS-50", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Urban Explorer", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Vedette", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Versailles", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Windstar", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "XR 8 Xplod", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Zephyr", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Zodiac", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => 26938, 
                "MOD_MKE_ID" => 52), 
            array(
                "MOD_MODEL" => 22, 
                "MOD_MKE_ID" => 52), 
            array(
                "MOD_MODEL" => 24, 
                "MOD_MKE_ID" => 52), 
            array(
                "MOD_MODEL" => 42667, 
                "MOD_MKE_ID" => 52), 
            array(
                "MOD_MODEL" => 3110, 
                "MOD_MKE_ID" => 52), 
            array(
                "MOD_MODEL" => 3111, 
                "MOD_MKE_ID" => 52), 
            array(
                "MOD_MODEL" => 61, 
                "MOD_MKE_ID" => 52), 
            array(
                "MOD_MODEL" => "M-20", 
                "MOD_MKE_ID" => 52), 
            array(
                "MOD_MODEL" => "M1", 
                "MOD_MKE_ID" => 52), 
            array(
                "MOD_MODEL" => "M20", 
                "MOD_MKE_ID" => 52), 
            array(
                "MOD_MODEL" => "Volga", 
                "MOD_MKE_ID" => 52), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 52), 
            array(
                "MOD_MODEL" => "CK", 
                "MOD_MKE_ID" => 53), 
            array(
                "MOD_MODEL" => "Ck1", 
                "MOD_MKE_ID" => 53), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 53), 
            array(
                "MOD_MODEL" => "G", 
                "MOD_MKE_ID" => 54), 
            array(
                "MOD_MODEL" => "G10", 
                "MOD_MKE_ID" => 54), 
            array(
                "MOD_MODEL" => "G11", 
                "MOD_MKE_ID" => 54), 
            array(
                "MOD_MODEL" => "G12", 
                "MOD_MKE_ID" => 54), 
            array(
                "MOD_MODEL" => "G15", 
                "MOD_MKE_ID" => 54), 
            array(
                "MOD_MODEL" => "G20", 
                "MOD_MKE_ID" => 54), 
            array(
                "MOD_MODEL" => "G21", 
                "MOD_MKE_ID" => 54), 
            array(
                "MOD_MODEL" => "G27", 
                "MOD_MKE_ID" => 54), 
            array(
                "MOD_MODEL" => "G3", 
                "MOD_MKE_ID" => 54), 
            array(
                "MOD_MODEL" => "G32", 
                "MOD_MKE_ID" => 54), 
            array(
                "MOD_MODEL" => "G33", 
                "MOD_MKE_ID" => 54), 
            array(
                "MOD_MODEL" => "G34", 
                "MOD_MKE_ID" => 54), 
            array(
                "MOD_MODEL" => "G4", 
                "MOD_MKE_ID" => 54), 
            array(
                "MOD_MODEL" => "G40", 
                "MOD_MKE_ID" => 54), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 54), 
            array(
                "MOD_MODEL" => "Acadia", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Autonomy", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Canyon", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Envoy", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "EV1", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Firebird", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Jimmy", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Safari", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Savana", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Sierra", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Sierra 1500", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Sierra 2500HD", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Sierra 3500HD", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Sonoma", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Suburban", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Terra 4", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Terracross", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Terradyne", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Terrain", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Typhoon", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Yukon", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Yukon XL", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 55), 
            array(
                "MOD_MODEL" => "Apollo", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Astra", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Barina", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Belmont", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Berlina", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Brougham", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Calais", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Camira", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Caprice", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Captiva", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Clubsport", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Colorado", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Combo", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Commodore", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Cruze", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Drover", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "EH", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "EJ", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "EK", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Epica", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "FB Special", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "FC", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "FE", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "FJ", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Frontera", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "FX", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Gemini", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "GTS", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "GTS-R", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "HB", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "HD", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "HR", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "HRT", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "HSV", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Jackaroo", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Kingswood", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Maloo", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Monaro", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Nova", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Rodeo", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Senator", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Statesman", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Sunbird", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Torana", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "UTE", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Vectra", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "XU 6", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Zafira", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 56), 
            array(
                "MOD_MODEL" => 1300, 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => 145, 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Accord", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Accord Crosstour", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Accord Hybrid", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Accord Plug-In Hybrid", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Acty", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Argento Viva", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Avancier", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Ballade", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Capa", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "City", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Civic", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Civic Del Sol", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Concerto", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "CR-V", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "CR-Z", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Crosstour", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "CRX", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Element", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "EV", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "F1", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "FCX", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Fit", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "FR-V", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Fuya Jo", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "HP-X", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "HR-V", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Insight", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Inspire", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Integra", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "J-VX", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Jazz", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Lagreat", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Legend", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Life", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Logo", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Mobilio", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Model X", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "N III", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "NSX", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Odyssey", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Passport", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Pilot", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Prelude", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Quintet", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Ridgeline", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "S-MX", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "S2000", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "S500", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "S600", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "S800", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Saber", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Shuttle", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "SSM", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Step Wagon", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Stream", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "That", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Today", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Torneo", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Vamos", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Z", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 57), 
            array(
                "MOD_MODEL" => "Commodore", 
                "MOD_MKE_ID" => 58), 
            array(
                "MOD_MODEL" => "Hornet", 
                "MOD_MKE_ID" => 58), 
            array(
                "MOD_MODEL" => "Italia Coupe", 
                "MOD_MKE_ID" => 58), 
            array(
                "MOD_MODEL" => "Metropolitan", 
                "MOD_MKE_ID" => 58), 
            array(
                "MOD_MODEL" => "Super Jet", 
                "MOD_MKE_ID" => 58), 
            array(
                "MOD_MODEL" => "Super Wasp", 
                "MOD_MKE_ID" => 58), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 58), 
            array(
                "MOD_MODEL" => "Hawk", 
                "MOD_MKE_ID" => 59), 
            array(
                "MOD_MODEL" => "Pullman", 
                "MOD_MKE_ID" => 59), 
            array(
                "MOD_MODEL" => "Sceptre", 
                "MOD_MKE_ID" => 59), 
            array(
                "MOD_MODEL" => "Super Snipe", 
                "MOD_MKE_ID" => 59), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 59), 
            array(
                "MOD_MODEL" => "H1", 
                "MOD_MKE_ID" => 60), 
            array(
                "MOD_MODEL" => "H2", 
                "MOD_MKE_ID" => 60), 
            array(
                "MOD_MODEL" => "H3", 
                "MOD_MKE_ID" => 60), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 60), 
            array(
                "MOD_MODEL" => "Accent", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Atos", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Azera", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Clix", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Coupe", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Dynasty", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Elantra", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Elantra GT", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Entourage", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Equus", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Euro 1", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Excel", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Galloper", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Genesis", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Genesis Coupe", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Getz", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Grandeur", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "H1", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "H100", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "HCD-7", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "HCD-III", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "HED-5", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "HED-6", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "i10", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "i20", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "i30", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "i40", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "ix20", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "ix35", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Lantra", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Marcia", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Matrix", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Neos", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Panel Van", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Pony", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Portico", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Santa Fe", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Santa Fe Sport", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Satellite", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Scoupe", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Sonata", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Sonata Hybrid", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Stellar", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Terracan", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Tiburon", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Tipper", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Trajet", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Tucson", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Veloster", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Veracruz", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "XG", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "XG 300", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "XG 350", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "EX", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "FX", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "G", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "G20", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "G25", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "G35", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "G37", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "I", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "I30", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "I35", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "IPL", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "J30", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "JX", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "M", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "Q30", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "Q40", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "Q45", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "Q50", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "Q60 Convertible", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "Q60 Coupe", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "Q70", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "QX", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "QX4", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "QX50", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "QX56", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "QX60", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "QX70", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "QX80", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 62), 
            array(
                "MOD_MODEL" => 950, 
                "MOD_MKE_ID" => 63), 
            array(
                "MOD_MODEL" => 990, 
                "MOD_MKE_ID" => 63), 
            array(
                "MOD_MODEL" => "A 40", 
                "MOD_MKE_ID" => 63), 
            array(
                "MOD_MODEL" => "A40S", 
                "MOD_MKE_ID" => 63), 
            array(
                "MOD_MODEL" => "C", 
                "MOD_MKE_ID" => 63), 
            array(
                "MOD_MODEL" => "Elba", 
                "MOD_MKE_ID" => 63), 
            array(
                "MOD_MODEL" => "IM 3", 
                "MOD_MKE_ID" => 63), 
            array(
                "MOD_MODEL" => "J4", 
                "MOD_MKE_ID" => 63), 
            array(
                "MOD_MODEL" => "Koral", 
                "MOD_MKE_ID" => 63), 
            array(
                "MOD_MODEL" => "Mille", 
                "MOD_MKE_ID" => 63), 
            array(
                "MOD_MODEL" => "Mini", 
                "MOD_MKE_ID" => 63), 
            array(
                "MOD_MODEL" => "Turbo De Tomaso", 
                "MOD_MKE_ID" => 63), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 63), 
            array(
                "MOD_MODEL" => 117, 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => 3.1, 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => 4200, 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "Amigo", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "Ascender", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "Axiom", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "Bellel", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "Bellett", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "D-MAX", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "Florian", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "Frontera", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "Gemini", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "Hombre", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "I-280", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "I-290", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "I-350", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "Impulse", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "Kai", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "KB", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "Minx", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "New Bellel", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "Piazza", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "Rodeo", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "Stylus", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "Trooper", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "VehiCross", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "VX-02", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "VX4", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "Wizard", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "ZXS", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 64), 
            array(
                "MOD_MODEL" => "Aspid", 
                "MOD_MKE_ID" => 65), 
            array(
                "MOD_MODEL" => "Buron", 
                "MOD_MKE_ID" => 65), 
            array(
                "MOD_MODEL" => "Columbus", 
                "MOD_MKE_ID" => 65), 
            array(
                "MOD_MODEL" => "Formula 4", 
                "MOD_MKE_ID" => 65), 
            array(
                "MOD_MODEL" => "Legram", 
                "MOD_MKE_ID" => 65), 
            array(
                "MOD_MODEL" => "M12", 
                "MOD_MKE_ID" => 65), 
            array(
                "MOD_MODEL" => "Machimoto", 
                "MOD_MKE_ID" => 65), 
            array(
                "MOD_MODEL" => "Medusa", 
                "MOD_MKE_ID" => 65), 
            array(
                "MOD_MODEL" => "Nazca", 
                "MOD_MKE_ID" => 65), 
            array(
                "MOD_MODEL" => "Tapiro", 
                "MOD_MKE_ID" => 65), 
            array(
                "MOD_MODEL" => "Twenty Twenty", 
                "MOD_MKE_ID" => 65), 
            array(
                "MOD_MODEL" => "Visconti", 
                "MOD_MKE_ID" => 65), 
            array(
                "MOD_MODEL" => "Volta", 
                "MOD_MKE_ID" => 65), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 65), 
            array(
                "MOD_MODEL" => 220, 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => 240, 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => 3.8, 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "420G", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "C-Type", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "Concept Eight", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "E Type", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "E-Type", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "F-Type", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "Kensington", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "Mark IV", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "MK 10", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "MK II", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "MK IV", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "MK IX", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "MK V", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "MK VII", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "MK VIII", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "MK X", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "R Coupe", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "R-D6", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "S-Type", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "Sovereign", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "SS", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "Type E", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "Type S", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "Type-C", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "Vanden Plas", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "X-300", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "X-Type", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "X400", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "XF", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "XJ", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "XJ-13", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "XJ220", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "XJ6", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "XJ8", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "XJR", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "XJR-11", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "XJR-15", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "XJS", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "XK", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "XK8", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "XKA", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "XKR", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "XQ", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "XS", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 66), 
            array(
                "MOD_MODEL" => "Cherokee", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "CJ", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "CJ2", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "CJ2A", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "CJ3A", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "CJ5", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "CJ7", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "Commander", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "Compass", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "Dakar", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "Grand Cherokee", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "Grand Cherokee SRT", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "Grand Wagoneer", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "Icon", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "Jeepster", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "Liberty", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "MB", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "Patriot", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "Renegade", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "Station Wagon", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "Varsity", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "Willys", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "Willys 2", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "Wrangler", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 67), 
            array(
                "MOD_MODEL" => "4-Litre", 
                "MOD_MKE_ID" => 68), 
            array(
                "MOD_MODEL" => 541, 
                "MOD_MKE_ID" => 68), 
            array(
                "MOD_MODEL" => "CV-8", 
                "MOD_MKE_ID" => 68), 
            array(
                "MOD_MODEL" => "FF", 
                "MOD_MKE_ID" => 68), 
            array(
                "MOD_MODEL" => "Healey", 
                "MOD_MKE_ID" => 68), 
            array(
                "MOD_MODEL" => "Interceptor", 
                "MOD_MKE_ID" => 68), 
            array(
                "MOD_MODEL" => "Jensen-Healey", 
                "MOD_MKE_ID" => 68), 
            array(
                "MOD_MODEL" => "SP", 
                "MOD_MKE_ID" => 68), 
            array(
                "MOD_MODEL" => "Straight 8", 
                "MOD_MKE_ID" => 68), 
            array(
                "MOD_MODEL" => "SV-8", 
                "MOD_MKE_ID" => 68), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 68), 
            array(
                "MOD_MODEL" => "Amanti", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Avella", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Borrego", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Brisa", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Cadenza", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Capital", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Carens", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Carnival", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Cee'd", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Cerato", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Clarus", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Elan", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Forte", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Joice", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "K2700", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "K900", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "KCV-4", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Magentis", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Opirus", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Optima", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Optima Hybrid", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Picanto", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Potentia", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Pregio", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Pride Wagon", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Pro-ceed", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Retona", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Rio", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Rondo", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Sedona", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Sephia", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Sephia II", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Shuma", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Shuma II", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Sorento", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Soul", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Soul EV", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Spectra", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Spectra5", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Sportage", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Towner", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Venga", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Visto", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Xedos", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 69), 
            array(
                "MOD_MODEL" => "Agera", 
                "MOD_MKE_ID" => 70), 
            array(
                "MOD_MODEL" => "CC8S", 
                "MOD_MKE_ID" => 70), 
            array(
                "MOD_MODEL" => "CCR", 
                "MOD_MKE_ID" => 70), 
            array(
                "MOD_MODEL" => "CCX", 
                "MOD_MKE_ID" => 70), 
            array(
                "MOD_MODEL" => "CCXR", 
                "MOD_MKE_ID" => 70), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 70), 
            array(
                "MOD_MODEL" => 110, 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => 111, 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => 112, 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => 117, 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => 119, 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => 1200, 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => 1300, 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => 1600, 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => 21, 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => 2104, 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => 2105, 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => 2107, 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => 2110, 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => 2111, 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => 2123, 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => "Calina 1118", 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => "Granta", 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => "Kalina", 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => "Natacha", 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => "Niva", 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => "Oka", 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => "Riva", 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => "Roadster", 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => "S", 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => "Samara", 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => "Samara II", 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => "Tarzan", 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => "Vaz", 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 71), 
            array(
                "MOD_MODEL" => "350 GT", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => 400, 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Aventador", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Bravo", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Cala", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Concept S", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Countach", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Diablo", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Espada", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Flying Star", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Gallardo", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Huracan", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Islero", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Jalpa", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Jarama", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "LM", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "LM002", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Marco Polo", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Marzal", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Miura", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Murcielago", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "P140", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Portofino", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Project P140", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Urraco", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 72), 
            array(
                "MOD_MODEL" => "037 Rallye", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => 2000, 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "A 112", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Appia", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Aprilia", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Ardea 3", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Aurelia", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Beta", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "D 50", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Dedra", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Delta", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Dialogos", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "ECV", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Flaminia", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Flavia", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Fulvia", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Gamma", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Hit", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Hyena", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Ionos", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "K", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Kappa", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Lybra", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Megagamma", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Musa", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Nea", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Phedra", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Prisma", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Scorpion", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Stratos", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Thema", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Thesis", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Trevi", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Voyager", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Y10", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Ypsilon", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Zeta", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 73), 
            array(
                "MOD_MODEL" => 109, 
                "MOD_MKE_ID" => 74), 
            array(
                "MOD_MODEL" => 88, 
                "MOD_MKE_ID" => 74), 
            array(
                "MOD_MODEL" => "A 109", 
                "MOD_MKE_ID" => 74), 
            array(
                "MOD_MODEL" => "ALL-NEW Range Rover", 
                "MOD_MKE_ID" => 74), 
            array(
                "MOD_MODEL" => "Defender", 
                "MOD_MKE_ID" => 74), 
            array(
                "MOD_MODEL" => "Discovery", 
                "MOD_MKE_ID" => 74), 
            array(
                "MOD_MODEL" => "Discovery 3", 
                "MOD_MKE_ID" => 74), 
            array(
                "MOD_MODEL" => "Freelander", 
                "MOD_MKE_ID" => 74), 
            array(
                "MOD_MODEL" => "I", 
                "MOD_MKE_ID" => 74), 
            array(
                "MOD_MODEL" => "LR2", 
                "MOD_MKE_ID" => 74), 
            array(
                "MOD_MODEL" => "LR3", 
                "MOD_MKE_ID" => 74), 
            array(
                "MOD_MODEL" => "LR4", 
                "MOD_MKE_ID" => 74), 
            array(
                "MOD_MODEL" => "Range Rover", 
                "MOD_MKE_ID" => 74), 
            array(
                "MOD_MODEL" => "Range Rover Evoque", 
                "MOD_MKE_ID" => 74), 
            array(
                "MOD_MODEL" => "Range Rover Sport", 
                "MOD_MKE_ID" => 74), 
            array(
                "MOD_MODEL" => "Serie I", 
                "MOD_MKE_ID" => 74), 
            array(
                "MOD_MODEL" => "Serie II", 
                "MOD_MKE_ID" => 74), 
            array(
                "MOD_MODEL" => "Serie III", 
                "MOD_MKE_ID" => 74), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 74), 
            array(
                "MOD_MODEL" => "CT", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "CT 200h", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "Daytona", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "ES", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "ES 300h", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "ES 350", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "FLV", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "GS", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "GS 350", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "GS 450h", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "GX", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "GX 460", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "HS", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "IS", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "IS 250", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "IS 250 C", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "IS 350", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "IS 350 C", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "IS F", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "LF-C", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "LFA", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "LS", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "LS 460", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "LS 600h L", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "LX", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "LX 570", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "Minority Report", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "NX 200t", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "NX 300h", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "RC 350", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "RC F", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "RX", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "RX 350", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "RX 450h", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "SC", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "Aviator", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "Blackwood", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "Capri", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "Continental", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "LS", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "Mark 7", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "Mark LT", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "Mark VI", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "Mark VII", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "Mark VIII", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "Mark X", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "MK 9", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "MKC", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "MKS", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "MKT", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "MKX", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "MKZ", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "Navigator", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "Premiere", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "Sentinel", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "Town Car", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "Zephyr", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 76), 
            array(
                "MOD_MODEL" => "TX1", 
                "MOD_MKE_ID" => 77), 
            array(
                "MOD_MODEL" => "TX2", 
                "MOD_MKE_ID" => 77), 
            array(
                "MOD_MODEL" => "TX3", 
                "MOD_MKE_ID" => 77), 
            array(
                "MOD_MODEL" => "TX4", 
                "MOD_MKE_ID" => 77), 
            array(
                "MOD_MODEL" => "C 1000", 
                "MOD_MKE_ID" => 78), 
            array(
                "MOD_MODEL" => "Sirius", 
                "MOD_MKE_ID" => 78), 
            array(
                "MOD_MODEL" => "Testa de Oro", 
                "MOD_MKE_ID" => 78), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 78), 
            array(
                "MOD_MODEL" => 11, 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => 16, 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => 25, 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => 33, 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "340 R", 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => 49, 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => 72, 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => 79, 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "Carlton", 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "Eclat", 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "Elan", 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "Elise", 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "Elite", 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "Emme", 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "Esprit", 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "Etna", 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "Europa", 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "Evora", 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "Excel", 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "Exige", 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "Extreme", 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "GT 1", 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "M250", 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "Seven", 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "XI Le Mans", 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 79), 
            array(
                "MOD_MODEL" => "Luxgen7", 
                "MOD_MKE_ID" => 80), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 80), 
            array(
                "MOD_MODEL" => "Armada", 
                "MOD_MKE_ID" => 81), 
            array(
                "MOD_MODEL" => "Bolero", 
                "MOD_MKE_ID" => 81), 
            array(
                "MOD_MODEL" => "CL", 
                "MOD_MKE_ID" => 81), 
            array(
                "MOD_MODEL" => "Commander", 
                "MOD_MKE_ID" => 81), 
            array(
                "MOD_MODEL" => "Scorpio", 
                "MOD_MKE_ID" => 81), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 81), 
            array(
                "MOD_MODEL" => 1500, 
                "MOD_MKE_ID" => 82), 
            array(
                "MOD_MODEL" => 1600, 
                "MOD_MKE_ID" => 82), 
            array(
                "MOD_MODEL" => 1800, 
                "MOD_MKE_ID" => 82), 
            array(
                "MOD_MODEL" => "2 Litres", 
                "MOD_MKE_ID" => 82), 
            array(
                "MOD_MODEL" => "GT", 
                "MOD_MKE_ID" => 82), 
            array(
                "MOD_MODEL" => "GTS", 
                "MOD_MKE_ID" => 82), 
            array(
                "MOD_MODEL" => "Le Mans 500", 
                "MOD_MKE_ID" => 82), 
            array(
                "MOD_MODEL" => "Mantara", 
                "MOD_MKE_ID" => 82), 
            array(
                "MOD_MODEL" => "Mantis", 
                "MOD_MKE_ID" => 82), 
            array(
                "MOD_MODEL" => "Mantula", 
                "MOD_MKE_ID" => 82), 
            array(
                "MOD_MODEL" => "Mini Marcos", 
                "MOD_MKE_ID" => 82), 
            array(
                "MOD_MODEL" => "TS", 
                "MOD_MKE_ID" => 82), 
            array(
                "MOD_MODEL" => "TS500", 
                "MOD_MKE_ID" => 82), 
            array(
                "MOD_MODEL" => "TSO", 
                "MOD_MKE_ID" => 82), 
            array(
                "MOD_MODEL" => "Ugly Duckling", 
                "MOD_MKE_ID" => 82), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 82), 
            array(
                "MOD_MODEL" => 124, 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "150S", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => 151, 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => 228, 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => 250, 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => 300, 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "3200 GT", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => 3500, 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "350S", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => 4, 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => 420, 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "420M", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => 430, 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => 450, 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "4CL", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "4CLT", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "5000 GT", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "6C", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => 8, 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "8CL", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "8CLT", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "A6", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "A6G", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "A6GCM", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "A6GCS", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Auge", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Barchetta Straale", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Bi Turbo", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Boomerang", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Bora", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Coupe", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Ghibli", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Gran Turismo", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Gran Turismo 3500", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "GranSport", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "GranTurismo", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "GranTurismo Convertible", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "GT", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "GT 3500", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Indy", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Khamsin", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Kubang", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Kyalami", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Levante", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "MC12", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Merak", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Mexico", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Mistral", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Quattroporte", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Royale", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Shamal", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Simun", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Spider 3500", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Spyder", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Tipo 60", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Tipo 61", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Tipo 64", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Tipo 65", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "V8 GranSport", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 83), 
            array(
                "MOD_MODEL" => "Bagheera", 
                "MOD_MKE_ID" => 84), 
            array(
                "MOD_MODEL" => "D Jet", 
                "MOD_MKE_ID" => 84), 
            array(
                "MOD_MODEL" => "M25", 
                "MOD_MKE_ID" => 84), 
            array(
                "MOD_MODEL" => "M530", 
                "MOD_MKE_ID" => 84), 
            array(
                "MOD_MODEL" => "M630", 
                "MOD_MKE_ID" => 84), 
            array(
                "MOD_MODEL" => "M650", 
                "MOD_MKE_ID" => 84), 
            array(
                "MOD_MODEL" => "M660", 
                "MOD_MKE_ID" => 84), 
            array(
                "MOD_MODEL" => "M670", 
                "MOD_MKE_ID" => 84), 
            array(
                "MOD_MODEL" => "M72", 
                "MOD_MKE_ID" => 84), 
            array(
                "MOD_MODEL" => "Murena", 
                "MOD_MKE_ID" => 84), 
            array(
                "MOD_MODEL" => "Rancho", 
                "MOD_MKE_ID" => 84), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 84), 
            array(
                "MOD_MODEL" => 57, 
                "MOD_MKE_ID" => 85), 
            array(
                "MOD_MODEL" => 62, 
                "MOD_MKE_ID" => 85), 
            array(
                "MOD_MODEL" => "Landaulet", 
                "MOD_MKE_ID" => 85), 
            array(
                "MOD_MODEL" => "SW", 
                "MOD_MKE_ID" => 85), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 85), 
            array(
                "MOD_MODEL" => 1000, 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "110 S", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => 121, 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => 2, 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => 3, 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => 323, 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => 5, 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => 6, 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => 616, 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => 626, 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => 787, 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => 818, 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => 929, 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Activehicle", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Atenza", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "AZ", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "AZ-1", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "B2300", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "B2500", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "B3000", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "B4000", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Brown Collection Verisa", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "BT-50", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Carol", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Chante", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Cosmo", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "CU-X", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "CX-05", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "CX-09", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "CX-3", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "CX-5", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "CX-7", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "CX-9", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Demio", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Drifter", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "DrifterX", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Etude", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Eunos", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Familia", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Kusabi", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Lantis", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Laputa", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Levante", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Luce", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Marathon", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "MAZDA2", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "MAZDA3", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Mazda5", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "MAZDA6", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "MazdaSpeed3", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "MazdaSpeed6", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Midge", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Millenia", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Montrose", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "MPV", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "MS-6", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "MS-8", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "MS-9", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "MX", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "MX-3", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "MX-5 Miata", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "MX-6", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "MX-Flexa", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Persona", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Premacy", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Protege", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "R 360", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "R-100", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Roadster", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Rustler", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "RX 4 Coupe", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "RX Evolv", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "RX-01", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "RX-2", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "RX-3", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "RX-4", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "RX-7", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "RX-8", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "RX-Evolv", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Sentia", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "SPEED3", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Spiano", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Sport Wagon", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "SW-X", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Tribute", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Washu", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Xedos 9", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 86), 
            array(
                "MOD_MODEL" => "Crossblade", 
                "MOD_MKE_ID" => 87), 
            array(
                "MOD_MODEL" => "ForFour", 
                "MOD_MKE_ID" => 87), 
            array(
                "MOD_MODEL" => "ForTwo", 
                "MOD_MKE_ID" => 87), 
            array(
                "MOD_MODEL" => "Silverpulse", 
                "MOD_MKE_ID" => 87), 
            array(
                "MOD_MODEL" => "Smart", 
                "MOD_MKE_ID" => 87), 
            array(
                "MOD_MODEL" => "Smart & Pulse City Coupe", 
                "MOD_MKE_ID" => 87), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 87), 
            array(
                "MOD_MODEL" => "650S Coupe", 
                "MOD_MKE_ID" => 88), 
            array(
                "MOD_MODEL" => "650S Spider", 
                "MOD_MKE_ID" => 88), 
            array(
                "MOD_MODEL" => "F1", 
                "MOD_MKE_ID" => 88), 
            array(
                "MOD_MODEL" => "F1 GTR", 
                "MOD_MKE_ID" => 88), 
            array(
                "MOD_MODEL" => "F1 LM", 
                "MOD_MKE_ID" => 88), 
            array(
                "MOD_MODEL" => "M10", 
                "MOD_MKE_ID" => 88), 
            array(
                "MOD_MODEL" => "M14", 
                "MOD_MKE_ID" => 88), 
            array(
                "MOD_MODEL" => "M19", 
                "MOD_MKE_ID" => 88), 
            array(
                "MOD_MODEL" => "M1C", 
                "MOD_MKE_ID" => 88), 
            array(
                "MOD_MODEL" => "M21", 
                "MOD_MKE_ID" => 88), 
            array(
                "MOD_MODEL" => "M23", 
                "MOD_MKE_ID" => 88), 
            array(
                "MOD_MODEL" => "M8E", 
                "MOD_MKE_ID" => 88), 
            array(
                "MOD_MODEL" => "MP4", 
                "MOD_MKE_ID" => 88), 
            array(
                "MOD_MODEL" => "MP4-12C", 
                "MOD_MKE_ID" => 88), 
            array(
                "MOD_MODEL" => "P1", 
                "MOD_MKE_ID" => 88), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 88), 
            array(
                "MOD_MODEL" => "170 V", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "170S", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 180, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 190, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 200, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 219, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 220, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 230, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 230.4, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 240, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 250, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 260, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 280, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 300, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "300B", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "300D", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "300S", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 320, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 350, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 380, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 400, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 420, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 450, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 500, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 560, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 600, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => 770, 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "A", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "AMG GT", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "B", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "Bionic Car Concept", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "C", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "C 111", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "C 112", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "C-Class", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "C30", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "CK", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "CL", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "CL-Class", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "CLA-Class", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "CLC", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "CLK", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "CLK GTR", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "CLK LM", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "CLS", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "CLS-Class", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "CW", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "E", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "E-Class", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "E420", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "E500", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "F200", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "F300 Life Jet", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "G", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "G-Class", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "GL", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "GL-Class", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "GLA-Class", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "GLE-Class", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "GLK", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "GLK-Class", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "M", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "M-Class", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "Maybach", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "MCC", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "Metris", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "ML", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "Ponton", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "R", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "S", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "S-Class", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "SC", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "SE", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "SL", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "SL-Class", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "SLK", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "SLK-Class", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "SLR McLaren", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "SLS", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "SLS AMG GT", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "SLS AMG GT Final Edition", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "Smart", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "Sprinter", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "Studie", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "Swatch", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "T", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "T V-12", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "V", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "Vaneo", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "Version Longue", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "Viano", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "Vision", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "Vito", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "W 110", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "W 111", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "W 123 Coupe", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "W 136", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "W 196", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "Antser", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Brougham", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Capri", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Comet", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Cougar", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Cyclone", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "El Gato", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Grand Marquis", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "LN7", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Lynx", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Marauder", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Mariner", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "MC4", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Milan", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Montclair", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Montego", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Monterey", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Mountaineer", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Mystique", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Park Lane", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Roadster", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Sable", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Tracer", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Villager", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 90), 
            array(
                "MOD_MODEL" => 1100, 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "EX-E", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "Magnett", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "MGA", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "MGB", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "MGC", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "Midget", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "Rover", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "RV8", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "TD", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "TF", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "X10", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "X20", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "X80", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "XPower", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "YB", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "ZR", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "ZS", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "ZT", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "ZT-T", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 91), 
            array(
                "MOD_MODEL" => "Clubman", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => "Cooper", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => "Cooper Clubman", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => "Cooper Countryman", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => "Cooper Coupe", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => "Cooper Paceman", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => "Cooper Roadster", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => "Countryman", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => "Coupe", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => "MK I", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => "MK II", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => "MK III", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => "MK IV", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => "MK V", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => "MK VI", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => "MK VII", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => "One", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => "Roadster", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => "3000GT", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => 500, 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "A10", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "ASX", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Carisma", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Celeste", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Challenger", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Colt", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Debonair", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Delica Space Gear", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Diamante", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Dingo", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Dion", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Eclipse", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "eK", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Endeavor", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Field Guard", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "FTO", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Galant", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Gaus", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Grandis", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "GTO", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "HSR-V", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "i-MiEV", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Jeep", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "L 200", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Lancer", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Lancer Evolution", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Lancer Sportback", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Magna", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Minica", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Mirage", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Montero", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Mum 500", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Nessie", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Outlander", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Outlander Sport", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Pajero", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Proudia", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Raider", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "RPM 7000", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "RVR", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Sapporo", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Shogun", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Shogun Pinin", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Sigma", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Space Liner", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Space Runner", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Space Star", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Space Wagon", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "SSS", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "SST", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "SSU", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Starion", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "SUP", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "SUW", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Valley", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Verada", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 93), 
            array(
                "MOD_MODEL" => 2000, 
                "MOD_MKE_ID" => 94), 
            array(
                "MOD_MODEL" => 375, 
                "MOD_MKE_ID" => 94), 
            array(
                "MOD_MODEL" => 400, 
                "MOD_MKE_ID" => 94), 
            array(
                "MOD_MODEL" => "Berlinetta", 
                "MOD_MKE_ID" => 94), 
            array(
                "MOD_MODEL" => "Hai 375", 
                "MOD_MKE_ID" => 94), 
            array(
                "MOD_MODEL" => "Hai 450", 
                "MOD_MKE_ID" => 94), 
            array(
                "MOD_MODEL" => "Hai 650", 
                "MOD_MKE_ID" => 94), 
            array(
                "MOD_MODEL" => "High Speed 375", 
                "MOD_MKE_ID" => 94), 
            array(
                "MOD_MODEL" => "Military 250 Z Zivil", 
                "MOD_MKE_ID" => 94), 
            array(
                "MOD_MODEL" => "Safari", 
                "MOD_MKE_ID" => 94), 
            array(
                "MOD_MODEL" => "Sahara", 
                "MOD_MKE_ID" => 94), 
            array(
                "MOD_MODEL" => "Sierra", 
                "MOD_MKE_ID" => 94), 
            array(
                "MOD_MODEL" => "Tiara", 
                "MOD_MKE_ID" => 94), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 94), 
            array(
                "MOD_MODEL" => 1100, 
                "MOD_MKE_ID" => 95), 
            array(
                "MOD_MODEL" => 1200, 
                "MOD_MKE_ID" => 95), 
            array(
                "MOD_MODEL" => 127, 
                "MOD_MKE_ID" => 95), 
            array(
                "MOD_MODEL" => 2500, 
                "MOD_MKE_ID" => 95), 
            array(
                "MOD_MODEL" => 500, 
                "MOD_MKE_ID" => 95), 
            array(
                "MOD_MODEL" => 750, 
                "MOD_MKE_ID" => 95), 
            array(
                "MOD_MODEL" => "750S Berlina", 
                "MOD_MKE_ID" => 95), 
            array(
                "MOD_MODEL" => 850, 
                "MOD_MKE_ID" => 95), 
            array(
                "MOD_MODEL" => "850S", 
                "MOD_MKE_ID" => 95), 
            array(
                "MOD_MODEL" => "Coupe", 
                "MOD_MKE_ID" => 95), 
            array(
                "MOD_MODEL" => "Golden", 
                "MOD_MKE_ID" => 95), 
            array(
                "MOD_MODEL" => "La Cita", 
                "MOD_MKE_ID" => 95), 
            array(
                "MOD_MODEL" => "Panoramica", 
                "MOD_MKE_ID" => 95), 
            array(
                "MOD_MODEL" => "S Coupe", 
                "MOD_MKE_ID" => 95), 
            array(
                "MOD_MODEL" => "Spider Turismo", 
                "MOD_MKE_ID" => 95), 
            array(
                "MOD_MODEL" => "SS", 
                "MOD_MKE_ID" => 95), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 95), 
            array(
                "MOD_MODEL" => 4, 
                "MOD_MKE_ID" => 96), 
            array(
                "MOD_MODEL" => "4 Plus 2100", 
                "MOD_MKE_ID" => 96), 
            array(
                "MOD_MODEL" => "4 Seater", 
                "MOD_MKE_ID" => 96), 
            array(
                "MOD_MODEL" => 44, 
                "MOD_MKE_ID" => 96), 
            array(
                "MOD_MODEL" => "Aero", 
                "MOD_MKE_ID" => 96), 
            array(
                "MOD_MODEL" => "Aero 8", 
                "MOD_MKE_ID" => 96), 
            array(
                "MOD_MODEL" => "Aeromax", 
                "MOD_MKE_ID" => 96), 
            array(
                "MOD_MODEL" => "F Super", 
                "MOD_MKE_ID" => 96), 
            array(
                "MOD_MODEL" => "Plus 4", 
                "MOD_MKE_ID" => 96), 
            array(
                "MOD_MODEL" => "Plus 4 Plus", 
                "MOD_MKE_ID" => 96), 
            array(
                "MOD_MODEL" => "Plus 8", 
                "MOD_MKE_ID" => 96), 
            array(
                "MOD_MODEL" => "Roadster", 
                "MOD_MKE_ID" => 96), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 96), 
            array(
                "MOD_MODEL" => 1100, 
                "MOD_MKE_ID" => 97), 
            array(
                "MOD_MODEL" => 1800, 
                "MOD_MKE_ID" => 97), 
            array(
                "MOD_MODEL" => "Cowley", 
                "MOD_MKE_ID" => 97), 
            array(
                "MOD_MODEL" => "Isis", 
                "MOD_MKE_ID" => 97), 
            array(
                "MOD_MODEL" => "Marina", 
                "MOD_MKE_ID" => 97), 
            array(
                "MOD_MODEL" => "Mini Moke", 
                "MOD_MKE_ID" => 97), 
            array(
                "MOD_MODEL" => "Minor", 
                "MOD_MKE_ID" => 97), 
            array(
                "MOD_MODEL" => "Oxford", 
                "MOD_MKE_ID" => 97), 
            array(
                "MOD_MODEL" => "Six", 
                "MOD_MKE_ID" => 97), 
            array(
                "MOD_MODEL" => "Ten Four", 
                "MOD_MKE_ID" => 97), 
            array(
                "MOD_MODEL" => "Traveller", 
                "MOD_MKE_ID" => 97), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 97), 
            array(
                "MOD_MODEL" => "100 NX", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => 110, 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => 1400, 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "200 SX Silvia", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => 211, 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "240 C", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "260 ZX", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "270 R", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "300 ZX", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "350Z", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "370Z", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "400 R", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "AA-X", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Almera", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Alpha", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Altima", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Armada", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Avenir", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "AXY", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "AZ-1", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Bluebird", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "C 52", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Cedric", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Cefiro", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Chappo", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Cherry", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Cima", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Commercial", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "CQ-X", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Crew", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Cube", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "DS-2", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "E20", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "El Grand", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Fairlady", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Frontier", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Fusion", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Gloria", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Grand Livina", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "GT-R", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Hardbody", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "HyperMini", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Ideo", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Interstar", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Juke", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Lafesta", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Laurel", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Leaf", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Leopard", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Livina", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "M", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Maxima", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Micra", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Mid4", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "MM", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Moco", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Murano", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Murano CrossCabriolet", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Navara", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Note", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "NP300", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "NV", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "NV200", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Pathfinder", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Patrol", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Pickup", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Pintara", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Pixo", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Platina", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Prairie", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Presea", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "President", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Primera", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Pulsar", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Qashqai", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Quest", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "R 390 GT1", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "R 391", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Rasheen", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Rogue", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Santana", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Sedan", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Sentra", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Serena", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Silvia", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Skyline", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Sport", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Sports", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Stagea", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Stanza", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Sunny", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "SUT", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Terrano", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Terrano II", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Tiida", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Titan", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Trailrunner", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Vanette", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Versa", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Versa Note", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Violet", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "X-Trail", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Xterra", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "XVL", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Z", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Zaroot", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 98), 
            array(
                "MOD_MODEL" => "M10", 
                "MOD_MKE_ID" => 99), 
            array(
                "MOD_MODEL" => "M12", 
                "MOD_MKE_ID" => 99), 
            array(
                "MOD_MODEL" => "M14", 
                "MOD_MKE_ID" => 99), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 99), 
            array(
                "MOD_MODEL" => 1000, 
                "MOD_MKE_ID" => 100), 
            array(
                "MOD_MODEL" => "1000 C", 
                "MOD_MKE_ID" => 100), 
            array(
                "MOD_MODEL" => "1000 LS", 
                "MOD_MKE_ID" => 100), 
            array(
                "MOD_MODEL" => 1200, 
                "MOD_MKE_ID" => 100), 
            array(
                "MOD_MODEL" => "Autonova", 
                "MOD_MKE_ID" => 100), 
            array(
                "MOD_MODEL" => "Prinz", 
                "MOD_MKE_ID" => 100), 
            array(
                "MOD_MODEL" => "Prinz I", 
                "MOD_MKE_ID" => 100), 
            array(
                "MOD_MODEL" => "Prinz IV", 
                "MOD_MKE_ID" => 100), 
            array(
                "MOD_MODEL" => "Ro 80", 
                "MOD_MKE_ID" => 100), 
            array(
                "MOD_MODEL" => "Sport", 
                "MOD_MKE_ID" => 100), 
            array(
                "MOD_MODEL" => "Wankel Spider", 
                "MOD_MKE_ID" => 100), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 100), 
            array(
                "MOD_MODEL" => 442, 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "442 Indy Pace Car", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => 66, 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => 88, 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => 98, 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Achieva", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Aerotech", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Alero", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Anthem", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Aurora", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Bravada", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Custom Cruiser", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Cutlass", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Delta 88", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Eighty-Eight", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Incas", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Intrigue", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Jetfire", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "LSS", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Ninety-Eight", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "O4", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Omega", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Profile", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Recon", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Silhouette", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "SS", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Starfire", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Toronado", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Trofeo", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Vista Cruiser", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 101), 
            array(
                "MOD_MODEL" => "Admiral", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Agila", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Ampera", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Antara", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Ascona", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Astra", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Calibra", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Combo", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Commodore", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Concept M", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Corsa", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Diplomat", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Filo", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Frogster", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Frontera", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "GT", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Insignia", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Kadett", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Kapitan", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Kraftfahrzeug", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Lotus Omega", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "M", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Manta", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Meriva", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Monterey", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Monza", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Movano", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Olympia", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Omega", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "P 1200", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Record", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Rekord", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Senator", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Signum", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Speedster", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Tigra", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Trixx", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Vectra", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Vita", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Vivaro", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Zafira", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 102), 
            array(
                "MOD_MODEL" => 12, 
                "MOD_MKE_ID" => 103), 
            array(
                "MOD_MODEL" => "Carribean", 
                "MOD_MKE_ID" => 103), 
            array(
                "MOD_MODEL" => "Patrician", 
                "MOD_MKE_ID" => 103), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 103), 
            array(
                "MOD_MODEL" => "Huayra", 
                "MOD_MKE_ID" => 104), 
            array(
                "MOD_MODEL" => "Zonda", 
                "MOD_MKE_ID" => 104), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 104), 
            array(
                "MOD_MODEL" => "AIV", 
                "MOD_MKE_ID" => 105), 
            array(
                "MOD_MODEL" => "Esperante", 
                "MOD_MKE_ID" => 105), 
            array(
                "MOD_MODEL" => "Q9", 
                "MOD_MKE_ID" => 105), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 105), 
            array(
                "MOD_MODEL" => 1007, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 104, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 106, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 107, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 202, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 203, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 204, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 205, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 206, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 207, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 208, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 3008, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 304, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 305, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 306, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 307, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 308, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 309, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 4007, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 4008, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 403, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 404, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 405, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 406, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 407, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 408, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 5008, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 504, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "504D", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 505, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 508, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 604, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 605, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 607, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 806, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 807, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 907, 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "Boxer", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "Escapade", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "Expert", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "H2O", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "iOn", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "Kart Up", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "Nautilus", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "Oxia", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "Partner", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "Peugette", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "Promethee", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "Proxima", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "Quasar", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "RC", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "RCZ", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "Sesame", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "Touareg", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "Tulip", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "Type 202", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "Vroomster", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => 33, 
                "MOD_MKE_ID" => 107), 
            array(
                "MOD_MODEL" => "Argento", 
                "MOD_MKE_ID" => 107), 
            array(
                "MOD_MODEL" => "Birdcage", 
                "MOD_MKE_ID" => 107), 
            array(
                "MOD_MODEL" => "Coupe", 
                "MOD_MKE_ID" => 107), 
            array(
                "MOD_MODEL" => "Enjoy", 
                "MOD_MKE_ID" => 107), 
            array(
                "MOD_MODEL" => "Eta", 
                "MOD_MKE_ID" => 107), 
            array(
                "MOD_MODEL" => "Hit", 
                "MOD_MKE_ID" => 107), 
            array(
                "MOD_MODEL" => "Metrocubo", 
                "MOD_MKE_ID" => 107), 
            array(
                "MOD_MODEL" => "Rossa", 
                "MOD_MKE_ID" => 107), 
            array(
                "MOD_MODEL" => "Start", 
                "MOD_MKE_ID" => 107), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 107), 
            array(
                "MOD_MODEL" => "Acclaim", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Barracuda", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Belvedere", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Breeze", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Cambridge", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Caravelle", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Colt", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Fury", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Gran Fury", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "GTX", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Horizon", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Laser", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Neon", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Pronto Cruiser", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Pronto Spyder", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Prowler", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Reliant", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Road Runner", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Sundance", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Superbird", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Trail Duster", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Turismo", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Valiant", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "VIP", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Volare", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Voyager", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 108), 
            array(
                "MOD_MODEL" => 1000, 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => 6000, 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Aztek", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Banshee", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Bonneville", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Catalina", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Fiero", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Firebird", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Firehawk", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "G3", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "G5", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "G6", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "G8", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "GPX", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Grand Am", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Grand Prix", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Grand Safari", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Grande Parisienne", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "GTO", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Lemans", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Montana", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Phoenix", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Piranha", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Rageous", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Salsa", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Solstice", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Star Chief", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Stinger", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Sunbird", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Sunfire", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "SV 6", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Tempest", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Torrent", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Trans Am", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Trans Sport", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Ventura", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Ventura II", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Vibe", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 109), 
            array(
                "MOD_MODEL" => 1300, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 3400, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 356, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "550 A", 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 718, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 804, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 904, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 906, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 907, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 908, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 910, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 911, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 912, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 914, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 917, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "918 Spyder", 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 924, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 928, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 930, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 935, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 936, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 944, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 959, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 962, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 964, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 965, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 968, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 993, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 996, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "Boxster", 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "Boxter", 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "Carrera GT", 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "Cayenne", 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "Cayman", 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "DP", 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "GT2", 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "GT3", 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "Karisma", 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "Kremer 935 K3", 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "Macan", 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "Mega Cabriolet Biturbo", 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "Pan Americana", 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "Panamera", 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "RGT", 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "Tapiro", 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => 300, 
                "MOD_MKE_ID" => 111), 
            array(
                "MOD_MODEL" => 400, 
                "MOD_MKE_ID" => 111), 
            array(
                "MOD_MODEL" => "Arena", 
                "MOD_MKE_ID" => 111), 
            array(
                "MOD_MODEL" => "Gen", 
                "MOD_MKE_ID" => 111), 
            array(
                "MOD_MODEL" => "Gen-2", 
                "MOD_MKE_ID" => 111), 
            array(
                "MOD_MODEL" => "Impian", 
                "MOD_MKE_ID" => 111), 
            array(
                "MOD_MODEL" => "Juara", 
                "MOD_MKE_ID" => 111), 
            array(
                "MOD_MODEL" => "Perdana", 
                "MOD_MKE_ID" => 111), 
            array(
                "MOD_MODEL" => "Persona", 
                "MOD_MKE_ID" => 111), 
            array(
                "MOD_MODEL" => "Saloon", 
                "MOD_MKE_ID" => 111), 
            array(
                "MOD_MODEL" => "Satria", 
                "MOD_MKE_ID" => 111), 
            array(
                "MOD_MODEL" => "Savvy", 
                "MOD_MKE_ID" => 111), 
            array(
                "MOD_MODEL" => "Tiara", 
                "MOD_MKE_ID" => 111), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 111), 
            array(
                "MOD_MODEL" => "Bug", 
                "MOD_MKE_ID" => 112), 
            array(
                "MOD_MODEL" => "GTC", 
                "MOD_MKE_ID" => 112), 
            array(
                "MOD_MODEL" => "Kitten", 
                "MOD_MKE_ID" => 112), 
            array(
                "MOD_MODEL" => "Rebel", 
                "MOD_MKE_ID" => 112), 
            array(
                "MOD_MODEL" => "Regal", 
                "MOD_MKE_ID" => 112), 
            array(
                "MOD_MODEL" => "Sabre 4", 
                "MOD_MKE_ID" => 112), 
            array(
                "MOD_MODEL" => "Sabre Six", 
                "MOD_MKE_ID" => 112), 
            array(
                "MOD_MODEL" => "Scimitar", 
                "MOD_MKE_ID" => 112), 
            array(
                "MOD_MODEL" => "SE6", 
                "MOD_MKE_ID" => 112), 
            array(
                "MOD_MODEL" => "SE7", 
                "MOD_MKE_ID" => 112), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 112), 
            array(
                "MOD_MODEL" => 10, 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => 11, 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => 12, 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => 14, 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => 15, 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => 17, 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => 18, 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => 19, 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => 20, 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => 21, 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => 25, 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => 30, 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => 4, 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => 5, 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => 6, 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => 8, 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => 9, 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Alpine", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Argos", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Avantime", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Be Bop", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Caravelle", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Clio", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Colorale", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Dauphine", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Dauphine Gordini", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Duster", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Ellypse", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Espace", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Espider", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Etoile", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Express", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Fifties", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Floride", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Fluence", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Fregate", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Fuego", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Grand Espace", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Grand Scenic", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Helem", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Juva", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Kangoo", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Koleos", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Laguna", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Latitude", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Logan", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Ludo", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Megan", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Megane", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Modus", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "P55", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "R5", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Racoon", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "RE", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Rodeo", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "RS 11", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Safrane", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Sandero", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Scenic", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Scenic II", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Siete", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Spider", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Sport Spider", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Super 5", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Symbol", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Talisman", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Thalia", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Trafic", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Twingo", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Twizy", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "TXE", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Vel Satis", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Wind", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Zo", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Zoe", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Zoom", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => 1.5, 
                "MOD_MKE_ID" => 114), 
            array(
                "MOD_MODEL" => 2.6, 
                "MOD_MKE_ID" => 114), 
            array(
                "MOD_MODEL" => 4, 
                "MOD_MKE_ID" => 114), 
            array(
                "MOD_MODEL" => 24929, 
                "MOD_MKE_ID" => 114), 
            array(
                "MOD_MODEL" => "Elf", 
                "MOD_MKE_ID" => 114), 
            array(
                "MOD_MODEL" => "Kestrel", 
                "MOD_MKE_ID" => 114), 
            array(
                "MOD_MODEL" => "MR II", 
                "MOD_MKE_ID" => 114), 
            array(
                "MOD_MODEL" => "One-Point-Five", 
                "MOD_MKE_ID" => 114), 
            array(
                "MOD_MODEL" => "Pathfinder", 
                "MOD_MKE_ID" => 114), 
            array(
                "MOD_MODEL" => "RM A", 
                "MOD_MKE_ID" => 114), 
            array(
                "MOD_MODEL" => "Two Point Six", 
                "MOD_MKE_ID" => 114), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 114), 
            array(
                "MOD_MODEL" => 100, 
                "MOD_MKE_ID" => 115), 
            array(
                "MOD_MODEL" => "Camargue", 
                "MOD_MKE_ID" => 115), 
            array(
                "MOD_MODEL" => "Corniche", 
                "MOD_MKE_ID" => 115), 
            array(
                "MOD_MODEL" => "Ghost", 
                "MOD_MKE_ID" => 115), 
            array(
                "MOD_MODEL" => "Ghost Series II", 
                "MOD_MKE_ID" => 115), 
            array(
                "MOD_MODEL" => "Park Ward", 
                "MOD_MKE_ID" => 115), 
            array(
                "MOD_MODEL" => "Phantom", 
                "MOD_MKE_ID" => 115), 
            array(
                "MOD_MODEL" => "Phantom Drophead Coupe", 
                "MOD_MKE_ID" => 115), 
            array(
                "MOD_MODEL" => "Silver Cloud", 
                "MOD_MKE_ID" => 115), 
            array(
                "MOD_MODEL" => "Silver Cloud II", 
                "MOD_MKE_ID" => 115), 
            array(
                "MOD_MODEL" => "Silver Dawn", 
                "MOD_MKE_ID" => 115), 
            array(
                "MOD_MODEL" => "Silver Seraph", 
                "MOD_MKE_ID" => 115), 
            array(
                "MOD_MODEL" => "Silver Shadow", 
                "MOD_MKE_ID" => 115), 
            array(
                "MOD_MODEL" => "Silver Spirit", 
                "MOD_MKE_ID" => 115), 
            array(
                "MOD_MODEL" => "Silver Spirit II", 
                "MOD_MKE_ID" => 115), 
            array(
                "MOD_MODEL" => "Silver Spur", 
                "MOD_MKE_ID" => 115), 
            array(
                "MOD_MODEL" => "Silver Wraith", 
                "MOD_MKE_ID" => 115), 
            array(
                "MOD_MODEL" => "Wraith", 
                "MOD_MKE_ID" => 115), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 115), 
            array(
                "MOD_MODEL" => 100, 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "100 1.4 D", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => 200, 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => 2000, 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => 214, 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => 216, 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => 220, 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => 25, 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => 2600, 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => 3.5, 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "3.5 Litre", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => 3500, 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => 400, 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "414i", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "416i", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => 420, 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => 45, 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => 600, 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "620i", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => 75, 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => 800, 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => 820, 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => 825, 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "825i", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "City", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "Land Rover Discovery", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "Metro", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "MGF", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "Mini", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "Montego", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "P2", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "P4", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "P5", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "P5B", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "P6", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "Range Rover", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "Streetwise", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "Vitesse", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 116), 
            array(
                "MOD_MODEL" => 750, 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => "9-2x", 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => 42438, 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => "9-4X", 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => 42499, 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => "9-7X", 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => "9-X", 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => 90, 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => 900, 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => 9000, 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => "900i", 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => 92, 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => "92B", 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => 93, 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => 94, 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => 95, 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => 96, 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => 99, 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => "MC", 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => "Sonett", 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => "Sonett II", 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => "Sonett III", 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => "S7", 
                "MOD_MKE_ID" => 118), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 118), 
            array(
                "MOD_MODEL" => "SM", 
                "MOD_MKE_ID" => 119), 
            array(
                "MOD_MODEL" => "SM3", 
                "MOD_MKE_ID" => 119), 
            array(
                "MOD_MODEL" => "SM5", 
                "MOD_MKE_ID" => 119), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 119), 
            array(
                "MOD_MODEL" => "Astra", 
                "MOD_MKE_ID" => 120), 
            array(
                "MOD_MODEL" => "Aura", 
                "MOD_MKE_ID" => 120), 
            array(
                "MOD_MODEL" => "Curve", 
                "MOD_MKE_ID" => 120), 
            array(
                "MOD_MODEL" => "ION", 
                "MOD_MKE_ID" => 120), 
            array(
                "MOD_MODEL" => "L", 
                "MOD_MKE_ID" => 120), 
            array(
                "MOD_MODEL" => "LS", 
                "MOD_MKE_ID" => 120), 
            array(
                "MOD_MODEL" => "LW", 
                "MOD_MKE_ID" => 120), 
            array(
                "MOD_MODEL" => "Outlook", 
                "MOD_MKE_ID" => 120), 
            array(
                "MOD_MODEL" => "Relay", 
                "MOD_MKE_ID" => 120), 
            array(
                "MOD_MODEL" => "SC", 
                "MOD_MKE_ID" => 120), 
            array(
                "MOD_MODEL" => "Sedan", 
                "MOD_MKE_ID" => 120), 
            array(
                "MOD_MODEL" => "Sky", 
                "MOD_MKE_ID" => 120), 
            array(
                "MOD_MODEL" => "SL", 
                "MOD_MKE_ID" => 120), 
            array(
                "MOD_MODEL" => "Sports Coupe", 
                "MOD_MKE_ID" => 120), 
            array(
                "MOD_MODEL" => "Vue", 
                "MOD_MKE_ID" => 120), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 120), 
            array(
                "MOD_MODEL" => "FR-S", 
                "MOD_MKE_ID" => 121), 
            array(
                "MOD_MODEL" => "FR-S Convertible", 
                "MOD_MKE_ID" => 121), 
            array(
                "MOD_MODEL" => "iM", 
                "MOD_MKE_ID" => 121), 
            array(
                "MOD_MODEL" => "iQ", 
                "MOD_MKE_ID" => 121), 
            array(
                "MOD_MODEL" => "T2B", 
                "MOD_MKE_ID" => 121), 
            array(
                "MOD_MODEL" => "tC", 
                "MOD_MKE_ID" => 121), 
            array(
                "MOD_MODEL" => "xA", 
                "MOD_MKE_ID" => 121), 
            array(
                "MOD_MODEL" => "xB", 
                "MOD_MKE_ID" => 121), 
            array(
                "MOD_MODEL" => "xD", 
                "MOD_MKE_ID" => 121), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 121), 
            array(
                "MOD_MODEL" => 124, 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => 127, 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => 131, 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => 133, 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => 1400, 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => 1430, 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => 1500, 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => 600, 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => "Alhambra", 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => "Altea", 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => "Arosa", 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => "Bolero", 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => "Cordoba", 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => "Exeo", 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => "Formula", 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => "Ibiza", 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => "Inca Kombi", 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => "Leon", 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => "Malaga", 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => "Marbella", 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => "Ritmo", 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => "Ronda", 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => "Salsa", 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => "Tango", 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => "Toledo", 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 122), 
            array(
                "MOD_MODEL" => 1000, 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => 11, 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => 1100, 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => "1200S", 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => 1300, 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => 1301, 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => 1307, 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => 1308, 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => 1309, 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => 1500, 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => 1501, 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => "2 Litres", 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => 5, 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => 6, 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => 8, 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => "Ariane", 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => "Aronde", 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => "Horizon", 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => "Oceane", 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => "Plein Ceil", 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => "Type 11 Monoplace", 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => "Vedette", 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 123), 
            array(
                "MOD_MODEL" => "Gazelle", 
                "MOD_MKE_ID" => 124), 
            array(
                "MOD_MODEL" => "Hunter", 
                "MOD_MKE_ID" => 124), 
            array(
                "MOD_MODEL" => "SM 1500", 
                "MOD_MKE_ID" => 124), 
            array(
                "MOD_MODEL" => "Vogue II", 
                "MOD_MKE_ID" => 124), 
            array(
                "MOD_MODEL" => "Vogue III", 
                "MOD_MKE_ID" => 124), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 124), 
            array(
                "MOD_MODEL" => "1000 MB", 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => "110 L", 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => 1200, 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => 1202, 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => 440, 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => "Fabia", 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => "Favorit", 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => "Felicia", 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => "L", 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => "Montreux", 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => "Octavia", 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => "Polular 995", 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => "Popular", 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => "Praktik", 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => "Rapid R", 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => "Roomster", 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => "S 110 R", 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => "Superb", 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => "Yeti", 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 125), 
            array(
                "MOD_MODEL" => "Brabus", 
                "MOD_MKE_ID" => 126), 
            array(
                "MOD_MODEL" => "Cabrio Passion", 
                "MOD_MKE_ID" => 126), 
            array(
                "MOD_MODEL" => "Coupe", 
                "MOD_MKE_ID" => 126), 
            array(
                "MOD_MODEL" => "ForFour", 
                "MOD_MKE_ID" => 126), 
            array(
                "MOD_MODEL" => "Fortwo", 
                "MOD_MKE_ID" => 126), 
            array(
                "MOD_MODEL" => "Roadster", 
                "MOD_MKE_ID" => 126), 
            array(
                "MOD_MODEL" => "Ultimate 112", 
                "MOD_MKE_ID" => 126), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 126), 
            array(
                "MOD_MODEL" => "C8", 
                "MOD_MKE_ID" => 127), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 127), 
            array(
                "MOD_MODEL" => "Actyon", 
                "MOD_MKE_ID" => 128), 
            array(
                "MOD_MODEL" => "Chairman H", 
                "MOD_MKE_ID" => 128), 
            array(
                "MOD_MODEL" => "Chairman W", 
                "MOD_MKE_ID" => 128), 
            array(
                "MOD_MODEL" => "Korando", 
                "MOD_MKE_ID" => 128), 
            array(
                "MOD_MODEL" => "Kyron", 
                "MOD_MKE_ID" => 128), 
            array(
                "MOD_MODEL" => "Musso", 
                "MOD_MKE_ID" => 128), 
            array(
                "MOD_MODEL" => "Rexton", 
                "MOD_MKE_ID" => 128), 
            array(
                "MOD_MODEL" => "Rodius", 
                "MOD_MKE_ID" => 128), 
            array(
                "MOD_MODEL" => "Stavic", 
                "MOD_MKE_ID" => 128), 
            array(
                "MOD_MODEL" => "W Coupe", 
                "MOD_MKE_ID" => 128), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 128), 
            array(
                "MOD_MODEL" => "Aero", 
                "MOD_MKE_ID" => 129), 
            array(
                "MOD_MODEL" => "Tuatara", 
                "MOD_MKE_ID" => 129), 
            array(
                "MOD_MODEL" => "Ultimate Aero", 
                "MOD_MKE_ID" => 129), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 129), 
            array(
                "MOD_MODEL" => 126, 
                "MOD_MKE_ID" => 130), 
            array(
                "MOD_MODEL" => 2000, 
                "MOD_MKE_ID" => 130), 
            array(
                "MOD_MODEL" => 220, 
                "MOD_MKE_ID" => 130), 
            array(
                "MOD_MODEL" => 500, 
                "MOD_MKE_ID" => 130), 
            array(
                "MOD_MODEL" => "500D", 
                "MOD_MKE_ID" => 130), 
            array(
                "MOD_MODEL" => "650T", 
                "MOD_MKE_ID" => 130), 
            array(
                "MOD_MODEL" => "700C", 
                "MOD_MKE_ID" => 130), 
            array(
                "MOD_MODEL" => "G-series", 
                "MOD_MKE_ID" => 130), 
            array(
                "MOD_MODEL" => "Haflinger", 
                "MOD_MKE_ID" => 130), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 130), 
            array(
                "MOD_MODEL" => "Avanti", 
                "MOD_MKE_ID" => 131), 
            array(
                "MOD_MODEL" => "Champion", 
                "MOD_MKE_ID" => 131), 
            array(
                "MOD_MODEL" => "Commander", 
                "MOD_MKE_ID" => 131), 
            array(
                "MOD_MODEL" => "President State", 
                "MOD_MKE_ID" => 131), 
            array(
                "MOD_MODEL" => "Silver Hawk", 
                "MOD_MKE_ID" => 131), 
            array(
                "MOD_MODEL" => "Sky Hawk", 
                "MOD_MKE_ID" => 131), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 131), 
            array(
                "MOD_MODEL" => 1.8, 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => 1400, 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => 360, 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "Alfa", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "B", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "B9 Tribeca", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "Baja", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "BRZ", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "Coupe", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "DL", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "FF-1", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "Forester", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "G3X", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "HM-01", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "Impreza", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "Impreza WRX", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "Justy", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "K 111", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "Legacy", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "Leone", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "Mini Jumbo", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "Outback", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "Outback Sport", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "Pleo", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "R-2", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "R2", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "Rex", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "STX", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "SVX", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "Traviq", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "Tribeca", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "Vivio", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "WRX", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "WX 01", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "XT", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "XV", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "XV Crosstrek", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 132), 
            array(
                "MOD_MODEL" => 10, 
                "MOD_MKE_ID" => 133), 
            array(
                "MOD_MODEL" => "2 Litres", 
                "MOD_MKE_ID" => 133), 
            array(
                "MOD_MODEL" => "2-Litre", 
                "MOD_MKE_ID" => 133), 
            array(
                "MOD_MODEL" => "Alpine", 
                "MOD_MKE_ID" => 133), 
            array(
                "MOD_MODEL" => "Chamois", 
                "MOD_MKE_ID" => 133), 
            array(
                "MOD_MODEL" => "Imp", 
                "MOD_MKE_ID" => 133), 
            array(
                "MOD_MODEL" => "Rapier", 
                "MOD_MKE_ID" => 133), 
            array(
                "MOD_MODEL" => "Tiger", 
                "MOD_MKE_ID" => 133), 
            array(
                "MOD_MODEL" => "Venezia", 
                "MOD_MKE_ID" => 133), 
            array(
                "MOD_MODEL" => "Vogue", 
                "MOD_MKE_ID" => 133), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 133), 
            array(
                "MOD_MODEL" => "Aerio", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Alto", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Baleno", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "C2", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Cappuccino", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Cervo", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Covie", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Equator", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Escudo", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Esteem", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "EV Sport", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "F1", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Forenza", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Fronte", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Grand Vitara", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "GSX R4", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Ignis", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Jimny", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Kizashi", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Lapin", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Liana", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Light", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "LJ 20", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "LJ 50", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Reno", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Samurai", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "SC 100 GX", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Sea Forenza Wagon", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Sidekick", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "SJ 410", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "SJ 413", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Splash", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Swift", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "SX", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "SX4", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Twin", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Verona", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Vitara", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Wagon R+", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "X2", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "X90", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "XL6", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "XL7", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 134), 
            array(
                "MOD_MODEL" => 1510, 
                "MOD_MKE_ID" => 135), 
            array(
                "MOD_MODEL" => 2500, 
                "MOD_MKE_ID" => 135), 
            array(
                "MOD_MODEL" => "Baby", 
                "MOD_MKE_ID" => 135), 
            array(
                "MOD_MODEL" => "Horizon", 
                "MOD_MKE_ID" => 135), 
            array(
                "MOD_MODEL" => "Lago America", 
                "MOD_MKE_ID" => 135), 
            array(
                "MOD_MODEL" => "Samba", 
                "MOD_MKE_ID" => 135), 
            array(
                "MOD_MODEL" => "Saoutchik", 
                "MOD_MKE_ID" => 135), 
            array(
                "MOD_MODEL" => "Solara", 
                "MOD_MKE_ID" => 135), 
            array(
                "MOD_MODEL" => "Sport", 
                "MOD_MKE_ID" => 135), 
            array(
                "MOD_MODEL" => "Sunbeam-Lotus", 
                "MOD_MKE_ID" => 135), 
            array(
                "MOD_MODEL" => "T 26", 
                "MOD_MKE_ID" => 135), 
            array(
                "MOD_MODEL" => "Tagora", 
                "MOD_MKE_ID" => 135), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 135), 
            array(
                "MOD_MODEL" => "Aria", 
                "MOD_MKE_ID" => 136), 
            array(
                "MOD_MODEL" => "B-Line", 
                "MOD_MKE_ID" => 136), 
            array(
                "MOD_MODEL" => "E", 
                "MOD_MKE_ID" => 136), 
            array(
                "MOD_MODEL" => "E220", 
                "MOD_MKE_ID" => 136), 
            array(
                "MOD_MODEL" => "Estate", 
                "MOD_MKE_ID" => 136), 
            array(
                "MOD_MODEL" => "Indica", 
                "MOD_MKE_ID" => 136), 
            array(
                "MOD_MODEL" => "Indigo", 
                "MOD_MKE_ID" => 136), 
            array(
                "MOD_MODEL" => "Mint", 
                "MOD_MKE_ID" => 136), 
            array(
                "MOD_MODEL" => "Nano", 
                "MOD_MKE_ID" => 136), 
            array(
                "MOD_MODEL" => "Safari", 
                "MOD_MKE_ID" => 136), 
            array(
                "MOD_MODEL" => "Sumo", 
                "MOD_MKE_ID" => 136), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 136), 
            array(
                "MOD_MODEL" => "MTX", 
                "MOD_MKE_ID" => 137), 
            array(
                "MOD_MODEL" => "T107", 
                "MOD_MKE_ID" => 137), 
            array(
                "MOD_MODEL" => "T600", 
                "MOD_MKE_ID" => 137), 
            array(
                "MOD_MODEL" => "T603", 
                "MOD_MKE_ID" => 137), 
            array(
                "MOD_MODEL" => "T613", 
                "MOD_MKE_ID" => 137), 
            array(
                "MOD_MODEL" => "T700", 
                "MOD_MKE_ID" => 137), 
            array(
                "MOD_MODEL" => "T87", 
                "MOD_MKE_ID" => 137), 
            array(
                "MOD_MODEL" => "Tatraplan", 
                "MOD_MKE_ID" => 137), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 137), 
            array(
                "MOD_MODEL" => "Model X", 
                "MOD_MKE_ID" => 138), 
            array(
                "MOD_MODEL" => "Roadster", 
                "MOD_MKE_ID" => 138), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 138), 
            array(
                "MOD_MODEL" => 1000, 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => 105, 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "2000GT", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "4Runner", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "AA", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Allion", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Altezza", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Aristo", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Ateva", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Auris", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Avalon", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Avalon Hybrid", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Avanza", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Avensis", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Aygo", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Bandeirante", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "BB", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Blizzard", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Brevis", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Caldina", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Camry", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Camry Hybrid", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Carina", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Caserta", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Celica", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Celsior", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Century", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Chaser", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Coaster", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Condor", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Conquest", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Corolla", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Corona", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Corsa", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Cressida", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Cresta", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Crown", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Dyna", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Echo", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "ES 3", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "F-1", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "FCHV 5", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "FCV", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "FJ Cruiser", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Fortuner", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "FXS", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "GT1", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Hi-Ace", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Highlander", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Highlander Hybrid", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Hilux", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "HMV", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Ipsum", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "iQ", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Land Cruiser", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Lexcen", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Lite Ace", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Mark II", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Master RR", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Matrix", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Mega Cruiser", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Model F", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "MR-S", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "MR2", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "MRJ", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Opa", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Paseo", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Picnic", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Pod", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Previa", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Prius", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Prius C", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Prius Plug-in", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Prius V", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Prius +", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Progress NC 300", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Publica", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Quantum", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Ractis", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "RAV4", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "RAV4 EV", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Retro Cruiser", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "RSC", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "RunX", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "SA", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Sequoia", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Sera", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Sienna", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Soarer", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Solara", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Sparky", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Sport 800", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Sprinter", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Stallion", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Starlet", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Super", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Supra", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Tacoma", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Tazz", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Tercel", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Tundra", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Venture", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Venza", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Verossa", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Vitz", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Will", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Windom", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "XYR", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Yaris", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "P 50", 
                "MOD_MKE_ID" => 140), 
            array(
                "MOD_MODEL" => "P 601", 
                "MOD_MKE_ID" => 140), 
            array(
                "MOD_MODEL" => "P 70", 
                "MOD_MKE_ID" => 140), 
            array(
                "MOD_MODEL" => "Universal", 
                "MOD_MKE_ID" => 140), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 140), 
            array(
                "MOD_MODEL" => "10 Break", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => 1300, 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => 1500, 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => 1800, 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => 2.5, 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => 2000, 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "Acclaim", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "Dolomite", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "Dove GTR4", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "GT6", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "Herald", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "Mayflower", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "Renown", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "Roadster", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "Spitfire", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "Stag", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "Toledo", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "TR2", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "TR3", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "TR4", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "TR5", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "TR6", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "TR7", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "TR8", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "Vitesse", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 141), 
            array(
                "MOD_MODEL" => 1600, 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => 2500, 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => 3000, 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "350i", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => 390, 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => 400, 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => 420, 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => 7, 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "Cerbera", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "Cerbera Speed 12", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "Chimaera", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "Grantura", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "Griffith", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "M", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "S", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "S2", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "Sagaris", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "SE", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "Speed 12", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "Speed Eight", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "T 350", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "T 440 R", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "Taimar", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "Tamora", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "Tasmin", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "Trident", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "Tuscan", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "Tuscan Speed Six", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "Type S", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "V8 S", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "Vixen", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 142), 
            array(
                "MOD_MODEL" => "Agila", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Astra", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Belmont", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Calibra", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Carlton", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Cavalier", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Chevette", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Corsa", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Cresta", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Firenza", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Frontera", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Insignia", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Magnum", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Maxx", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Meriva", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Monaro", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Nova", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Omega", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Royale", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Signum", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Sintra", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Tigra", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Vectra", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Velox", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Ventora", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Victor", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Viscount", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Viva", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "VX Lightning", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "VX220", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "VX4", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Wyvern", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Zafira", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "M12", 
                "MOD_MKE_ID" => 144), 
            array(
                "MOD_MODEL" => "RD 180", 
                "MOD_MKE_ID" => 144), 
            array(
                "MOD_MODEL" => "Wiegert", 
                "MOD_MKE_ID" => 144), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 144), 
            array(
                "MOD_MODEL" => 400, 
                "MOD_MKE_ID" => 145), 
            array(
                "MOD_MODEL" => "Atlantique", 
                "MOD_MKE_ID" => 145), 
            array(
                "MOD_MODEL" => "Cabriolet", 
                "MOD_MKE_ID" => 145), 
            array(
                "MOD_MODEL" => "Coupe", 
                "MOD_MKE_ID" => 145), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 145), 
            array(
                "MOD_MODEL" => "1 Litre", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => 1302, 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => 1303, 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => 1500, 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => 1600, 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => 181, 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => 411, 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "AAC", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Alltrack", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Beetle", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Beetle Convertible", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Bora", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Cabriolet", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Caddy", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Caravelle", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "CC", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Citi", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Commercial", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Concept C", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Concept T", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Corrado", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Derby", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "e-Golf", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Eos", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Eurovan", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Fox", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Fusca", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "GLI", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Gol", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Golf", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Golf GTI", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Golf R", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Golf SportWagen", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "GTD", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "GTI", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Hac", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Iltis", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Jetta", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Jetta GLI", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Jetta Hybrid", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Jetta SportWagen", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "K 70", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Karmann-Ghia", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Kombi", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "LT 35 HR Panel Van", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Lupo", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Magellan", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Microbus", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Multivan", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "New Beetle", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Parati", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Passat", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Phaeton", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Pickup", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Polo", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Quantum", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Rabbit", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Routan", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Santana", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Schwimmwagen", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Scirocco", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Sedan", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Sharan", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "SP", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "SP2", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "T5", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Tiguan", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Touareg", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Touran", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Transporter", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Type 3 Squareback", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "up", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Vento", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "W12", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => 120, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 122, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 140, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 144, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 145, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 164, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 1800, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 220, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 240, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 242, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 244, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 245, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 260, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 264, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 265, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 343, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 360, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 440, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 460, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 480, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 66, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 740, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 760, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 780, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 850, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 940, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => 960, 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "C30", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "C70", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "Duett", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "Hatric", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "P 1800", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "P 1900", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "P 210 Duett", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "PV", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "PV 544 1.8", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "PV 60", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "PV 801-10", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "S40", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "S60", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "S70", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "S80", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "S90", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "SCC", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "V40", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "V50", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "V60", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "V60 Cross Country", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "V70", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "V90", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "X670", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "XC60", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "XC70", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "XC90", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "YCC", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 147), 
            array(
                "MOD_MODEL" => "1.3 l Tourist", 
                "MOD_MKE_ID" => 148), 
            array(
                "MOD_MODEL" => 311, 
                "MOD_MKE_ID" => 148), 
            array(
                "MOD_MODEL" => 312, 
                "MOD_MKE_ID" => 148), 
            array(
                "MOD_MODEL" => 353, 
                "MOD_MKE_ID" => 148), 
            array(
                "MOD_MODEL" => "Sports Convertible", 
                "MOD_MKE_ID" => 148), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 148), 
            array(
                "MOD_MODEL" => "XTR 2", 
                "MOD_MKE_ID" => 149), 
            array(
                "MOD_MODEL" => "ZEI", 
                "MOD_MKE_ID" => 149), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 149), 
            array(
                "MOD_MODEL" => "Aero", 
                "MOD_MKE_ID" => 150), 
            array(
                "MOD_MODEL" => "Aero-Willys 2600", 
                "MOD_MKE_ID" => 150), 
            array(
                "MOD_MODEL" => "Dauphine", 
                "MOD_MKE_ID" => 150), 
            array(
                "MOD_MODEL" => "Interlagos", 
                "MOD_MKE_ID" => 150), 
            array(
                "MOD_MODEL" => "Jeep", 
                "MOD_MKE_ID" => 150), 
            array(
                "MOD_MODEL" => "Rural", 
                "MOD_MKE_ID" => 150), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 150), 
            array(
                "MOD_MODEL" => 6, 
                "MOD_MKE_ID" => 151), 
            array(
                "MOD_MODEL" => 9, 
                "MOD_MKE_ID" => 151), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 151), 
            array(
                "MOD_MODEL" => "Bravo", 
                "MOD_MKE_ID" => 152), 
            array(
                "MOD_MODEL" => "Ferrari 3Z", 
                "MOD_MKE_ID" => 152), 
            array(
                "MOD_MODEL" => "Hyena", 
                "MOD_MKE_ID" => 152), 
            array(
                "MOD_MODEL" => "Raptor", 
                "MOD_MKE_ID" => 152), 
            array(
                "MOD_MODEL" => "Zeta", 
                "MOD_MKE_ID" => 152), 
            array(
                "MOD_MODEL" => "Zuma", 
                "MOD_MKE_ID" => 152), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 152), 
            array(
                "MOD_MODEL" => 102, 
                "MOD_MKE_ID" => 153), 
            array(
                "MOD_MODEL" => 103, 
                "MOD_MKE_ID" => 153), 
            array(
                "MOD_MODEL" => 1300, 
                "MOD_MKE_ID" => 153), 
            array(
                "MOD_MODEL" => 132, 
                "MOD_MKE_ID" => 153), 
            array(
                "MOD_MODEL" => 1500, 
                "MOD_MKE_ID" => 153), 
            array(
                "MOD_MODEL" => 2101, 
                "MOD_MKE_ID" => 153), 
            array(
                "MOD_MODEL" => 65, 
                "MOD_MKE_ID" => 153), 
            array(
                "MOD_MODEL" => 750, 
                "MOD_MKE_ID" => 153), 
            array(
                "MOD_MODEL" => "850 K", 
                "MOD_MKE_ID" => 153), 
            array(
                "MOD_MODEL" => "Yugo", 
                "MOD_MKE_ID" => 153), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 153), 
            array(
                "MOD_MODEL" => 966, 
                "MOD_MKE_ID" => 154), 
            array(
                "MOD_MODEL" => "Jalta", 
                "MOD_MKE_ID" => 154), 
            array(
                "MOD_MODEL" => "Slavuta", 
                "MOD_MKE_ID" => 154), 
            array(
                "MOD_MODEL" => "Tavrija", 
                "MOD_MKE_ID" => 154), 
            array(
                "MOD_MODEL" => "Wagon", 
                "MOD_MKE_ID" => 154), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 154), 
            array(
                "MOD_MODEL" => "ST1", 
                "MOD_MKE_ID" => 155), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 155), 
            array(
                "MOD_MODEL" => 114, 
                "MOD_MKE_ID" => 156), 
            array(
                "MOD_MODEL" => 117, 
                "MOD_MKE_ID" => 156), 
            array(
                "MOD_MODEL" => 4104, 
                "MOD_MKE_ID" => 156), 
            array(
                "MOD_MODEL" => "Other", 
                "MOD_MKE_ID" => 156), 
            array(
                "MOD_MODEL" => "Passat CC", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "Golf Plus", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Amarok", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "Crafter", 
                "MOD_MKE_ID" => 146), 
            array(
                "MOD_MODEL" => "A-Class", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "190 Series", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "B-Class", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "C200", 
                "MOD_MKE_ID" => 89), 
            array(
                "MOD_MODEL" => "307 CC", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "407 SW", 
                "MOD_MKE_ID" => 106), 
            array(
                "MOD_MODEL" => "Corolla Verso", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Yaris Verso", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Verso", 
                "MOD_MKE_ID" => 139), 
            array(
                "MOD_MODEL" => "Xsara Picasso", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "C4 Grand Picasso", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "DS5", 
                "MOD_MKE_ID" => 35), 
            array(
                "MOD_MODEL" => "9-3 Cabriolet/Coupe", 
                "MOD_MKE_ID" => 117), 
            array(
                "MOD_MODEL" => "Focus C-Max", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Grand C-Max", 
                "MOD_MKE_ID" => 51), 
            array(
                "MOD_MODEL" => "Ioniq Hybrid", 
                "MOD_MKE_ID" => 61), 
            array(
                "MOD_MODEL" => "RX 400h", 
                "MOD_MKE_ID" => 75), 
            array(
                "MOD_MODEL" => "Hatch", 
                "MOD_MKE_ID" => 92), 
            array(
                "MOD_MODEL" => 997, 
                "MOD_MKE_ID" => 110), 
            array(
                "MOD_MODEL" => "Captur", 
                "MOD_MKE_ID" => 113), 
            array(
                "MOD_MODEL" => "City Coupe", 
                "MOD_MKE_ID" => 126), 
            array(
                "MOD_MODEL" => "i3", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "i3s", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "i8", 
                "MOD_MKE_ID" => 25), 
            array(
                "MOD_MODEL" => "Combo", 
                "MOD_MKE_ID" => 143), 
            array(
                "MOD_MODEL" => "TX", 
                "MOD_MKE_ID" => 157), 
            array(
                "MOD_MODEL" => "Arteon", 
                "MOD_MKE_ID" => 146)
        );
        foreach ($arr as $key => $role) {

            $role = CarModel::create(['name' => $role['MOD_MODEL'],'parent_id'=>$role['MOD_MKE_ID']]);
        }
    }
}

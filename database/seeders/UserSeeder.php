<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Admin",
            'vender_id' => '0939295e-00a1-70de-3b38-4c004b6e4344',
            "email" => "admin@iadsr.edu.pk",
            "password" =>Hash::make('iadsr@12345')
        ]);
        User::create([
            "name" => "assistant",
            'vender_id' => '49e9397e-f061-7062-2519-9563b5bac3e2',
            "email" => "assistant@iadsr.edu.pk",
            "password" =>Hash::make('iadsr@12345')
        ]);
        User::create([
            "name" => "developer",
            'vender_id' => 'c909999e-5021-707b-599d-63fcbe8c682d',
            "email" => "developer@iadsr.edu.pk",
            "password" =>Hash::make('iadsr@12345')
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TownsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("towns")->insert([
            [
                "town_name" => "Barcelona",
            ],
            [
                "town_name" => "Barberà del Vallès",
            ],
            [
                "town_name" => "Badalona",
            ],
        ]);
    }
}

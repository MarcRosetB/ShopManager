<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ColoursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("colours")->insert([
            [
                "colour_name" => "negro",
            ],
            [
                "colour_name" => "blanco",
            ],
            [
                "colour_name" => "rojo",
            ],
            [
                "colour_name" => "verde",
            ],
        ]);
    }
}

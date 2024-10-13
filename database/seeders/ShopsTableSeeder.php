<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("shops")->insert([
            [
                "shop_name" => "Ondina",
                "shop_address" => "Ctra Barcelona, 40",
                "fk_town" => 2,
            ],
            [
                "shop_name" => "Badalona",
                "shop_address" => "Avda. Comunitat Europea, 7",
                "fk_town" => 3,
            ],
        ]);
    }
}

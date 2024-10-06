<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ItemPriceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("items_price")->insert([
            [
                "FkItem" => 2,
                "FkColour" => 2,
                "ItemPrice" => 240,
            ],
            [
                "FkItem" => 1,
                "FkColour" => 3,
                "FkItemPrice" => 350,
            ],
            [
                "FkItem" => 2,
                "FkColour" => 3,
                "FkItemPrice" => 280,
            ],
        ]);
    }
}

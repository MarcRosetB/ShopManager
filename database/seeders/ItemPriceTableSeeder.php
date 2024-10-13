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
                "fk_item" => 2,
                "fk_colour" => 2,
                "item_price" => 240,
            ],
            [
                "fk_item" => 1,
                "fk_colour" => 3,
                "item_price" => 350,
            ],
            [
                "fk_item" => 2,
                "fk_colour" => 3,
                "item_price" => 280,
            ],
        ]);
    }
}

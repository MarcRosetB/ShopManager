<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("items")->insert([
            [
                "item_name" => "Kubika",
                "item_sice" => "140x80",
                "fk_item_type" => 2,
            ],
            [
                "item_name" => "Kendo",
                "fk_item_type" => 1,
            ],
        ]);
    }
}

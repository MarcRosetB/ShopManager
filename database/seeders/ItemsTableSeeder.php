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
            ],
            [
                "item_name" => "Kendo",
            ],
        ]);
    }
}

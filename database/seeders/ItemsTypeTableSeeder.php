<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ItemsTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("items_type")->insert([
            [
                "item_type_name" => "Silla",
            ],
            [
                "item_type_name" => "Mesa",
            ],
        ]);
    }
}

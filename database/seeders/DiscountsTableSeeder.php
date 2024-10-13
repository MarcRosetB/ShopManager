<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DiscountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("discounts")->insert([
            [
                "discount_rate" => 5,
            ],
            [
                "discount_rate" => 10,
            ],
            [
                "discount_rate" => 12,
            ],
        ]);
    }
}

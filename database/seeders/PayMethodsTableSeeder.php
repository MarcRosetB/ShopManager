<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PayMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("pay_methods")->insert([
            [
                "pay_method_name" => "transferencia",
            ],
            [
                "pay_method_name" => "Visa",
            ],
        ]);
    }
}

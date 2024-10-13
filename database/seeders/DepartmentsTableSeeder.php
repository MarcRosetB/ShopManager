<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("departments")->insert([
            [
                "department_name" => "ventas",
            ],
            [
                "department_name" => "contabilidad",
            ],
        ]);
    }
}

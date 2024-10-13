<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            ColoursTableSeeder::class,
            DepartmentsTableSeeder::class,
            DiscountsTableSeeder::class,
            ItemTypesTableSeeder::class,
            ItemsTableSeeder::class,
            ItemPriceTableSeeder::class,
            PayMethodsTableSeeder::class,
            TownsTableSeeder::class,
            ShopsTableSeeder::class,
        ]);
    }
}

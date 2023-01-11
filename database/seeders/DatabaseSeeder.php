<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProductCategoriesSeeder::class,
            UseTypesSeeder::class,
            ShopsSeeder::class,
            QuantitiesSeeder::class,
            ProductsSeeder::class,
            PurchasesSeeder::class,
        ]);
    }
}

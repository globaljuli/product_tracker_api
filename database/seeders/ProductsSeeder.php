<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
                [
                    'id' => 1,
                    'name' => 'Nidias - Xampú Sòlid',
                    'description' => 'Anticaspa',
                    'image_path' => null,
                    "quantity_id" => 1,
                    'product_category_id' => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ],
                [
                    'id' => 2,
                    'name' => 'The Singular Olivia - Xampú Sòlid',
                    'description' => '"Champú Sólido Impecable"',
                    'image_path' => null,
                    'product_category_id' => 1,
                    "quantity_id" => 1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]
            ]
        );
    }
}

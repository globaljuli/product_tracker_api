<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuantitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quantities')->insert([
                [
                    'id' => 1,
                    'quantity' => '70',
                    'unit' => 'grams',
                ],
                [
                    'id' => 2,
                    'quantity' => '80',
                    'unit' => 'grams',
                ],
            ]
        );
    }
}

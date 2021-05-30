<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'restaurant_id' => 1,
            'Item' => 'pizza',
            'Category' => 'fastFood',
        ]);

        DB::table('menus')->insert([
            'restaurant_id' => 2,
            'Item' => 'burger',
            'Category' => 'fastFood',
        ]);
    }
}

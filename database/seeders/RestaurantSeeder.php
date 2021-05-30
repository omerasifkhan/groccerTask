<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurants')->insert([
            'name' => 'pizza',
            'Joined' => '2021-05-21 01:50:18',
        ]);

        DB::table('restaurants')->insert([
            'name' => 'burger',
            'Joined' => '2021-04-21 01:50:18',
        ]);
    }
}

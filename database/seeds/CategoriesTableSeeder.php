<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	['name' => 'Mobile Phones','code' => 'mobiles', 'description' => ''],
        	['name' => 'Appliances','code' => 'appliances', 'description' => ''],
        	['name' => 'Portable Technic','code' => 'portables', 'description' => ''],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class TopcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('topcategories')->insert(['name' => 'テクノロジ']);
        DB::table('topcategories')->insert(['name' => 'マネジメント']);
        DB::table('topcategories')->insert(['name' => 'ストラテジ']);
    }
}

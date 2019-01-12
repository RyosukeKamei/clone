<?php

use Illuminate\Database\Seeder;

class RoundsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rounds')->insert(['name' => '平成21年度春']);
        DB::table('rounds')->insert(['name' => '平成21年度秋']);
        DB::table('rounds')->insert(['name' => '平成22年度春']);
        DB::table('rounds')->insert(['name' => '平成22年度秋']);
        DB::table('rounds')->insert(['name' => '平成23年度特別']);
        DB::table('rounds')->insert(['name' => '平成23年度秋']);
        DB::table('rounds')->insert(['name' => '平成24年度春']);
        DB::table('rounds')->insert(['name' => '平成24年度秋']);
        DB::table('rounds')->insert(['name' => '平成25年度春']);
        DB::table('rounds')->insert(['name' => '平成25年度秋']);
        DB::table('rounds')->insert(['name' => '平成26年度春']);
        DB::table('rounds')->insert(['name' => '平成26年度秋']);
        DB::table('rounds')->insert(['name' => '平成27年度春']);
        DB::table('rounds')->insert(['name' => '平成27年度秋']);
        DB::table('rounds')->insert(['name' => '平成28年度春']);
        DB::table('rounds')->insert(['name' => '平成28年度秋']);
        DB::table('rounds')->insert(['name' => '平成29年度春']);
        DB::table('rounds')->insert(['name' => '平成29年度秋']);
        DB::table('rounds')->insert(['name' => '平成30年度春']);
        DB::table('rounds')->insert(['name' => '平成30年度秋']);      
    }
}

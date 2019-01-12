<?php

use Illuminate\Database\Seeder;

class DivitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divitions')->insert(['name' => 'キーワード']);
        DB::table('divitions')->insert(['name' => '計算・読解']);
    }
}

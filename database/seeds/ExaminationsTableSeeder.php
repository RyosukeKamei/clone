<?php

use Illuminate\Database\Seeder;

class ExaminationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('examinations')->insert(['name' => 'ITパスポート試験', 'question_number' => 100]);
        DB::table('examinations')->insert(['name' => '情報セキュリティマネジメント試験', 'question_number' => 50]);
        DB::table('examinations')->insert(['name' => '基本情報技術者試験', 'question_number' => 80]);
        DB::table('examinations')->insert(['name' => '応用情報技術者試験', 'question_number' => 80]);
    }
}

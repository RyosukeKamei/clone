<?php

use Illuminate\Database\Seeder;

class ThirdcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('thirdcategories')->insert(['name' => '基礎理論', 'topcategory_id' => 1]);
    	DB::table('thirdcategories')->insert(['name' => 'コンピュータシステム', 'topcategory_id' => 1]);
    	DB::table('thirdcategories')->insert(['name' => '技術要素', 'topcategory_id' => 1]);
    	DB::table('thirdcategories')->insert(['name' => '開発技術', 'topcategory_id' => 1]);
    	DB::table('thirdcategories')->insert(['name' => 'プロジェクトマネジメント', 'topcategory_id' => 2]);
    	DB::table('thirdcategories')->insert(['name' => 'サービスマネジメント', 'topcategory_id' => 2]);
    	DB::table('thirdcategories')->insert(['name' => 'システム戦略', 'topcategory_id' => 3]);
    	DB::table('thirdcategories')->insert(['name' => '経営戦略', 'topcategory_id' => 3]);
    	DB::table('thirdcategories')->insert(['name' => '企業と法務', 'topcategory_id' => 3]);
    }
}

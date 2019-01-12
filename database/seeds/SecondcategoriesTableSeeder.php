<?php

use Illuminate\Database\Seeder;

class SecondcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('secondcategories')->insert(['name' => '基礎理論', 'thirdcategory_id' => 1]);
        DB::table('secondcategories')->insert(['name' => 'アルゴリズムとプログラミング', 'thirdcategory_id' => 1]);
        DB::table('secondcategories')->insert(['name' => 'コンピュータ構成要素', 'thirdcategory_id' => 2]);
        DB::table('secondcategories')->insert(['name' => 'システム構成要素', 'thirdcategory_id' => 2]);
        DB::table('secondcategories')->insert(['name' => 'ソフトウェア', 'thirdcategory_id' => 2]);
        DB::table('secondcategories')->insert(['name' => 'ハードウェア', 'thirdcategory_id' => 2]);
        DB::table('secondcategories')->insert(['name' => 'ヒューマンインタフェース', 'thirdcategory_id' => 3]);
        DB::table('secondcategories')->insert(['name' => 'マルチメディア', 'thirdcategory_id' => 3]);
        DB::table('secondcategories')->insert(['name' => 'データベース', 'thirdcategory_id' => 3]);
        DB::table('secondcategories')->insert(['name' => 'ネットワーク', 'thirdcategory_id' => 3]);
        DB::table('secondcategories')->insert(['name' => 'セキュリティ', 'thirdcategory_id' => 3]);
        DB::table('secondcategories')->insert(['name' => 'システム開発技術', 'thirdcategory_id' => 4]);
        DB::table('secondcategories')->insert(['name' => 'ソフトウェア開発管理技術', 'thirdcategory_id' => 4]);
        DB::table('secondcategories')->insert(['name' => 'プロジェクトマネジメント', 'thirdcategory_id' => 5]);
        DB::table('secondcategories')->insert(['name' => 'サービスマネジメント', 'thirdcategory_id' => 6]);
        DB::table('secondcategories')->insert(['name' => 'システム監査', 'thirdcategory_id' => 6]);
        DB::table('secondcategories')->insert(['name' => 'システム戦略', 'thirdcategory_id' => 7]);
        DB::table('secondcategories')->insert(['name' => 'システム企画', 'thirdcategory_id' => 7]);
        DB::table('secondcategories')->insert(['name' => '経営戦略マネジメント', 'thirdcategory_id' => 8]);
        DB::table('secondcategories')->insert(['name' => '技術戦略マネジメント', 'thirdcategory_id' => 8]);
        DB::table('secondcategories')->insert(['name' => 'ビジネスインダストリ', 'thirdcategory_id' => 8]);
        DB::table('secondcategories')->insert(['name' => '企業活動', 'thirdcategory_id' => 9]);
        DB::table('secondcategories')->insert(['name' => '法務', 'thirdcategory_id' => 9]);
    }
}

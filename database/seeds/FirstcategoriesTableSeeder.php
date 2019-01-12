<?php

use Illuminate\Database\Seeder;

class FirstcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('firstcategories')->insert(['name' => '離散数学', 'secondcategory_id' => 1]);
        DB::table('firstcategories')->insert(['name' => '応用数学', 'secondcategory_id' => 1]);
        DB::table('firstcategories')->insert(['name' => '情報に関する理論', 'secondcategory_id' => 1]);
        DB::table('firstcategories')->insert(['name' => '通信に関する理論', 'secondcategory_id' => 1]);
        DB::table('firstcategories')->insert(['name' => '計測・制御に関する理論', 'secondcategory_id' => 1]);
        DB::table('firstcategories')->insert(['name' => 'データ構造', 'secondcategory_id' => 2]);
        DB::table('firstcategories')->insert(['name' => 'アルゴリズム', 'secondcategory_id' => 2]);
        DB::table('firstcategories')->insert(['name' => 'プログラミング', 'secondcategory_id' => 2]);
        DB::table('firstcategories')->insert(['name' => 'プログラム言語', 'secondcategory_id' => 2]);
        DB::table('firstcategories')->insert(['name' => 'その他の言語', 'secondcategory_id' => 2]);
        DB::table('firstcategories')->insert(['name' => 'プロセッサ', 'secondcategory_id' => 3]);
        DB::table('firstcategories')->insert(['name' => 'メモリ', 'secondcategory_id' => 3]);
        DB::table('firstcategories')->insert(['name' => 'バス', 'secondcategory_id' => 3]);
        DB::table('firstcategories')->insert(['name' => '入出力デバイス', 'secondcategory_id' => 3]);
        DB::table('firstcategories')->insert(['name' => '入出力装置', 'secondcategory_id' => 3]);
        DB::table('firstcategories')->insert(['name' => 'システムの構成', 'secondcategory_id' => 4]);
        DB::table('firstcategories')->insert(['name' => 'システムの評価指標', 'secondcategory_id' => 4]);
        DB::table('firstcategories')->insert(['name' => 'オペレーティングシステム', 'secondcategory_id' => 5]);
        DB::table('firstcategories')->insert(['name' => 'ミドルウェア', 'secondcategory_id' => 5]);
        DB::table('firstcategories')->insert(['name' => 'ファイルシステム', 'secondcategory_id' => 5]);
        DB::table('firstcategories')->insert(['name' => '開発ツール', 'secondcategory_id' => 5]);
        DB::table('firstcategories')->insert(['name' => 'オープンソースソフトウェア', 'secondcategory_id' => 5]);
        DB::table('firstcategories')->insert(['name' => 'ハードウェア', 'secondcategory_id' => 6]);
        DB::table('firstcategories')->insert(['name' => 'ヒューマンインタフェース技術', 'secondcategory_id' => 7]);
        DB::table('firstcategories')->insert(['name' => 'インタフェース設計', 'secondcategory_id' => 7]);
        DB::table('firstcategories')->insert(['name' => 'マルチメディア技術', 'secondcategory_id' => 8]);
        DB::table('firstcategories')->insert(['name' => 'マルチメディア応用', 'secondcategory_id' => 8]);
        DB::table('firstcategories')->insert(['name' => 'データベース方式', 'secondcategory_id' => 9]);
        DB::table('firstcategories')->insert(['name' => 'データベース設計', 'secondcategory_id' => 9]);
        DB::table('firstcategories')->insert(['name' => 'データ操作', 'secondcategory_id' => 9]);
        DB::table('firstcategories')->insert(['name' => 'トランザクション処理', 'secondcategory_id' => 9]);
        DB::table('firstcategories')->insert(['name' => 'データベース応用', 'secondcategory_id' => 9]);
        DB::table('firstcategories')->insert(['name' => 'ネットワーク方式', 'secondcategory_id' => 10]);
        DB::table('firstcategories')->insert(['name' => 'データ通信と制御', 'secondcategory_id' => 10]);
        DB::table('firstcategories')->insert(['name' => '通信プロトコル', 'secondcategory_id' => 10]);
        DB::table('firstcategories')->insert(['name' => 'ネットワーク管理', 'secondcategory_id' => 10]);
        DB::table('firstcategories')->insert(['name' => 'ネットワーク応用', 'secondcategory_id' => 10]);
        DB::table('firstcategories')->insert(['name' => '情報セキュリティ', 'secondcategory_id' => 11]);
        DB::table('firstcategories')->insert(['name' => '情報セキュリティ管理', 'secondcategory_id' => 11]);
        DB::table('firstcategories')->insert(['name' => 'セキュリティ技術評価', 'secondcategory_id' => 11]);
        DB::table('firstcategories')->insert(['name' => '情報セキュリティ対策', 'secondcategory_id' => 11]);
        DB::table('firstcategories')->insert(['name' => 'セキュリティ実装技術', 'secondcategory_id' => 11]);
        DB::table('firstcategories')->insert(['name' => 'システム要件定義', 'secondcategory_id' => 12]);
        DB::table('firstcategories')->insert(['name' => 'システム方式設計', 'secondcategory_id' => 12]);
        DB::table('firstcategories')->insert(['name' => 'ソフトウェア要件定義', 'secondcategory_id' => 12]);
        DB::table('firstcategories')->insert(['name' => 'ソフトウェア方式設計・ソフトウェア詳細設計', 'secondcategory_id' => 12]);
        DB::table('firstcategories')->insert(['name' => 'ソフトウェア構築', 'secondcategory_id' => 12]);
        DB::table('firstcategories')->insert(['name' => 'ソフトウェア結合・ソフトウェア適格性確認テスト', 'secondcategory_id' => 12]);
        DB::table('firstcategories')->insert(['name' => 'システム結合・システム適格性確認テスト', 'secondcategory_id' => 12]);
        DB::table('firstcategories')->insert(['name' => '導入', 'secondcategory_id' => 12]);
        DB::table('firstcategories')->insert(['name' => '受入れ支援', 'secondcategory_id' => 12]);
        DB::table('firstcategories')->insert(['name' => '保守・廃棄', 'secondcategory_id' => 12]);
        DB::table('firstcategories')->insert(['name' => '開発プロセス・手法', 'secondcategory_id' => 13]);
        DB::table('firstcategories')->insert(['name' => '知的財産適用管理', 'secondcategory_id' => 13]);
        DB::table('firstcategories')->insert(['name' => '開発環境管理', 'secondcategory_id' => 13]);
        DB::table('firstcategories')->insert(['name' => '構成管理・変更管理', 'secondcategory_id' => 13]);
        DB::table('firstcategories')->insert(['name' => 'プロジェクトマネジメント', 'secondcategory_id' => 14]);
        DB::table('firstcategories')->insert(['name' => 'プロジェクト統合マネジメント', 'secondcategory_id' => 14]);
        DB::table('firstcategories')->insert(['name' => 'プロジェクトステークホルダマネジメント', 'secondcategory_id' => 14]);
        DB::table('firstcategories')->insert(['name' => 'プロジェクトスコープマネジメント', 'secondcategory_id' => 14]);
        DB::table('firstcategories')->insert(['name' => 'プロジェクト資源マネジメント', 'secondcategory_id' => 14]);
        DB::table('firstcategories')->insert(['name' => 'プロジェクトタイムマネジメント', 'secondcategory_id' => 14]);
        DB::table('firstcategories')->insert(['name' => 'プロジェクトコストマネジメント', 'secondcategory_id' => 14]);
        DB::table('firstcategories')->insert(['name' => 'プロジェクトリスクマネジメント', 'secondcategory_id' => 14]);
        DB::table('firstcategories')->insert(['name' => 'プロジェクト品質マネジメント', 'secondcategory_id' => 14]);
        DB::table('firstcategories')->insert(['name' => 'プロジェクト調達マネジメント', 'secondcategory_id' => 14]);
        DB::table('firstcategories')->insert(['name' => 'プロジェクトコミュニケーションマネジメント', 'secondcategory_id' => 14]);
        DB::table('firstcategories')->insert(['name' => 'サービスマネジメント', 'secondcategory_id' => 15]);
        DB::table('firstcategories')->insert(['name' => 'サービスの設計・移行', 'secondcategory_id' => 15]);
        DB::table('firstcategories')->insert(['name' => 'サービスマネジメントプロセス', 'secondcategory_id' => 15]);
        DB::table('firstcategories')->insert(['name' => 'サービスの運用', 'secondcategory_id' => 15]);
        DB::table('firstcategories')->insert(['name' => 'ファシリティマネジメント', 'secondcategory_id' => 15]);
        DB::table('firstcategories')->insert(['name' => 'システム監査', 'secondcategory_id' => 16]);
        DB::table('firstcategories')->insert(['name' => '内部統制', 'secondcategory_id' => 16]);
        DB::table('firstcategories')->insert(['name' => '情報システム戦略', 'secondcategory_id' => 17]);
        DB::table('firstcategories')->insert(['name' => '業務プロセス', 'secondcategory_id' => 17]);
        DB::table('firstcategories')->insert(['name' => 'ソリューションビジネス', 'secondcategory_id' => 17]);
        DB::table('firstcategories')->insert(['name' => 'システム活用促進・評価', 'secondcategory_id' => 17]);
        DB::table('firstcategories')->insert(['name' => 'システム化計画', 'secondcategory_id' => 18]);
        DB::table('firstcategories')->insert(['name' => '要件定義', 'secondcategory_id' => 18]);
        DB::table('firstcategories')->insert(['name' => '調達計画・実施', 'secondcategory_id' => 18]);
        DB::table('firstcategories')->insert(['name' => '経営戦略手法', 'secondcategory_id' => 19]);
        DB::table('firstcategories')->insert(['name' => 'マーケティング', 'secondcategory_id' => 19]);
        DB::table('firstcategories')->insert(['name' => 'ビジネス戦略と目標・評価', 'secondcategory_id' => 19]);
        DB::table('firstcategories')->insert(['name' => '経営管理システム', 'secondcategory_id' => 19]);
        DB::table('firstcategories')->insert(['name' => '技術開発戦略の立案', 'secondcategory_id' => 20]);
        DB::table('firstcategories')->insert(['name' => '技術開発計画', 'secondcategory_id' => 20]);
        DB::table('firstcategories')->insert(['name' => 'ビジネスシステム', 'secondcategory_id' => 21]);
        DB::table('firstcategories')->insert(['name' => 'エンジニアリングシステム', 'secondcategory_id' => 21]);
        DB::table('firstcategories')->insert(['name' => 'e-ビジネス', 'secondcategory_id' => 21]);
        DB::table('firstcategories')->insert(['name' => '民生機器', 'secondcategory_id' => 21]);
        DB::table('firstcategories')->insert(['name' => '産業機器', 'secondcategory_id' => 21]);
        DB::table('firstcategories')->insert(['name' => '経営・組織論', 'secondcategory_id' => 22]);
        DB::table('firstcategories')->insert(['name' => 'OR・IE', 'secondcategory_id' => 22]);
        DB::table('firstcategories')->insert(['name' => '会計・財務', 'secondcategory_id' => 22]);
        DB::table('firstcategories')->insert(['name' => '知的財産権', 'secondcategory_id' => 23]);
        DB::table('firstcategories')->insert(['name' => 'セキュリティ関連法規', 'secondcategory_id' => 23]);
        DB::table('firstcategories')->insert(['name' => '労働関連・取引関連法規', 'secondcategory_id' => 23]);
        DB::table('firstcategories')->insert(['name' => 'その他の法律・ガイドライン・技術者倫理', 'secondcategory_id' => 23]);
        DB::table('firstcategories')->insert(['name' => '標準化関連', 'secondcategory_id' => 23]);
    }
}

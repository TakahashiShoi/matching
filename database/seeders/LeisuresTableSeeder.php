<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeisuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $leisures = [
            // 屋外スポーツ class(1)
            ['class' => '1', 'leisure' => 'アメリカンフットボール'],
            ['class' => '1', 'leisure' => 'アーチェリー'],
            ['class' => '1', 'leisure' => 'キックベース'],
            ['class' => '1', 'leisure' => 'クリケット'],
            ['class' => '1', 'leisure' => 'ゲートボール'],
            ['class' => '1', 'leisure' => '硬式テニス'],
            ['class' => '1', 'leisure' => 'ゴルフ'],
            ['class' => '1', 'leisure' => 'サイクリング・自転車'],
            ['class' => '1', 'leisure' => 'サッカー'],
            ['class' => '1', 'leisure' => 'ジョギング・ランニング'],
            ['class' => '1', 'leisure' => 'スケートボード'],
            ['class' => '1', 'leisure' => 'ソフトテニス'],
            ['class' => '1', 'leisure' => 'ソフトボール'],
            ['class' => '1', 'leisure' => 'トレッキング'],
            ['class' => '1', 'leisure' => 'ハイキング'],
            ['class' => '1', 'leisure' => 'BMX'],
            ['class' => '1', 'leisure' => 'ビーチサッカー'],
            ['class' => '1', 'leisure' => 'ビーチドッチボール'],
            ['class' => '1', 'leisure' => 'ビーチバレーボール'],
            ['class' => '1', 'leisure' => 'ビーチフットボール'],
            ['class' => '1', 'leisure' => 'ペタンク'],
            ['class' => '1', 'leisure' => 'ホッケー'],
            ['class' => '1', 'leisure' => 'マウンテンバイク'],
            ['class' => '1', 'leisure' => 'モーターサイクル'],
            ['class' => '1', 'leisure' => '野球'],
            ['class' => '1', 'leisure' => 'ヨガ'],
            ['class' => '1', 'leisure' => 'ラグビー'],
            ['class' => '1', 'leisure' => 'ローラースケート'],
            // 屋内スポーツ class(2)
            ['class' => '2', 'leisure' => '合気道'],
            ['class' => '2', 'leisure' => 'アイスホッケー'],
            ['class' => '2', 'leisure' => 'アームレスリング'],
            ['class' => '2', 'leisure' => 'ウェイトトレーニング'],
            ['class' => '2', 'leisure' => 'カバディ'],
            ['class' => '2', 'leisure' => '弓道'],
            ['class' => '2', 'leisure' => '剣道'],
            ['class' => '2', 'leisure' => 'シュートボクシング'],
            ['class' => '2', 'leisure' => '少林寺拳法'],
            ['class' => '2', 'leisure' => 'スカッシュ'],
            ['class' => '2', 'leisure' => 'スポーツチャンバラ'],
            ['class' => '2', 'leisure' => '相撲'],
            ['class' => '2', 'leisure' => '卓球'],
            ['class' => '2', 'leisure' => 'ダーツ'],
            ['class' => '2', 'leisure' => '中国拳法'],
            ['class' => '2', 'leisure' => 'ドッチボール'],
            ['class' => '2', 'leisure' => 'ハンドボール'],
            ['class' => '2', 'leisure' => 'バスケットボール'],
            ['class' => '2', 'leisure' => 'バトミントン'],
            ['class' => '2', 'leisure' => 'バレーボール'],
            ['class' => '2', 'leisure' => 'ビリヤード'],
            ['class' => '2', 'leisure' => 'フェンシング'],
            ['class' => '2', 'leisure' => 'フォークダンス'],
            ['class' => '2', 'leisure' => 'フットサル'],
            ['class' => '2', 'leisure' => 'フリークライミング'],
            ['class' => '2', 'leisure' => 'フロアホッケー'],
            ['class' => '2', 'leisure' => 'ボウリング'],
            ['class' => '2', 'leisure' => 'ボクシング'],
            ['class' => '2', 'leisure' => 'レスリング'],
            // ウィンタースポーツ class(3)
            ['class' => '3', 'leisure' => 'アイスホッケー'],
            ['class' => '3', 'leisure' => 'カーリング'],
            ['class' => '3', 'leisure' => 'スキー'],
            ['class' => '3', 'leisure' => 'スノーボード'],
            ['class' => '3', 'leisure' => 'スノーモビル'],
            ['class' => '3', 'leisure' => 'スピードスケート'],
            ['class' => '3', 'leisure' => 'フィギュアスケート'],
            ['class' => '3', 'leisure' => '雪合戦'],
            // ウォータースポーツ class(4)
            ['class' => '4', 'leisure' => 'ウィンドサーフィン'],
            ['class' => '4', 'leisure' => 'ウェーブスキー'],
            ['class' => '4', 'leisure' => 'カヌー・カヤック'],
            ['class' => '4', 'leisure' => 'カヤックフィッシング'],
            ['class' => '4', 'leisure' => 'サーフィン'],
            ['class' => '4', 'leisure' => 'サップ'],
            ['class' => '4', 'leisure' => 'シュノーケリング'],
            ['class' => '4', 'leisure' => 'ジェットスポーツ・水上バイク'],
            ['class' => '4', 'leisure' => '水泳'],
            ['class' => '4', 'leisure' => '水球'],
            ['class' => '4', 'leisure' => '水上スキー'],
            ['class' => '4', 'leisure' => 'ダイビング'],
            ['class' => '4', 'leisure' => '釣り'],
            ['class' => '4', 'leisure' => 'ラフティング'],
            ['class' => '4', 'leisure' => 'ヨット'],
            // スカイスポーツ class(5)
            ['class' => '5', 'leisure' => '気球'],
            ['class' => '5', 'leisure' => 'スカイダイビング'],
            ['class' => '5', 'leisure' => 'ハンググライダー'],
            ['class' => '5', 'leisure' => 'パラグライダー'],
            ['class' => '5', 'leisure' => 'モーターパラグライダー'],
            // ゲーム class(6)
            ['class' => '6', 'leisure' => '囲碁'],
            ['class' => '6', 'leisure' => '将棋'],
            ['class' => '6', 'leisure' => 'チェス'],
            ['class' => '6', 'leisure' => 'オセロ'],
            ['class' => '6', 'leisure' => '麻雀'],
            ['class' => '6', 'leisure' => 'PCゲーム'],
            ['class' => '6', 'leisure' => 'スマホゲーム'],
            ['class' => '6', 'leisure' => 'テレビゲーム'],
            ['class' => '6', 'leisure' => 'ポータブルゲーム'],
            ['class' => '6', 'leisure' => 'サバイバルゲーム'],
            ['class' => '6', 'leisure' => 'トレーディングカードゲーム'],

            
        ];
        DB::table('leisures')->insert($leisures);
        
    }
}

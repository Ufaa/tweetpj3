<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ←これを追加
use DateTime; // ←これを追加

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = ['今日のつぶやき１', '今日のつぶやき２', '今日のつぶやき３'];
        foreach ($content as $contents) {
            DB::table('tweets')->insert([
                'content' => $contents,
                'created_at' => new Datetime(),
                'updated_at' => new DateTime()
            ]);
        }
    }
}

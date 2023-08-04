<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('choices')->insert([
            'id' => 1,
            'question_id' => 1,
            'text' => '約79万人',
            'is_correct' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('choices')->insert([
            'id' => 2,
            'question_id' => 1,
            'text' => '約28万人',
            'is_correct' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('choices')->insert([
            'id' => 3,
            'question_id' => 1,
            'text' => '約183万人',
            'is_correct' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('choices')->insert([
            'id' => 4,
            'question_id' => 2,
            'text' => 'INTECH',
            'is_correct' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('choices')->insert([
            'id' => 5,
            'question_id' => 2,
            'text' => 'BIZZTECH',
            'is_correct' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('choices')->insert([
            'id' => 6,
            'question_id' => 2,
            'text' => 'X-TECH',
            'is_correct' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('choices')->insert([
            'id' => 7,
            'question_id' => 3,
            'text' => 'Internet of Things',
            'is_correct' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('choices')->insert([
            'id' => 8,
            'question_id' => 3,
            'text' => 'Information on Tool',
            'is_correct' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('choices')->insert([
            'id' => 9,
            'question_id' => 3,
            'text' => 'Integrate into Technology',
            'is_correct' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('choices')->insert([
            'id' => 10,
            'question_id' => 4,
            'text' => '東京',
            'is_correct' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'id' => 11,
            'question_id' => 4,
            'text' => 'ハワイ',
            'is_correct' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'id' => 12,
            'question_id' => 4,
            'text' => 'ロンドン',
            'is_correct' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('choices')->insert([
            'id' => 13,
            'question_id' => 5,
            'text' => '慶應義塾大学',
            'is_correct' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'id' => 14,
            'question_id' => 5,
            'text' => 'ハーバード大学',
            'is_correct' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'id' => 15,
            'question_id' => 5,
            'text' => 'トロント大学',
            'is_correct' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('choices')->insert([
            'id' => 16,
            'question_id' => 6,
            'text' => '猫',
            'is_correct' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'id' => 17,
            'question_id' => 6,
            'text' => '犬',
            'is_correct' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('choices')->insert([
            'id' => 18,
            'question_id' => 6,
            'text' => 'コアラ',
            'is_correct' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

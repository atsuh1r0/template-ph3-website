<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // quizテーブルのレコードを作成
        DB::table('quizzes')->insert([
            'id' => 1,
            'name' => 'ITクイズ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('quizzes')->insert([
            'id' => 2,
            'name' => '紹介クイズ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // questionテーブルのレコードを作成
        DB::table('questions')->insert([
            'id' => 1,
            'image' => '',
            'text' => '日本のIT人材が2030年には最大どれくらい不足すると言われているでしょうか？',
            'supplement' => '',
            'quiz_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('questions')->insert([
            'id' => 2,
            'image' => '',
            'text' => '既存業界のビジネスと、先進的なテクノロジーを結びつけて生まれた、新しいビジネスのことをなんと言うでしょう？',
            'supplement' => '',
            'quiz_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('questions')->insert([
            'id' => 3,
            'image' => '',
            'text' => 'IoTとは何の略でしょう',
            'supplement' => '',
            'quiz_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('questions')->insert([
            'id' => 4,
            'image' => '',
            'text' => '出身地はどこでしょう？',
            'supplement' => '',
            'quiz_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('questions')->insert([
            'id' => 5,
            'image' => '',
            'text' => '在籍中の大学はどこでしょう？',
            'supplement' => '',
            'quiz_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('questions')->insert([
            'id' => 6,
            'image' => '',
            'text' => '動物に例えるとなんと言われることが多いでしょう？',
            'supplement' => '',
            'quiz_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // choiceテーブルのレコードを作成
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

        Quiz::factory()->count(50)->create()->each(function ($quiz) {
            // 1つのクイズに対して3つのQuestionを作成
            Question::factory()->count(3)->create(['quiz_id' => $quiz->id])->each(function ($question) {
                // 各Questionに対して2つのis_correctが0のChoiceを作成
                Choice::factory()->count(2)->state(['is_correct' => 0])->create(['question_id' => $question->id]);
                // 各Questionに対して1つのis_correctが1のChoiceを作成
                Choice::factory()->state(['is_correct' => 1])->create(['question_id' => $question->id]);
            });
        });
    }
}

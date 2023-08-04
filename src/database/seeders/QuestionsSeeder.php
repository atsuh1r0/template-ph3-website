<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}

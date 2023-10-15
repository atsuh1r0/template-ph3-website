<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;

class QuizController extends Controller
{
    /**
     * クイズ一覧
     */
    public function index()
    {
        $quizzes = Quiz::all();
        return view('quizzes/index', compact('quizzes'));
    }

    /**
     * クイズカテゴリ選択
     */
    public function selectedCategory($quizNum)
    {
        $quiz = Quiz::with('question.choice')->find($quizNum);
        return view('quizzes/question', compact('quiz'));
    }
}

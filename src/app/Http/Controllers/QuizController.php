<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
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

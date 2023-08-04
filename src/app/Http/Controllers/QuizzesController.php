<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;
use App\Models\Quizzes;

class QuizzesController extends Controller
{
    public function index()
    {
        $quizzes = Quizzes::all();
        return view('quizzes/index', compact('quizzes'));
    }

    /**
     * クイズカテゴリ選択
     */
    public function selectedCategory($quizNum)
    {
        $questions = Questions::where('quiz_id', $quizNum)->get();
        return view('quizzes/question', compact('questions'));
    }
}

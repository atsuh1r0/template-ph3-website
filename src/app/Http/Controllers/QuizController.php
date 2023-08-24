<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;

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

    /**
     * クイズ編集
     */
    public function edit($questionNum)
    {
        $question = Question::find($questionNum);
        return view('quizzes/edit', compact('question'));
    }

    /**
     * クイズ編集完了
     */
    public function update(Request $request)
    {
        $question = Question::find($request->question_id);
        $question->text = $request->text;
        $question->save();

        session()->flash('message', '編集が完了しました');
        return redirect()->route('quizzes.selectedCategory', ['quizNum' => $question->quiz_id]);
    }
}

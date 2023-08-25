<?php

namespace App\Http\Controllers;

use App\Models\Choice;
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
     * 問題文編集
     */
    public function edit($questionNum)
    {
        $question = Question::find($questionNum);
        return view('quizzes/edit', compact('question'));
    }

    /**
     * 問題文編集完了
     */
    public function update(Request $request)
    {
        $question = Question::find($request->question_id);
        $question->text = $request->text;
        $question->save();

        session()->flash('message', '編集が完了しました');
        return redirect()->route('quizzes.selectedCategory', ['quizNum' => $question->quiz_id]);
    }

    /**
     * クイズ削除
     */
    public function delete($quizId)
    {
        $questions = Question::where('quiz_id', $quizId)->get();
        foreach ($questions as $question) {
            $choices = Choice::where('question_id', $question->id)->get();
            foreach ($choices as $choice) {
                // 選択肢を削除
                $choice->delete();
            }
            // 問題文を削除
            $question->delete();
        }

        $quiz = Quiz::find($quizId);
        // クイズを削除
        $quiz->delete();

        session()->flash('message', '削除が完了しました');
        return redirect()->route('quizzes.index');
    }
}

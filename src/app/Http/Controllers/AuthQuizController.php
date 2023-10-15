<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\Choice;

class AuthQuizController extends Controller
{
    /**
     * ログイン後のホーム画面
     */
    public function home()
    {
        return view('auth/index');
    }

    /**
     * クイズ一覧
     */
    public function index()
    {
        $quizzes = Quiz::withTrashed()->paginate(20);
        return view('auth/quizzes/index', compact('quizzes'));
    }

    /**
     * クイズカテゴリ選択
     */
    public function selectedCategory($quizNum)
    {
        $quiz = Quiz::with(['question' => function ($query) {
            $query->with(['choice' => function ($query) {
                $query->withTrashed(); // choiceテーブルに対してwithTrashedを適用
            }])->withTrashed(); // questionテーブルに対してwithTrashedを適用
        }])->withTrashed()->find($quizNum);
        return view('auth/quizzes/question', compact('quiz'));
    }

    /**
     * 問題文編集
     */
    public function edit($questionNum)
    {
        $question = Question::find($questionNum);
        return view('auth/quizzes/edit', compact('question'));
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
        return redirect()->route('admin.quizzes.selectedCategory', ['quizNum' => $question->quiz_id]);
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
        return redirect()->route('admin.quizzes.index');
    }

    /**
     * 設問削除
     */
    public function deleteQuestion($questionId)
    {
        $question = Question::find($questionId);
        $choices = Choice::where('question_id', $questionId)->get();
        foreach ($choices as $choice) {
            // 選択肢を削除
            $choice->delete();
        }
        // 問題文を削除
        $question->delete();

        session()->flash('message', '削除が完了しました');
        return redirect()->route('admin.quizzes.selectedCategory', ['quizNum' => $question->quiz_id]);
    }

    /**
     * クイズ新規作成
     */
    public function createQuiz()
    {
        return view('auth/quizzes/create');
    }

    /**
     * クイズ新規作成完了
     */
    public function storeQuiz(Request $request)
    {
        $quiz = new Quiz();
        $quiz->name = $request->name;
        $quiz->save();

        session()->flash('message', 'クイズ新規作成が完了しました');
        return redirect()->route('admin.quizzes.index');
    }

    /**
     * 設問新規作成
     */
    public function createQuestion($quizNum)
    {
        return view('auth/quizzes/createQuestion', compact('quizNum'));
    }

    /**
     * 設問新規作成完了
     */
    public function storeQuestion(Request $request)
    {
        $question = new Question();
        $question->quiz_id = $request->quizNum;
        $question->text = $request->text;
        $question->image = '';
        $question->supplement = $request->supplement;
        $question->save();

        $choice = new Choice();
        $choice->question_id = $question->id;
        $choice->text = $request->choice1;
        $choice->is_correct = $request->is_correct == 1 ? true : false;
        $choice->save();

        $choice = new Choice();
        $choice->question_id = $question->id;
        $choice->text = $request->choice2;
        $choice->is_correct = $request->is_correct == 2 ? true : false;
        $choice->save();

        $choice = new Choice();
        $choice->question_id = $question->id;
        $choice->text = $request->choice3;
        $choice->is_correct = $request->is_correct == 3 ? true : false;
        $choice->save();

        session()->flash('message', '設問新規作成が完了しました');
        return redirect()->route('admin.quizzes.selectedCategory', ['quizNum' => $request->quizNum]);
    }
}

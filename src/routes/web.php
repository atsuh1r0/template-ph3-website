<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AuthQuizController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home/index');
})->name('home');

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/users/delete', [UserController::class, 'delete'])->name('user.delete');

Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes.index');
Route::get('/quizzes/{quizNum}', [QuizController::class, 'selectedCategory'])->name('quizzes.selectedCategory');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ログイン画面
Route::middleware('auth')->group(function () {
    Route::get('/admin/quizzes/edit/{questionNum}', [AuthQuizController::class, 'edit'])->name('admin.question.edit');
    Route::post('/admin/quizzes/update/', [AuthQuizController::class, 'update'])->name('admin.question.update');
    Route::post('/admin/quizzes/delete/{quizNum}', [AuthQuizController::class, 'delete'])->name('admin.quiz.delete');
    Route::post('/admin/question/delete/{questionNum}', [AuthQuizController::class, 'deleteQuestion'])->name('admin.question.delete');
    Route::get('/admin/quizzes/create/', [AuthQuizController::class, 'createQuiz'])->name('admin.quiz.create');
    Route::post('/admin/quizzes/store/', [AuthQuizController::class, 'storeQuiz'])->name('admin.quiz.store');
    Route::get('/admin/question/create/{quizNum}', [AuthQuizController::class, 'createQuestion'])->name('admin.question.create');
    Route::post('/admin/question/store/', [AuthQuizController::class, 'storeQuestion'])->name('admin.question.store');

    Route::get('/admin', [AuthQuizController::class, 'home'])->name('admin.index');
    Route::get('/admin/quizzes', [AuthQuizController::class, 'index'])->name('admin.quizzes.index');
    Route::get('/admin/quizzes/{quizNum}', [AuthQuizController::class, 'selectedCategory'])->name('admin.quizzes.selectedCategory');
});

require __DIR__ . '/auth.php';

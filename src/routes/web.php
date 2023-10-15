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
// Route::resource('/admin', QuizController::class)->middleware(['auth', 'verified'])->name('admin', 'admin.index');
Route::middleware('auth')->group(function () {
    Route::get('/admin', [AuthQuizController::class, 'home'])->name('admin.index');
    Route::get('/admin/quizzes', [AuthQuizController::class, 'index'])->name('admin.quizzes.index');
    Route::get('admin/quizzes/{quizNum}', [AuthQuizController::class, 'selectedCategory'])->name('admin.quizzes.selectedCategory');


    Route::get('/quizzes/edit/{questionNum}', [AuthQuizController::class, 'edit'])->name('admin.question.edit');
    Route::post('/quizzes/update/', [AuthQuizController::class, 'update'])->name('admin.question.update');
    Route::post('/quizzes/delete/{quizNum}', [AuthQuizController::class, 'delete'])->name('admin.quiz.delete');
    Route::post('/question/delete/{questionNum}', [AuthQuizController::class, 'deleteQuestion'])->name('admin.question.delete');
});

require __DIR__ . '/auth.php';

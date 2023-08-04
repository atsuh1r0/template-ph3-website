<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quizzes;

class QuizzesController extends Controller
{
    public function index()
    {
        $quizzes = Quizzes::all();
        return view('quizzes/index', compact('quizzes'));
    }
}

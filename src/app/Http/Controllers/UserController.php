<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return Inertia::render('User/Index', compact('users'));
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('frontend.model')->with('users', $users);
    }

    public function show(User $user)
    {
        return view('frontend.model-details')->with('user', $user);
    }
}

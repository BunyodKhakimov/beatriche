<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModelController extends Controller
{
    public function index()
    {
        $users = User::all();
        $users_with_images = User::inRandomOrder()->where('image', '<>', DB::raw('json_array()'))->limit(6)->get();
        return view('frontend.model')->with('users', $users)->with('users_with_images', $users_with_images);
    }

    public function show(User $user)
    {
        return view('frontend.model-details')->with('user', $user);
    }
}

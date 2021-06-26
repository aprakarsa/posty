<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\post;

class UserPostController extends Controller
{
    public function index(User $user)
    {
        // dd($user);
        $posts = $user->posts()->with(['user', 'likes'])->paginate(25);

        return view('users.posts.index', [
            'user' => $user,
            'posts' => $posts
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(Request $request)
    {
        if(!$request->session()->has('data')) {
            return redirect()->to('/');
        } else {
            $active_user = $request->session()->get('data')['1'];
        }

        $posts = Post::get();
        $comments = Comment::get();

        return view('page.home', ['posts' => $posts, 'active_user' => $active_user, 'comments' => $comments]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'user_post' => 'required',
        ]);
        $active_user = $request->session()->get('data')['1'];
        Post::create([
            'id' => Str::uuid(),
            'text' => $request->user_post,
            'user' => $active_user->full_name,
            'email' => $active_user->email,
        ]);

        return redirect()->to('home');;
    }
}

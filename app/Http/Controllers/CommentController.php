<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CommentController extends Controller
{

    public function store(Request $request)
    {
        $this->validate($request, [
            'user_comment' => 'required',
        ]);
        $active_user = $request->session()->get('data')['1'];

        Comment::create([
            'id' => Str::uuid(),
            'comment' => $request->user_comment,
            'user' => $active_user->full_name,
            'post' => $request->post_id
        ]);

        return redirect()->to('home');
    }
}

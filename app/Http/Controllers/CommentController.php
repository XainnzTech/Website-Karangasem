<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        return view('main.index');
    }

    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->name = $request->input('name');
        $comment->email = $request->input('email');
        $comment->message = $request->input('message');
        $comment->save();

        return redirect()->back();
    }

    public function show()
    {
        $comment = Comment::all();
        $i = 1;

        if ( session('logged_in') ) {
            return view('admin.comment.show', compact('comment', 'i'));
        } else {
            return redirect()->route('login');
        }
    }

    public function destroy(Comment $comment) {
        $comment -> delete();
        return redirect()->back();
    }
}

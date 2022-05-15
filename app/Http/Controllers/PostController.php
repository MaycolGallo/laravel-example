<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(5);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $req)
    {
        $this->validate($req, [
            'body' => 'required'
        ]);

        $req->user()->posts()->create([
            'body' => $req->body
        ]);

        return back();
    }
}

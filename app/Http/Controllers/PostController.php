<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $perPage = config('pagination.per_page');
        $links = config('pagination.links');
        $posts = Post::paginate($perPage);

        return view('posts.index', compact('posts', 'links'));
    }
}

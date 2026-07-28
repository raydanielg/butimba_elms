<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Event;

class NewsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        $events = Event::where('date', '>=', now())->orderBy('date', 'asc')->get();

        return view('pages.news', compact('posts', 'events'));
    }

    public function showPost($id)
    {
        $post = Post::findOrFail($id);
        return response()->json($post);
    }
}

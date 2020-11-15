<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\General;
use App\Post;
use App\Tag;

class PostController extends Controller
{
    public function search(Request $request)
    {
        //get the general information about the website
        $website = General::query()->firstOrFail();

        $key = trim($request->get('q'));

        $posts = Post::query()
            ->where('title', 'like', "%{$key}%")
            ->orWhere('content', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')
            ->get();

        //get all the categories
        $categories = Category::all();

        //get all the tags
        $tags = Tag::all();

        //get the recent 5 posts
        $recent_posts = Post::query()
            ->where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('search', [
            'website' => $website,
            'key' => $key,
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts
        ]);
    }
}

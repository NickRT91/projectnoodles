<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    public function getIndex()
    {
    	$posts = Post::orderBy('id', 'desc')->paginate(5);

    	Return view('blog.index')->withPosts($posts);
    }

    public function getSingle($slug)
    {
    	// Fetch from the database based on slug
    	$post = Post::where('slug', '=', $slug)->first();

    	// Return the view and pass in the post object
    	return view('blog.single')->withPost($post);
    }
}

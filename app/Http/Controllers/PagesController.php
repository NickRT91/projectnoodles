<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    // Get Index
    public function getIndex() {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
    	return view('pages.welcome')->withPosts($posts);
    }

    // Get About
    public function getAbout() {
    	$first = 'John';
    	$last = 'Doe';

		$fullname = $first . " " . $last;
		$email = 'hello@example.com';
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
    	return view('pages.about')->withData($data);
    }

    // Get Contact
    public function getContact() {
    	return view('pages.contact');
    }
}

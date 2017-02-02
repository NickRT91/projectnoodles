<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Get Index
    public function getIndex() {
    	return view('pages.welcome');
    }

    // Get About
    public function getAbout() {
    	$first = 'Nick';
    	$last = 'Taylor';

		$fullname = $first . " " . $last;
		$email = 'nick@wrekin.net';
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

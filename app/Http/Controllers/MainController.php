<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Categories;
use Carbon\Carbon;

class MainController extends Controller
{
	public function showMainPage()
	{
		$posts = Post::all();
	    return view('blog.main')->with('posts', $posts);
	}

	public function aboutUs()
	{
		return view('blog.aboutus');
	}
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class WebController extends Controller
{
  public function index()
  {
    $last_posts = Post::orderBy('created_at', 'desc')->limit(30)->get();
    $last_users = User::inRandomOrder()->limit(25)->get();
    return view('web.index', compact('last_users', 'last_posts'));
  }
}

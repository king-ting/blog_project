<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::all();
        return view('home', compact('posts'));
    }

    public function user_post(){

    $posts = DB::table('posts')->where('user_id', auth()->id())->get();

    return view('home', compact('posts'));

    }
}

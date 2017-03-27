<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Session;
use DB;
use Carbon\Carbon;
use Image;
use File;

class PostsController extends Controller
{
    
    public function index()
    {
        $posts = Post::latest()->take(6)->get();

        return view('/posts/index', compact('posts'));
    }

  
    public function create()
        {  
            $post = DB::table('posts')->get();
            session::flash('fail','You must log in to your account!');
            return view('posts/create_post');
       
    }

    public function store(Request $request)
    {   
        $post = new Post;
        /*$post->banner=request('banner');*/
        $post->user_id = Auth::user()->id;
        $post->title=request('title');
        $post->body=request('body');

        $post->save();
        session::flash('success','You have successfully created  a new post!');

        return back();
    } 


    //this function was to show all posts on /all_posts
    public function show_all()
    {
        $posts = Post::all();
        return view('posts/show_all_posts', compact('posts'));
    }

    public function show_post(Post $post)
    {
        return view('posts.show_post', compact('post'));
    }

  
    public function edit($id)
    {
        $post= Post::find($id);
        return view('posts/edit_post', compact('post'));
    }


    public function update(Request $request, $id)
    {
        $post= Post::find($id);
        if ($request->hasFile('post_banner')) {
            $banner = $request->file('post_banner');
            $filename = time().'.'.$banner->getClientOriginalExtension();

            if ($post->banner !== 'underthesun.png') {
                $file = public_path('/images/'.$post->banner);

                if (File::exists($file)) {
                    unlink($file);
                }

            }

            Image::make($banner)->save( public_path('/images/'.$filename));
        }
            //$user = Auth::user();
            $post->banner = $filename;

            
        
        $post->title=$request->title;
        $post->body=$request->body;
        $post->save();
        return back();


    }


    public function destroy($post_id)
    {
        //$post= Post::find($id);
         $post =Post::where('id',$post_id)->first();
        $post->delete();
        return back();
    }

    // public function update_banner(Request $request) {

        
    //     if ($request->hasFile('post_banner')) {
    //         $banner = $request->file('post_banner');
    //         $filename = time().'.'.$banner->getClientOriginalExtension();

    //         if ($post->banner !== 'underthesun.png') {
    //             $file = public_path('/images/'.$post->banner);

    //             if (File::exists($file)) {
    //                 unlink($file);
    //             }

    //         }

    //         Image::make($banner)->save( public_path('/images/'.$filename));

    //         //$user = Auth::user();
    //         $post->banner = $filename;
    //         $post->save();
    //     }

    //     return back();

    

    // }
}

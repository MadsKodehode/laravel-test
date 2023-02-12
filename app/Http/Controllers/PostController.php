<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //GET post
    public function index()
    {
        //Eager loading in these relationships before looping through
        $posts = Post::orderBy('created_at', 'desc')->with(['user', 'likes'])->paginate(20);
        
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    //ADD post
    public function postSomething(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);
        //Go in to request user and create new post
        $request->user()->posts()->create($request->only('body'));

        return back();    
    }

    //DELETE post
    public function destroy(Post $post)
    {

        $this->authorize('delete', $post);

        $post->delete();

        return back();

    }
}

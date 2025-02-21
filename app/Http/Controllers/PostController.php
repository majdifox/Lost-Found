<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // public function index()
    // {
    //     $posts = Post::with('user')->latest()->paginate(9);
    //     return view('posts.index', compact('posts'));
    // }

    // public function createPost(Request $request){

    //     $post = $request->validate([
    //         'title' => 'required',
    //         'body' => 'required',

    //     ]);

    //     $post->title = $request->title;
    //     $post->body = $request->body;
    //     $post->user_id = Auth::id();
    //     $post->save();

    //     return redirect()->route('posts.index');

    // }

    public function index(){

        return view('post.index');

    }

    public function create(){
        return view('post.create');
    }

    // public function store(Request $request){
    //     $request->validate(
    //         [
    //             'title'=>'required|string|max:255',
    //             'body'=>'nullable|string'
    //         ]
    //         );

    //     Post::create($request->all());
    //     return  redirect()->route('post.index');

    // }
}

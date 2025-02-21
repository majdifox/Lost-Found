<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;

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
        $posts = Post::all();
        $categories = Category::all();

        return view('post.index', ['posts' => $posts], ['categories' => $categories]);

        

    }

    public function create(){
        $categories = Category::all();

        return view('post.create', ['categories' => $categories]);
        
    }

    
    public function store(Request $request){

            $request->validate([
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                'categoryID' => 'required|exists:categories,id',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'date' => 'required|date',
                'location' => 'required|string',
                'contact' => 'required|string',
            ]);
            // dd($request);
            $post = new Post();
        $post->userID = Auth::id();
        $post->categoryID = $request->categoryID;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->date = $request->date;       
        $post->location = $request->location;
        $post->contact = $request->contact;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $post->photo = $photoPath;
        }

        $post->save();

        return redirect()->route('post.index');


    }

    public function edit($id){
        $post = Post::findOrFail($id);
        $categories = Category::all();

        return view('post.edit', ['post' => $post], ['categories' => $categories]);
        // dd($product);
    
        


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

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request){

        $inscomingFields = $request->validate([

            'title' => 'required',
            'body' => 'required'
        ]);

        $inscomingFields['title'] = strip_tags($inscomingFields['title']);
        $inscomingFields['body'] = strip_tags($inscomingFields['body']);
        $inscomingFields['user_id'] = auth()->id();
        Post::create($inscomingFields); 
        return redirect('/');

    }
}

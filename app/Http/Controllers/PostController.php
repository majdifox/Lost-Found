<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function createPost(Request $request){

        $inscomingFields = $request->validate([

            'title' => 'required',
            'body' => 'required'
        ]);
    }
}

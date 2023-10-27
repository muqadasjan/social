<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
        public function home()
        {

            return view('post.Home')
                ->with('page','Post')
                ->with('posts',Post::paginate(5));
        }
    

}

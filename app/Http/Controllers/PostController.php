<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;

class PostController extends Controller
{
    //add post based on author id
    public function addPost($id){

        $author = Author::find($id);
        $post = new Post();
        $post->title = 'Title 3';

        $author->post()->save($post);

    }

    public function showPost($id){
         
        //show post based on author
        $post = Author::find($id)->post;
        return $post;
    }

}

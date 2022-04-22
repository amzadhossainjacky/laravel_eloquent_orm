<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;

class AuthorController extends Controller
{
    //

    public function addAuthor(){
        $author = new Author();
        $author->name = 'kamal';

        $author->save();
    }

    //find author based on post
    public function showAuthor($id){
        $author = Post::find($id)->author;
        return $author;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
class PagesController extends Controller
{
    public function getIndex(){   
        $posts = Post::orderBy('created_at','desc')->limit(3)->get();  
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout(){
        $first = 'Anisio';
        $last = 'Santos';
        $fullname = $first . ' ' . $last; 
        $email = 'anisio.dev@gmail.com';
        return view('pages.about')->withFullname($fullname)->withEmail($email);
    }

    public function getContact(){
        return view('pages.contact');
    }
}

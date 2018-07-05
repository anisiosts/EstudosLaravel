<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){     
        return view('pages.welcome');
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

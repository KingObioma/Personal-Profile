<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function resume(){
        return view('pages.resume');
    }
    public function work(){
        return view('pages.work');
    }
    public function contact(){
        return view('pages.contact');
    }
}

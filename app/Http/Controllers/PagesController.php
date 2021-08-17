<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Home‚ð•\Ž¦
    public function getHome(){
      return view('home');
    }

    // About‚ð•\Ž¦
    public function getAbout(){
      return view('about');
    }

    // Contact‚ð•\Ž¦
    public function getContact(){
      return view('contact');
    }
}

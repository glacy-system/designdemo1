<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Home��\��
    public function getHome(){
      return view('home');
    }

    // About��\��
    public function getAbout(){
      return view('about');
    }

    // Contact��\��
    public function getContact(){
      return view('contact');
    }
}

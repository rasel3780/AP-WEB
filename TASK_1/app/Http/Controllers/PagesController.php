<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact(){
        return view('contact');
    }
    public function aboutUs(){
        return view('aboutUs');
    }
    public function ourTeams(){
        return view('ourTeams');
    }
}

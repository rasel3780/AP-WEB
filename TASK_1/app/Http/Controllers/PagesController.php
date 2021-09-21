<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function contact(){
        return view('contact');
    }
    public function aboutUs(){
        return view('aboutUs');
    }
    public function ourTeams(){
        return view('ourTeams');
    }
    public function service(){
        $ser = array("Could", "IP CAM", "Hosting");
        return view('service')
        ->with('ser', $ser);
    }
    
}

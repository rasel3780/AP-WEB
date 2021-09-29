<?php
  
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Hash;
  
class PageController extends Controller
{
    
    public function loginPage()
    {
        return view('page.login');
    }  
    public function loginButton(Request $request)
    {
        return "ok";
    }
      

    public function registrationPage()
    {
        return view('page.register');
    }
      
    public function registerButton(Request $request)
    {  
        return "ok";
    }
    
    public function contact(){
        return view('page.contact');
    }
}
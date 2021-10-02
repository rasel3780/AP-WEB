<?php
  
namespace App\Http\Controllers;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

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
        $this->validate(
            $request,
            [
                'name'=>'required',
                'password'=>'required',  
            ]
        );
        $name = $request->name;
        $student = Student::where('name',$name)->first();
        
        return $student;
    }
      

    public function registrationPage()
    {
        return view('page.register');
    }
      
    public function registerButton(Request $request)
    {  
        $this->validate(
            $request,
            [
                'name'=>'required|min:5|max:10|regex:/^[A-Za-z]+$/',
                's_id'=>'required',
                'password'=>'required',
                'dob'=>'required',
                'email'=>'email',
               
            ],
            [
                'name.required'=>'Please put your name',
                'name.min'=>'Name must be greater than 2 charcters'
            ]
        );
        $var = new Student();
        $var->name= $request->name;
        $var->s_id = $request->s_id;
        $var->password = $request->password;
        $var->email = $request->email;
        $var->dob = $request->dob;
        
        $var->save();
        
        return "User Created";
    }
    
    public function contact(){
        return view('page.contact');
    }
}
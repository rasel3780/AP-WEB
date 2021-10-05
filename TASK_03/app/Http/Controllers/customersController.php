<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customersController extends Controller
{
    public function Login(){
        return view('customers.login');
    }
    public function loginSubmit(Request $request){
        return $request;      
    }
    public function cutomerList(){
        $customers = Customer::all();
        return $customers;
    }
}

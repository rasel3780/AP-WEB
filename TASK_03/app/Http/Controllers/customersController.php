<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Product;

class customersController extends Controller
{
    public function Login(){
        return view('customers.login');
    }
    public function loginSubmit(Request $request){ 
        $customers = Customer::all();     
        $flag = 0;
        foreach($customers as $customer){
            if($customer->name === $request->name && $customer->pnumber === $request->pnumber){
                $flag=1;

                break;
            }
        }
        if($flag===1){
            $products = Product::all();
            return view('customers.clist')->with('products',$products);
        }
        else{
            return "user not found";
        }     
    }
    public function plist(){
        $products = Product::all();
        return view('customers.clist')->with('products',$products);
    }
    
}

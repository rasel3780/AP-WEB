<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function Create(){
        return view('pages.products.create');
    }
    public function createSubmit(Request $request){
     
        $this->validate(
            $request,
            [
                'name'=>'required',
                'price'=>'required|regex:/^[0-9]*$/',
                'quantity'=>'required|regex:/^[0-9]*$/'
            ]
        );

        $var = new Product();
        $var->name= $request->name;
        $var->price = $request->price;
        $var->quantity = $request->quantity;
        $var->save();
        return "OK";      
    }
    public function list(){
        
        $product = Product::all();
        return view('pages.product.list')->with('product',$product);
    }
    public function edit(Request $request){
        //
        $id = $request->id;
   
        $product = Product::where('id',$id)->first();
 
        return view('pages.product.edit')->with('product',$product);

    }
    public function editSubmit(Request $request){
        $var = Product::where('id',$request->id)->first();
        $var->name= $request->name;
        $var->price = $request->price;
        $var->quantity = $request->quantity;
        $var->save();
        return redirect()->route('product.list');

    }
   
}

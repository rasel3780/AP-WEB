<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    public function Create(){
        return view('products.create');
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
        $var->description = $request->description;
        $var->save();
        return redirect()->route('product.list');      
    }
    public function list(){
        
        $products = Product::all();
        return view('products.list')->with('products',$products);
    }
    public function edit(Request $request){
        $id = $request->id;
        $product = Product::where('id',$id)->first();
        return view('products.edit')->with('product',$product);
    }

    public function editSubmit(Request $request){
        $var = Product::where('id',$request->id)->first();
        $var->name= $request->name;
        $var->price = $request->price;
        $var->quantity = $request->quantity;
        $var->description = $request->description;
        $var->save();
        return redirect()->route('product.list');
    }
    public function delete(Request $request){
        $id = $request->id;
        $product = Product::where('id',$id)->delete();
        return redirect()->route('product.list');
    }
}

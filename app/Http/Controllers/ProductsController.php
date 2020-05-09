<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductsController extends Controller
{ 
    //
     public function products()
        {
            $products = Product::orderBy('id', 'desc')->get();
            return view('pages.product.index')->with('products',$products);

/*
        $products= Product::orderBy('id','desc')->get();
        return view('pages.product.index')->with('products',$products);
        $product_ratings = ProductRating:: all();
        return view('pages.product.index')->with('product_ratings', $product_ratings); */
        }

    public function show($slug)
    {

        $product = Product::where('slug', $slug)->first();
        if(!is_null($product)){
            return view('pages.product.show',compact('product'));

        }else{
            session()->flash('errors','Sorry !! There is no product by the URL...');
            return redirect()->route('products');
        }
    	
    }

}


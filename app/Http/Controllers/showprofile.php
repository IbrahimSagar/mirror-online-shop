<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class showprofile extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }

   /* public function productDetails($productid)
    {
    	$data=DB::table('product')->where('product_row_id',$productid)->first();
    	return view('product_detail', ['data' => $data]);
    }*/
    public function contact()
    {
    	return view('pages.contact');
    }
    public function products()
    {

    	$products= product::orderBy('id','desc')->get();
    	return view('pages.product.product_detail')->with('products',$products);
        $product_ratings = ProductRating:: all();
        return view('pages.product.product_detail')->with('product_ratings', $product_ratings); 
    }
    /* public function show($slug)
    {

        $product = Product::where('slug',$slug)->first();
        if(!is_null($product)){
            return view('pages.product.show',compact('product'));

        }else{
            session()->flash('error','Sorry !! There is no product by the URL...');
            return redirect()->route('products');
        }
        
    }
*/
     function submitRating(Request $request) {
        //
        $rating_data = $request->all();
        //echo '<pre>'.print_r($rating_data, true).'</pre>'; exit;
        $productRating_model = new ProductRating();
        $pid = $request->product_id;
        $productRating_model->user_id = 0;
        $productRating_model->product_id = $request->product_id;
        $productRating_model->name = $request->author;
        $productRating_model->email = $request->email;  
        $productRating_model->rating = $request->rating;
        $productRating_model->reviews = $request->comment;
        
        if($productRating_model->save() == true){
            $insertedId = $productRating_model->id;
            return view('show_review_ajax', ['product_ratings'=> $rating_data, 'insertedId'=>$insertedId]);
        }

    }

}

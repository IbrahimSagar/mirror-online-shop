<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Image;
use App\productImage;
use App\Product;

class AdminProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
        {
            $products = Product::orderBy('id', 'desc')->get();
            return view('admin.pages.product.index')->with('products',$products);
        }

    public function create()
        {
        	return view('admin.pages.product.create');
        }
    public function edit($id)
        {
            $product = Product::find($id);
            return view('admin.pages.product.edit')->with('product',$product);
        }

    public function store(Request $request)
    {
    	$request->validate([
   		 'title' => 'required|max:150',
    	 'description' => 'required',
    	 'price' => 'required',
    	 'quantity' => 'required',
    ]);


    	$product = new Product;


    	$product->title = $request->title;
    	$product->description = $request->description;
    	$product->quantity = $request->quantity;
    	$product->price = $request->price;
    	$product->category_id = 1;
    	$product->brand_id = 1;
    	$product->slug = str_slug( $request->title);
    	$product->admin_id = 1;
    	$product->status = 1;
    	$product->save();
 
    	//productImage Model insert image
        if (count($request->product_image) > 0) {
        $i = 0;
          foreach ($request->product_image as $image) {

            //insert that image
            //$image = $request->file('product_image');
            $img = time() . $i .'.'. $image->getClientOriginalExtension();
            $location = 'images/product_image/' .$img;
            Image::make($image)->save($location);

            $product_image = new ProductImage;
            $product_image->product_id = $product->id;
            $product_image->image = $img;
            $product_image->save();
            $i++;
          }
        }
    	
        return redirect()->route('admin.products'); 
    }
    public function update(Request $request,$id)
        {
            $request->validate([
             'title' => 'required|max:150',
             'description' => 'required',
             'price' => 'required',
             'quantity' => 'required',
        ]);


            $product = Product::find($id);

            $product->title = $request->title;
            $product->description = $request->description;
            $product->quantity = $request->quantity;
            $product->price = $request->price;
            $product->save();

            return redirect()->route('admin.products'); 
        }

        public function delete($id)
        {
            $product = Product::find($id);
            if (!is_null($product)) {
              $product->delete();
            }
            // Delete all images
            foreach ($product->images as $img) {
              // Delete from path
              $file_name = $img->image;
              if (file_exists("images/product_image/".$file_name)) {
                unlink("images/product_image/".$file_name);
              }

              $img->delete();
            }
            session()->flash('success', 'Product has deleted successfully !!');
            return back();

          }

}

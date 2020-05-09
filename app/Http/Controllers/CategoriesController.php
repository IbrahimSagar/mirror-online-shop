<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Product;
use Image;
use File;

class CategoriesController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth:admin');
        }
       public function index()
        {
            $categories = Category::orderBy('id', 'desc')->get();

            return view('admin.pages.categories.index', compact('categories'));
        }


        public function create()
        {
        	$main_categories = Category::orderBy('name', 'desc')->where('parent_id',NULL)->get();
        	return view('admin.pages.categories.create',compact('main_categories'));
        }

        public function store(Request $request)
        {
            $this->validate($request,[
        		'name'=>'required',
        		'image' => 'nullable|image',
        	],
        	[  
        		'name.required' => 'Please provide a valid name',
        		'image.image' => 'Please provide a valid image',
        	]
        );
        
        $Category = new Category();
        $Category->name = $request->name;
    	$Category->description = $request->description;
    	$Category->parent_id = $request->parent_id;

    	//productImage Model insert image

    	if ($request->image > 0){
		    $image = $request->file('image');
			$img = time() .'.'. $image->getClientOriginalExtension();
    		$location = 'images/category_image/' .$img;
    		Image::make($image)->save($location);
    		$Category->image = $img;	
		}

    	$Category->save();

    	session()->flash('success', 'A new Category has added successfully ||');			
        return redirect()->route('admin.categories'); 
		}

        public function edit($id)
        {
        	$main_categories = Category::orderBy('name', 'desc')->where('parent_id',NULL)->get();
            $category = Category::find($id);
            if (!is_null($category)) {
            return view('admin.pages.categories.edit', compact('category','main_categories'));
            }
            else{
            	return redirect()->route('admin.categories');
            }
        }

        public function update(Request $request,$id)
        {
            $this->validate($request,[
        		'name'=>'required',
        		'image' => 'nullable|image',
        	],
        	[  
        		'name.required' => 'Please provide a valid name',
        		'image.image' => 'Please provide a valid image',
        	]
        );
        
        $Category = Category::find($id);
        $Category->name = $request->name;
    	$Category->description = $request->description;
    	$Category->parent_id = $request->parent_id;

    	//productImage Model insert image

	    	if ($request->image > 0){
	    		if (File::exists('images/category_image/'.$category->image)) {
	    			# code...
	    			File::delete()('images/category_image/'.$category->image);
	    		}
    		    $image = $request->file('image');
				$img = time() .'.'. $image->getClientOriginalExtension();
	    		$location = 'images/category_image/' .$img;
	    		Image::make($image)->save($location);
	    		$Category->image = $img;	
    		}

    	$Category->save();

    	session()->flash('success', 'A new Category has updated successfully ||');			
        return redirect()->route('admin.categories'); 
		}



		public function delete($id)
        {
          $category = Category::find($id);
          if (!is_null($category)) {
            // If it is parent category, then delete all its sub category
            if ($category->parent_id == NULL) {
              // Delete sub categories
              $sub_categories = Category::orderBy('name', 'desc')->where('parent_id', $category->id)->get();

              foreach ($sub_categories as $sub) {
                // Delete category image
                if (File::exists('images/category_image/'.$sub->image)) {
                  File::delete('images/category_image/'.$sub->image);
                }
                $sub->delete();
              }

            }

            // Delete category image
            if (File::exists('images/category_image/'.$category->image)) {
              File::delete('images/category_image/'.$category->image);
            }
            $category->delete();
          }
          session()->flash('success', 'Brand has deleted successfully !!');
          return back();

        }
}

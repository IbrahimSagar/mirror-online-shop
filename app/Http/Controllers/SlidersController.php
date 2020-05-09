<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Slider;
use Image;
use File;

class SlidersController extends Controller
{
      public function index()
        {
            $sliders = Slider::orderBy('priority', 'asc')->get();

            return view('admin.pages.sliders.index', compact('sliders'));
        }
        public function create()
        {
        	return view('admin.pages.sliders.create',compact('sliders'));
        }


        public function store(Request $request)
        {
            $this->validate($request,[
        		'title'=>'required',
        		'image'=>'required',
        		'priority' => 'required',
        		'button_link' => 'required',
        	],
        	[  
        		'title.required' => 'Please provide a slider title',
        		'image.required' => 'Please provide a slider image',
        		'image.image' => 'Please provide a valide slider image',
        		'priority.required' => 'Please provide a slider priority',
        		'button_link.url' => 'Please provide a slider button_link',
        	]
        );
        
        $slider = new Slider();
        $slider->title = $request->title;
    	$slider->image = $request->image;
    	$slider->button_text = $request->button_text;
    	$slider->button_link = $request->button_link;
    	$slider->priority = $request->priority;

        if ($request->image > 0) {
        $image = $request->file('image');
        $img = time() . '.'. $image->getClientOriginalExtension();
        $location = 'images/sliders/' .$img;
        Image::make($image)->save($location);
        $slider->image = $img;
        }
        $slider->save();

    	session()->flash('success', 'A new Slider has added successfully ||');			
        return redirect()->route('admin.sliders'); 
		}

        public function edit($id)
        {
            return view('admin.pages.sliders.edit',compact('sliders'));

        }

         public function update(Request $request,$id)
        {
            //return view('admin.pages.sliders.edit',compact('sliders'));
             $this->validate($request,[
        		'title'=>'required',
        		'image'=>'nullable|image',
        		'priority' => 'required',
        		'button_link' => 'nullable|url',
        	],
        	[  
        		'title.required' => 'Please provide slider title',
        		'image.image' => 'Please provide a valide slider image',
        		'priority.required' => 'Please provide a slider priority',
        		'button_link.url' => 'Please provide a slider button_link',
        	]
        );
        
        $slider = new Slider();
        $slider->title = $request->title;
    	$slider->image = $request->image;
    	$slider->button_text = $request->button_text;
    	$slider->button_link = $request->button_link;
    	$slider->priority = $request->priority;

    	if ($request->image > 0) {
            // Delete the old Slider
            if (File::exists('images/sliders/'.$slider->image)) {
                File::delete('images/sliders/'.$slider->image);
            }

            $image = $request->file('image');
            $img = time() . '.'. $image->getClientOriginalExtension();
            $location = 'images/sliders/' .$img;
            Image::make($image)->save($location);
            $slider->image = $img;	
		}
    	$slider->save();

    	session()->flash('success', ' Slider has updated successfully ||');			
        return redirect()->route('admin.sliders'); 

        }


		 public function delete($id)
        {
        	$slider = Slider::findOrFail($id);
            if(!is_null($slider)) { 
                //Delete all the image for this slider
                 if (File::exists('images/sliders/'.$slider->image)) {
                 	File::delete('images/sliders/'.$slider->image);
                 }
                  $slider->delete();
              }
				session()->flash('success','Slider has deleted successfully !!');
				return back();
			}
        
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use Image;
use App\ProductImage;

use App\Product;
class AdminPagesController extends Controller
{
    //Admin page auth
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
    	return view('admin.pages.index');
    }

    public function contact()
    {
        return view('pages.contact');
    }

   
}

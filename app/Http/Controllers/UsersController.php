<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Division;
use App\District;


class UsersController extends Controller
{
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function dashboard()
    {
        $user = Auth::user();
        return view('pages.users.dashboard',compact('user'));
        
    }
    public function profile()
    {

        $divisions = Division::orderBy('priority', 'asc')->get();
        $districts = District::orderBy('name', 'asc')->get();

        $user = Auth::user();
        return view('pages.users.profile',compact('user','divisions','districts'));
        
    }

    public function profileUpdate(Request $request)
    { 

    	$user = Auth::user();
    	$this->validate($request, [
    		'first_name' => 'required|string|max:30',
            'last_name' => 'nullable|string|max:15',
            'email' => 'required|string|email|max:100|unique:users,email,'.$user->id,
            'phone_no' => 'required|max:15',
            'street_address' => 'required|max:100',
            'division_id' => 'required|numeric',
            'district_id' => 'required|numeric',
    	]);

    	$user->first_name = $request->first_name;
    	$user->last_name = $request->last_name;
    	$user->username = $request->username;
    	$user->email = $request->email;
    	$user->phone_no = $request->phone_no;
    	$user->shipping_address = $request->shipping_address;
    	$user->street_address = $request->street_address;
    	$user->division_id = $request->division_id;
    	$user->district_id = $request->district_id;

    	if ($request->password !=NULL || $request->password != "") {
    		$user->password = Hash::make($request->password);
    	}
    	$user->ip_address = request()->ip();

    	 session()->flash('success','Usre Profile updated Succesfully..!!');

    	return back();
        
    }

    
}

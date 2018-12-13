<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {

        return view('admin/profile')->withUser(Auth::user());
    
	}

	public function update(Request $request)
    {
    	//dd($request);
        $user = Auth::user();
        $user->about=$request->input('about');
        $user->zipcode=$request->input('zipcode');
        $user->country=$request->input('country');
        $user->state=$request->input('state');
        $user->city=$request->input('city');
        $user->phone=$request->input('phone');
        $user->address=$request->input('address');
        $user->name=$request->input('name');
        $user->save();
        return redirect('profile');
    }
}
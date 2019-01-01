<?php

namespace App\Http\Controllers;

use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class User extends Controller
{
    public function index(){
    	if(!Session::get('login')){
    		return redirect('login')->with('alert','You must login to continue');
    	}
    	else{
    		return view('user');
    	}
    }

    public function login(){
    		return view('login');
    }

    public function loginPost(Request $request){
    	$email = $request->email;
    	$password = $request->password;

    	$data = ModelUser::where('email',$email)->first();
    	if(count($data) > 0){
    		if(Hash::check($password,$data)->passowrd){
    			Session::put('username',$data->username);
    			Session::put('email',$data->email);
    			Session::put('login',TRUE);
    			return redirect('home_user');
    		}
    	}
    }
}

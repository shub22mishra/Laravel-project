<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class loginController extends Controller
{
    public function login(Request $req)
    {
    	$username=$req->input('username');
    	$password=$req->input('password');
    	// echo $username."----".$password;
    	$checklogin=DB::table('user')->where(['Name'=>$username,'Password'=>$password])->get();
    	if(count($checklogin)>0)
    	{
    		// echo "Login Sucessfully";
    		return view('show');
    	}
    	else
    	{
    		return view('notadmin');
    	}

    }
}

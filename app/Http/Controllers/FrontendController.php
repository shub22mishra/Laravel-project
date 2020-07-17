<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function order()
    {
    	return view('ordersystem');
    }
    public function product()
    {
    	return view('productdetail');
    }
    public function check()
    {
    	return view('checkout');
    }
    public function electric()
    {
    	return view('electrical');
    }
    
}

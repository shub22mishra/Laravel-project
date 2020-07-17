<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisplayController extends Controller
{
    public function dbcheck()
    {
    	$cust=DB::select('select * from complaint');
    	return view('tabledisplay',['complaint'=>$cust]);
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class users extends Controller
{
        public function dbcheck()
        {
        
                // $users = DB::select('select * from user');
                // return view('show',['user'=>$users]);

                $cust = DB::select('select * from laravel_test');
                return view('show',['laravel_test'=>$cust]);
                
        }
}



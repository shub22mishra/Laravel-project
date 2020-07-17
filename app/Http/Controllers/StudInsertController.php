<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudInsertController extends Controller
{
    public function insertform()
        {
        return view('bill');
        }

    public function insert(Request $request)
            {
                $firstname = $request->input('firstname');
                $email = $request->input('email');
                $address = $request->input('address');
                $city = $request->input('city');
                $state = $request->input('state');
                $zip = $request->input('zip');
                $cardname = $request->input('cardname');
                $cardnumber = $request->input('cardnumber');
                $expmonth = $request->input('expmonth');
                $expyear = $request->input('expyear');
                $cvv = $request->input('cvv');
                $data=array('Name'=>$firstname,"Email"=>$email,"Address"=>$address,"City"=>$city,"State"=>$state,"Zip"=>$zip,"NameOnCard"=>$cardname,
                "CreditCard"=>$cardnumber,"ExpMonth"=>$expmonth,"Expyear"=>$expyear,"Cvv"=>$cvv);
            DB::table('laravel_test')->insert($data);
            echo "<h1>PAYMENT SUCCESSFULL...!!</h1><br/>";
            echo "<h1>THANK YOU FOR YOUR ORDER!!</h1><br/>";
            echo '<a href = "/">Click Here</a> to go back.';
            }


            public function insertcomplaint()
            {
            return view('complaint');
            }
    
        public function insert1(Request $request)
                {
                    $name = $request->input('name');
                    $mobile = $request->input('mobile');
                    $email = $request->input('email');
                    $address = $request->input('address');
                    $query = $request->input('query');
    
                    $data=array('name'=>$name,"mobile"=>$mobile,"email"=>$email,"address"=>$address,"query"=>$query);
                
                DB::table('complaint')->insert($data);
                echo "<h1>COMPLAINT SUCCESFULLY LODGED!!</h1><br/>";
                echo "<h1>YOUR QUERY WILL BE SOLVED SOON...!!</h1><br/>";
                echo '<a href = "/">Click Here</a> to go back.';
               
                }

                public function insertlogin()
                {
                return view('log');
                }
        
            public function insert2(Request $request)
                    {
                        $name = $request->input('name');
                        $mobile = $request->input('mobile');
                        $email = $request->input('email');
                        $username = $request->input('username');
                        $password = $request->input('password');
        
                        $data=array('name'=>$name,"mobile"=>$mobile,"email"=>$email,"username"=>$username,"password"=>$password);
                    
                    DB::table('logininfo')->insert($data);
                    echo "<h1>SUCCESFULLY LOGGED IN!!!</h1><br/>";
                    echo '<a href = "/">Click Here</a> ';
                   
                    }   
}

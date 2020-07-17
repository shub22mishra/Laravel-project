<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Userss extends Controller
{
    public function dbCheck()
    {
    	//1. To just print the data.
    	// $userss=DB::select('select * from user');
    	// print_r($userss);

    	//2. This will retrive data in JSON object
    	// return 	DB::select('select * from user');
    	// print_r($userss);

    	// $userss=DB::select('select * from user');
    	// dd($userss);

    	// $userss=DB::select('select * from user where id=?',[1]);
    	// dd($userss);

    	// //Using where clause to select a particular row on a particular column
    	// $userss=DB::select('select * from user where id=:id',['id'=>2]);
    	// dd($userss);

    	// //using named binding
    	// $userss=DB::select('select * from user where id=:id',['id'=>3]);
    	// dd($userss[0]->Address);

    	// TO insert values in the table
    	// $userss=DB::insert('INSERT into user(id,name,email,address)
    	// 	VALUES (?,?,?,?)',
    	// 	[
    	// 		 5,
    	// 		'Shweta',
    	// 		'abc@gmail.com',
    	// 		'Jalandhar'
    	// 	]);
    	// dd($userss);

    	//UPDATE
    	// $userss=DB::update("UPDATE user set id=6 where name=?",['Shivanshi']);
    	// dd($userss);
    	// $userss=DB::update("UPDATE user set name='SHII' where id=?",[3]);
    	// dd($userss);

    	//DELETE 
    	// $userss=DB::delete('DELETE from user where id=? ',[4]);
    	// dd($users);

    	//DROP TABLE
    	// $userss=DB::statement('DROP table profile');
    	// dd($users);

    	//To create table using the SUBLime
    	// $userss=DB::statement('CREATE table profile(id int(11) unsigned NOT NULL auto_increment');

    	//QUERY BUILDER
    	// $userss=DB::table('user')->get();
    	// dd($userss);

    	// $userss=DB::table('user')->get();
    	//  foreach($userss as $data)
    	//  {         
    	//  	echo $data->name."<br/>";
    	//   };

    	//1. First()- When we want to retrieve the entire row of the table .
    	// $userss=DB::table('user')->where('id','=',2)->first();
    	// print_r($userss);

    	//2. value()- It is used when we want to retrieve just a single value from the entire row
    	// $userss=DB::table('user')->where('id',6)->value('name');
    	// print_r($userss);

    	//3. find()-To retrieve a single value by its ID column value.
    	// This method will return the entire row with the id value. WHen it matchs it will return the data of that row.
    	// $userss=DB::table('user')->find(4);
    	// print_r($userss);

    	//4.pluck() method- If you would like to retrieve a Collection containing the values of a single column, you may use the pluck method. In this example, we'll retrieve a Collection of role titles:

    	// $userss=DB::table('user')->pluck('name');
    	// print_r($userss);

    	//5. SElect()- This will select the specific column that will be passed.
    	// $userss=DB::table('user')->select('name','address')->get();
    	// print_r($userss);

    	//6.Distinct()- It will display all the values of the table.
    	// $userss=DB::table('user')->distinct()->get();
    	// print_r($userss);

    	// 7. addselect()
    	// $query=	DB::table('user')->select('name');
    	// $userss=$query->addselect('address')->get();
    	// dd($userss

    	//8. WHere clause
    	$userss=DB::table('user')->where('name','Shivanshi')->get();
    	print_r($userss);
































     }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Book;
use App\Laptop;
use App\Phone;

class SemuaProdukController extends Controller
{
    public function semua_produk()
	{
   		return view('semua');
	}

	public function coba()
	{
    	$accounts=DB::table('accounts')->get();
    	$chefs=DB::table('chefs')->get();
    	$books=Book::all();
    	$laptops=Laptop::all();
    	$phones=Phone::all();

    	return view ('coba', compact('accounts','chefs','books','laptops','phones'));  

		//$accounts=Account::all();
    	//return view ('coba', compact('accounts'));
	}

	// public function coba2()
	// {
 //    	$chefs=DB::table('chefs')->get();

 //   	return view ('coba', compact('chefs'));
	// }

	// public function coba3()
	// {
	//		$books=Book::all();
	//     return view ('coba', compact('books'));
	// }

	// public function coba4()
	// {
	// 	$laptops=Laptop::all();
 //    	return view ('coba', compact('laptops'));
	// }

	// public function coba5()
	// {
	// 	$phones=Phone::all();
 //    	return view ('coba5', compact('phones'));
	// }



	 public function test6()
	{
   		$members=DB::table('members')->get();
		return view ('test6', compact('members'));
	}


 	public function test7($id)
	{
	 	// print $id;
	 	// die();

    	$members=DB::table('members')->where('id', $id )->get();
	 	return view ('test7', compact('members'));
	}

	//delete controller
	// public function update($id)
	// {
	// 	$members=DB::table('members')->where ('id', $id)->delete();
	// 	return view ('test7', compact((varname)))

	// }

	public function form()
	{
		return view ('form');
	}

	public function store(Request $request)
	{
		$id = $request->input("id");


		$name = $request->input("name");
		
		// print $name;
		// //die();
		$address = $request->input("address");

		$dob = $request->input("dob");

		$gender = $request->input("gender");

		$email = $request->input("email");

		$city = $request->input("city");

		$country = $request->input("country");

		DB::table('members')->insert
		(
			[
			"id"=>$id,
			"name"=>$name,
			"address"=>$address,
			"dob"=>$dob,
			"gender"=>$gender,
			"email"=>$email,
			"city"=>$city,
			"country"=>$country
			]
		);
		print "sukses";
		die();
	}
}

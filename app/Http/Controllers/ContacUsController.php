<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContacUsController extends Controller
{
    public function contact_us()
    {
    	return view('contact');   
    }
}

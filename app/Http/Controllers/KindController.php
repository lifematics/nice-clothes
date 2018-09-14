<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KindController extends Controller
{
    //

    public function Kind(Request $request) {
    	   return view('kind.Kind');
	   }
	   
}	   
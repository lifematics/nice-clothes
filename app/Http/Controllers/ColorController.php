<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ColorController extends Controller
{
    //
    public function Color(Request $request,$a) {
    	   return view('color.Color',['value'=>$a]);
	   }
	   
}	   
<?php

namespace App\Http\Controllers;

use App\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    //
    public function Suggestion(Request $request,$d,$value)
    {
	  
	   $md = new Suggestion();	
           $data = $md->getData($value,$d);
	   $id = $md ->get2Data($value,$d);
    	   return view('suggestion.Suggestion',['value'=>$value,'color'=>$d,'data'=>$data ,'id'=>$id]);
	   }
	   
}	   
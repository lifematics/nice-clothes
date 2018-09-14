<?php

namespace App\Http\Controllers;

use App\Hoge;
use Illuminate\Http\Request;

class HogeController extends Controller
{
    //

    public function foo(Request $request) {
         $value = Hoge::bar();
         return view('hoge.foo', ['value' => $value] );
    }
}

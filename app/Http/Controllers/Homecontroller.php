<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function loginform(){
        return view('house');
    }

    public function loginuser(Request $request){
        dd($request->all());
    }
}

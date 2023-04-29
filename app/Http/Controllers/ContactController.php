<?php

namespace App\Http\Controllers;

use App\Models\contac;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create(){
        $contact=contac::create(['username'=>'mona','email'=>'mona@gmail.com','password'=>md5('123')]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function loginform()
    {
        return view('house');
    }
    public function store(Request $request) {

      //  $create=User::create([
        //    'username'=> request('username'),
         //   'email'=>request('email'),
          //  'password'=>request('password')

        //]);

        $validate=Validator::make(request()->all(),[
            'username'=>'required|string',
            'password'=>'required|string',
            'email'=>'required'
        ],
            ['username.required'=>'نام کاربری  باید وارد شود',
                'password.required'=>'کلمه عبور باید واردشود ',
                'email.required'=>'ایمیل باید وارد شود',

            ]
        );

        if($validate->fails()){
            return redirect()->back()
                ->withErrors($validate)
                ->withInput(request()->all());

        }








        $article= User ::create(


            [

                'username'=>request('username'),
                'email'=>request('email'),
                'password'=>request('password'),


            ]

        );
            if($article){
                Session::flash('message','اطلاغات ثبت شد.');
                return redirect('/login-show');

            }


        }
        public function index (){
            $users = DB::select('select * from users');
            return view('users.list',['users'=>$users]);

        }
    public function destroy($user_ID) {
        DB::delete('delete from student where user_ID = ?',[$user_ID]);
        echo "Record deleted successfully.<br/>";

    }



}
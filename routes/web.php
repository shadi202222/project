<?php

use Illuminate\Support\Facades\Route;
use App\Models;
use Illuminate\Support\Facades\Session;
use App\Models\User;

use  Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/login', function () {
  //  return view('login');
//});
Route::get('/', function () {
    return view('house');

});

Route::get('/login-form','\App\Http\Controllers\UserController@loginform');
Route::post('/login-user','\App\Http\Controllers\UserController@store');

Route::get('/login-show', function () {
    $records= DB::table('users')->get();
   return view('users.list',["users"=>$records]);
});
Route::delete('/login-delete/{user_ID}',function ($user_ID) {
   $user =User::find($user_ID);

        $user->delete();


  Session:: flash('message','رکورد حدف شد.');
    return  redirect('/login-show');
});


Route::post('/update/{user_ID}',function ($user_ID) {
    $user =User::find($user_ID);
    return view('edit')->with('user',$user);

});
Route::post('/edit/{user_ID}',function ( Request $request,$user_ID) {
    $user =User::find($user_ID);
    $user->username =$request->input('username','');
    $user->email=$request->input('email','');
    $user->password=$request->input('password','');;
    $user->save();
   // $user->update(['username'=>$request->username,'email'=>$request->email,'password'=>$request->password,]);
    return redirect('/login-show');

});
//Route::get('login-show','\App\Http\Controllers\UserController@index');
//Route::delete('delete/{$user_ID}','\App\Http\Controllers\UserController@destroy');


    //'\App\Http\Controllers\UserController@delete');
//});

//Route::get('/profile/{username}', function ($username) {
   // return view('home1')->with ('username',$username);
//});


//Route::get('/', function () {
 // return view('home1');
//});



//Route::get('/db', function () {
     // $rec= DB::table('users')->insert([
       // 'username'=>'ali','email'=>'ali@gmail.com','password'=>md5('123')

   // ]);

    //if($rec) return  DB::table('users')->get();
   // $records= DB::table('users')->where('username','shadi')->first();
   // dd($records);



  //  return view('users.list',["users"=>$records]);


//});


//return DB::table('users')->get();
//Route::get('/login', function () {
   // return view('shadi');
//});

//Route::get('/db', function () {
   //$records= DB::table('users')->get();
    // username'=>'samar','email'=>'samar@gmail.com','password'=>md5('123'),'userstate'=>'active'

    // ]);

    // if($rec) return  DB::table('users')->get();
    // $records= DB::table('users')->where('username','shadi')->first();
    // dd($records);



  //  return view('users.list1',["users"=>$records]);


//});







//Route::get('/db3', function () {
//      //  'userID'=>'1','post_date'=>'2022-04-30','post_content'=>'view is nice ','post_title'=>'xc'

  // ]);
    //if($rec) return  DB::table('posts')->get();
//});


//Route::get('/db1', function () {
    //= DB::table('posts')->get();

 //   return view('users.list2',["posts"=>$records]);
//});

//Route::get('/db2', function () {
   // $users = DB::table('users')
     //   ->join('posts', 'users.user_ID', '=', 'posts.userID')
      ////  ->select('users.username','posts.post_content')
     //   ->get();
   // return view('users.list3',["users"=>$users]);
//);



//Route::get('/article/create','App\Http\Controllers\ArticleController@create');

//::get('/contact/create','App\Http\Controllers\ContactController@create');



//Route::prefix('article')->group ( function(){
// //   Route::get('insert','App\Http\Controllers\ArticleController@insert');
   // Route::get('store','App\Http\Controllers\ArticleController@store');
//});
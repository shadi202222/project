<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;

class ArticleController extends Controller
{
  // public  function create(){
      // $article=article::create(['contactID'=>'5','title'=>'java','content'=>'how to work with java']);
  // }


    public function list1(){

        $article=article::paginate(5);
        return view('article',['articles'=>$article]);

    }
    public function insert(){


        return view('insert');

    }
    public function store()

       {

            $validate=Validator::make(request()->all(),[
                'title'=>'require|string|min:5|max:50',
                 'content'=>'require|string'
                ],
                ['title.required'=>'عنوان باید وارد شود',
                    'title.min'=>'طول عنوان باید بیشتز از5 کاراکتر باشد',
                    'title.max'=>'طول عنوان باید حداکثر 50 کاراکتر باشد',
                    'content.required'=>'محتوا باید وارد شود',
                    'content.string'=>'محتوا بایدزشته ای  وارد شود'
                    ]
            );

            if($validate->fails()){
                return redirect()->back()
                    ->withErrors($validate)
                     ->withInput(request()->all());

            }








        $article=article::create(


           [
             'contactID'=>('5'),
             'title'=>request('title'),
           'content'=>request('content'),

        ]

        );
        if($article){



       }
         }

}

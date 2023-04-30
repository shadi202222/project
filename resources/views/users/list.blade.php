@extends('layouts.master1')


@section('title')
    userlist
@endsection




@section('subject')
    userlist
@endsection


@section('content')

    @if(\Illuminate\Support\Facades\Session::has('message'))
        <div style="direction: rtl" class="alert alert-success">
           {{\Illuminate\Support\Facades\Session::get('message')}}
        </div>
        @endif


  <table border="1" class="table table-striped">
  <tr>
      <td>ID</td><td>username</td><td>email</td><td>password</td><td>delete</td><td>edit</td>
      @if(count($users))
      @foreach($users as $user)
          </tr>
    <tr> <td>{{$user->user_ID}}<td>{{$user->username}}</td> <td>{{$user->email}}</td><td>{{$user->password}}</td>
    <td>
        <form action="login-delete/{{$user->user_ID}}" method="post">

            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            @method('delete')


            <button class="btn btn-danger btn-sm  "> delete</button>

        </form>
    </td>
        <td>
            <form action="/edit/{{$user->user_ID}}" method="post">

                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                @method('post')


                <button class="btn btn-primary btn-sm  "> edit</button>

            </form>
        </td>
  </tr>

  @endforeach
      @endif

  </table>
@endsection


























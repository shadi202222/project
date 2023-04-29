
@extends('layouts.master1')
@section('subject')
    userlist1
@endsection


@section('content')

    <table border="1" class="table table-striped">
        <tr>
            <td>id</td>  <td>username</td><td>email</td><td>password</td><td>userstate</td>
        @if(count($users))
            @foreach($users as $user)
                <tr>
                    <td>{{$user->user_ID}}</td> <td>{{$user->username}}</td> <td>{{$user->email}}</td><td>{{$user->password}}</td>
                    <td>{{$user->userstate}}</td>
                </tr>

            @endforeach
        @endif

    </table>
@endsection


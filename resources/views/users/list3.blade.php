
@extends('layouts.master1')
@section('subject')
    postlist2
@endsection


@section('content')

    <table border="1" class="table table-striped">
        <tr>
            <td>username</td>  <td>post_content</td></tr>
        @if(count($users))
            @foreach($users as $user)
                <tr>
                    <td>{{$user->username}}</td>     <td>{{$user->post_content}}</td>
                </tr>

            @endforeach
        @endif

    </table>
@endsection


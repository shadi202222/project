
@extends('layouts.master1')
@section('subject')
    postlist2
@endsection


@section('content')

    <table border="1" class="table table-striped">
        <tr>
            <td>post_ID</td>  <td>userID</td><td>post_date</td><td>post_content</td><td>userstate</td>
        @if(count($posts))
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->post_ID}}</td>     <td>{{$post->userID}}</td> <td>{{$post->post_date}}</td> <td>{{$post->post_content}}</td><td>{{$post->post_title}}</td>

                </tr>

            @endforeach
        @endif

    </table>
@endsection


@extends('layouts.master1')
@section('title')
   newlist
@endsection

@section('subject')
    newlist
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif





    <form action="/update/{{$user->user_ID}} "   method ="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        @method('put')

        <div class="form-group">
            <label for="username">username</label>
            <input name="username" class="form-control rounded-left" id="username" value="{{$user->username}}">
        </div>
        <div class="form-group d-flex">
            <label for="email">email</label>
            <input name="email" class="form-control rounded-left" id="email"value="{{$user->email}}">
        </div>
        <div class="form-group d-flex">
            <label for="password">password</label>
            <input name="password" class="form-control rounded-left" id="password"value="{{$user->password}}">
        </div>
        <div class="form-group d-md-flex">
            <div class="w-50">
                <label class="checkbox-wrap checkbox-primary">Remember Me
                    <input type="checkbox" checked>
                    <span class="checkmark"></span>
                </label>
            </div>
            <div class="w-50 text-md-right">
                <a href="#">Forgot Password</a>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary rounded submit p-3 px-5">update</button>
        </div>
    </form>


@endsection

@extends('layouts.master1')
@section('title')
    articleslist
@endsection

@section('subject')
    articleslist
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





    <form   action="/article/store" method="post">
        @csrf

        <div class="mb-3" >
             <label for="title"class="form-label">Article title</label>
            <input type="text" class="form-control" id="text" name="title"  value="{{ old('title') }}" placeholder="article table">

        </div>


        <div class="mb-3">
            <label for="content" class="form-label">Article body</label>
            <textarea class="form-control" id="content" name="content" row="3" >{{ old('content') }}</textarea>

        </div>


        <button type="submit" class="btm btn-primary" >save</button>
    </form>


@endsection

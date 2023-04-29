@extends('layouts.master1')


@section('title')
    articleslist
@endsection




@section('subject')
    articleslist
@endsection



@section('content')
    <form style="margin-top:100px" method="get" action="/article/store" >

        <div class="form-group">
            <p dir="rtl"> <label for="contactID" class="form-label">id author</label></p>

        <div class="form-group">
            <p dir="rtl">  <label for="title"class="form-label">Article title</label></p>
            <input type="text" class="form-control" id="text" name="UserName" value="<?php echo isset($_POST['UserName']) ? $_POST['UserName'] :''?>">
            <?php echo isset($UserName_error) ? "<small id='emailHelp' class='form-text text-danger'> $UserName_error </small> " : ''; ?>
        </div>


        <div class="form-group">
            <p dir="rtl"> <label for="content" class="form-label">Article body</label></p>
            <textarea class="form-control" id="body" name="body" row="1" ></textarea>

        </div>


        <button type="submit" class="btm btn-primary" >save</button>
    </form>


    @endsection
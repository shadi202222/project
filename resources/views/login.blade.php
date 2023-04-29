@extends('layouts.master1')
@section('subject')
    login
@endsection

@section('title')
    login
@endsection




@section('content')
    <form style="margin-top:100px" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">

        <div class="form-group">
            <p dir="rtl">  <label for="UserName">نام کاربری</label></p>
            <input type="text" class="form-control" id="text" name="UserName" value="<?php echo isset($_POST['UserName']) ? $_POST['UserName'] :''?>">
            <?php echo isset($UserName_error) ? "<small id='emailHelp' class='form-text text-danger'> $UserName_error </small> " : ''; ?>
        </div>


        <div class="form-group">
            <p dir="rtl"> <label for="password">کلمه عبور</label></p>
            <input type="password" class="form-control" id="Password" name="Password" >
            <?php echo isset($Password_error) ? "<small id='emailHelp' class='form-text text-danger'> $Password_error </small> " : ''; ?>
        </div>


        <button type="submit" class="form-control btn btn-primary"  style="margin-top:20px" >ورود</button>
    </form>
 @endsection
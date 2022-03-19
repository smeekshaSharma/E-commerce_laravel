@extends('master')
@section("content")
<div class="container custom-login">
<img src="https://www.epicunicorn.com/wp-content/uploads/2020/02/Types-of-E-commerce.png" style="float:left;height:50vh;width: 500px;">
    <div class="row" style="margin-left:300px";>
        <div class="col-sm-7 col-sm-offset-2">
            <form action="login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" style="width:100%" name="email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" style="width:100%" name="password">
                </div>
            <button type="submit" style="margin-top:30px;" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
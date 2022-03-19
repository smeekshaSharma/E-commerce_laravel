@extends('master')
@section("content")
<div class="container custom-login">
<img src="https://www.epicunicorn.com/wp-content/uploads/2020/02/Types-of-E-commerce.png" style="float:left;height:50vh;width: 500px;">
    <div class="row" style="margin-left:300px;">
        <div class="col-sm-6 col-sm-offset-2">
            <form action="register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                    <input type="text" class="form-control" id="name" style="width:100%" name="name" placeholder="User Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile" style="width:100%" name="mobile" placeholder="Mobile Number">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" style="width:100%" name="address" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" style="width:100%" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" style="width:100%" name="password" placeholder="Password">
                </div>
            <a href="/logout" style="margin-left:80px;margin-bottom:30px;margin-top:30px;" class="btn btn-primary">Login</a>
            <button type="submit" style="margin-left:80px;margin-bottom:30px;margin-top:30px;" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection
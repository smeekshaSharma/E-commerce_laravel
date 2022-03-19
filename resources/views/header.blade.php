<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total=ProductController::cartItem();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Document</title>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">E-commerce</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="/myorders">Orders</a></li>
    </ul>
    <form action="/search" class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" name="query" class="form-control search-box" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form>
    <div class="cart" style="display:inline-block;float:right;">
    <a href="/cartlist" style="color:white;font-size:15px;">Cart({{$total}})</a>
    <a style="margin-left:20px;color:white;" href="/register">Register</a>
    @if(Session::has('user'))
    <li class="dropdown" style="display:inline-block;margin-left:20px;">
        <a class="dropdown-toggle"style="color:white;" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
        <span class="caret"></span></a></li><br>
        <a style="color:white;" href="/logout">Logout</a>
        <a style="margin-left:20px;color:white;" href="/register">Register</a>
        <!-- <ul class="dropdown-menu">
          <a href="/logout">Logout</a></li>
          <a href="/register">Register</a></li>
        </ul>
      </li>
      @else
        <li><a style="color:white" href="/login">Login</a></li>
      @endif
  </ul> -->
    </div>
  </div>
</nav>
</body>
</html>
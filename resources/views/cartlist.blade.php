@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h3>Result for Products</h3>
            <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
            @foreach($products as $item)
            <div class="row search-item cart-list-divider">
                <div class="col-sm-4">
                <a href="detail/{{$item['id']}}">
                <img class="trending-image" src="{{$item['gallery']}}">
                </a>
                </div>
                <div class="col-sm-3">
                <div class="">
                    <h3>{{$item['name']}}</h3>
                    <h5>{{$item['description']}}</h5>
                </div>
                </a>
                </div>
                <div class="col-sm-3">
                <a href="/removecart/{{$item['id']}}" class="btn btn-warning">Remove to Cart</a>
                </div>
                <a class="btn btn-success" href="ordernow/{{$item['id']}}">Order Now</a><br><br>
            </div>
        @endforeach
        </div>

    </div>
</div>
@endsection
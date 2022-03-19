@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h3>My Orders</h3>
            <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
            @foreach($orders as $item)
            <div class="row search-item cart-list-divider">
                <div class="col-sm-4">
                <a href="detail/{{$item['id']}}">
                <img class="trending-image" src="{{$item['gallery']}}">
                </a>
                </div>
                <div class="col-sm-3">
                <div class="">
                    <h3>Name : {{$item->name}}</h3>
                    <h5>Delivery Status : {{$item->status}}</h5>
                    <h5>Address : {{$item->address}}</h5>
                    <h5>Payment Status : {{$item->payment_status}}</h5>
                    <h5>Payment Method : {{$item->payment_method}}</h5>
                </div>
                </div>
            </div>
        @endforeach
        </div>

    </div>
</div>
@endsection
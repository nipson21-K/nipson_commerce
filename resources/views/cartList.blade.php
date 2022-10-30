@extends('master')

@section('content')
<div class="container">

    <!--TRENDING PRODUCTS-->
    @foreach($product as $items)
    <div class="card" style="width: 18rem; float:left; margin:30px; background:grey;">
        <a href="detail/{{$items->id}}">
            <img class="card-img-top" src="{{$items->gallery}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$items->name}}</h5>
                <p class="card-text"> {{$items->description}}</p>

            </div>
        </a>

        <a class="bg-light" href="removeCart/{{$items->cartId}}">Remove</a>
        <a class="bg-light" href="orderNow">Order now</a>
    </div>
    @endforeach



</div>
@endsection
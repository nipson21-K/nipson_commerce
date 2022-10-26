@extends('master')

@section('content')
<div class="container">

    <!--PRODUCT DETAILS-->

    <div class="card" style="width: 18rem; float:left; margin:30px; background:grey;">

        <img class="card-img-top" src="{{$product['gallery']}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$product['name']}}</h5>
            <p class="card-text"> {{$product['description']}}</p>
            <a href="/productcontroller">Go back</a>
            <br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                <button>Add to cart</button>
            </form>

            <br>
            <button>Buy now</button>
        </div>
    </div>



</div>
@endsection
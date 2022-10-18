@extends('master')

@section('content')
<div class="container">

    <!--SEARCHED PRODUCTS-->
    <h2>Result for Searched Products</h2>
    @foreach($product as $items)
    <div class="card" style="width: 18rem; float:left; margin:30px; background:grey;">
        <a href="detail/{{$items['id']}}">
            <img class="card-img-top" src="{{$items['gallery']}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$items['name']}}</h5>
                <p class="card-text"> {{$items['description']}}</p>

            </div>
        </a>
    </div>
    @endforeach

</div>
@endsection
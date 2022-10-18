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
        </div>
    </div>



</div>
@endsection
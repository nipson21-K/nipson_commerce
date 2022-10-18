@extends('master')

@section('content')
<div class="container">
    <!--SLIDER IMG-->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach($product as $items)
            <div class="item {{$items['id']==1 ? 'active' : ''}}">
                <a href="detail/{{$items['id']}}">
                    <img src=" {{$items['gallery']}}" alt="Los Angeles">
                    <h1>{{$items['name']}}</h1>
                    <p>{{$items['description']}}</p>
                </a>
            </div>
            @endforeach

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--TRENDING PRODUCTS-->
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
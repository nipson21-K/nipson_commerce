<?php

use App\Http\Controllers\ProductController;

$total=0;
if(Session::has('user'))
{
$total=ProductController::cartItem();
}

?>

<nav class="navbar navbar-expand-lg bg-light header">
    <div class="container-fluid">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        @if(Session::has('user'))
                        {{Session::get('user')['name']}}
                        @endif
                    </a>


                    <ul class="dropdown-menu">
                        @if(Session::has('user'))
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        @else
                        <li><a class="dropdown-item" href="/login">Login</a></li>
                        @endif
                    </ul>
                </li>
            </ul>

            <form action="/search" class="d-flex" role="search">
                <input class="form-control me-2" style="width:50%" name="query" type="search" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <a class="navbar-brand" href="/cartList">Cart ({{$total}})</a>



        </div>
    </div>
</nav>
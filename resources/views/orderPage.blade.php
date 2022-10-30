@extends('master')

@section('content')
<div class="container">

    <!--ORDER PAGE -->

    <!--ORDER COSTS -->

    <table class="table">
        <thead>
            <tr>

                <th scope="col">Amount</th>
                <td>{{$totalPrice}}</td>

            </tr>

            <tr>
                <th scope="row">Tax</th>
                <td>10</td>

            </tr>
            <tr>
                <th scope="row">Delivery</th>
                <td>0</td>

            </tr>
            <tr>
                <th scope="row">Total Price</th>
                <td>{{$totalPrice + 10}}</td>

            </tr>
        </thead>
    </table>

    <!--ORDERED USER'S DETAILS -->
    <form action="">
        <div class="form-group">

            <textarea class="form-control" id="exampleFormControlTextarea3" rows="7">Enter you address</textarea>
        </div>


        <div class="form-group">
            <label for="">Payment method</label>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>
                <span> Online
                    Payment </span>

            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2"> <span> EMI
                    Payment
                </span>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" id="radio3"> <span>Payment on delivery </span>

            </div>

        </div>
        <button type="submit">Submit</button>
    </form>
</div>
@endsection
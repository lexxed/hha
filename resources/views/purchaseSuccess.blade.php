@extends('master')

@section('content')

    <div class="container">
        <p>
        	<a href="{{ url('shop') }}">Home</a> / 
        	<a href="{{ url('cart') }}">Cart</a> / 
            <a href="{{ url('checkout') }}">Customer Information</a> / 
        	Order Confirmation
        </p>
        <h1>Order Confirmation</h1>

        Thank you for your order.

        You can track your orders here.
        <br>
        Continue Shopping.




        </div><!-- row -->

    </div><!-- container -->
@endsection                
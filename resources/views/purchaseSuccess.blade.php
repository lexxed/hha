@extends('master')

@section('content')

    <div class="container">
        <p>
        	<a href="{{ url('/') }}">Home</a> / 
        	<a href="{{ url('cart') }}">Cart</a> / 
            <a href="{{ url('checkout') }}">Customer Information</a> / 
        	Order Confirmation
        </p>
        <h1>Order Confirmation</h1>

        Thank you for your order.

        You can track your orders at <a href="{{ url('track-order') }}">Track your order page</a>
        <br><br>
        <a href="{{ url('shop') }}">Click here to continue shopping</a>
        <br>

    </div><!-- container -->
    <div class="spacer"></div>
@endsection                
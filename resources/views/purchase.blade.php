@extends('master')

@section('content')

    <div class="container">
        <p>
        	<a href="{{ url('shop') }}">Home</a> / 
        	<a href="{{ url('cart') }}">Cart</a> / 
            <a href="{{ url('checkout') }}">Customer Information</a> / 
        	Shipping & Payment
        </p>
        <h1>Shipping & Payment</h1>

        <b>Shipping Address</b><br>
        {{ Session::get('customerinformation')->blk }} {{ Session::get('customerinformation')->street }}<br>
        {{ Session::get('customerinformation')->building }}<br>
        #{{ Session::get('customerinformation')->unit }}<br>
        Postal Code {{ Session::get('customerinformation')->postalcode }}

        <br><br>

        {{--
        @foreach (Cart::content() as $item)
            {{ dump($item) }}
            <br>name: {{ $item->name }} 
        @endforeach

        cart total: 
        ${{ Cart::total()*100 }}
        --}}

        
        <div class="row">
	        <div class="col-md-6">

            <b>Credit Card Payment</b><img src="{{ asset('img/lock.png') }}" alt="lock" class="img-thumbnail img-thumbnail-noborder">
            <br><br>

            <form action="/purchase" method="POST">
                {{ csrf_field() }}
              <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="{{ config('services.stripe.key') }}"
                data-amount="{{ Cart::total()*100 }}"
                data-name="HHA Royal Jelly Paper Pte Ltd"
                data-description="SGD{{ Cart::total() }}"
                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                data-locale="auto"
                data-currency="sgd">
              </script>
            </form>
            <br><br>
            <img src="{{ asset('img/icon-amex.png') }}" alt="lock" class="img-thumbnail img-thumbnail-noborder">
            <img src="{{ asset('img/icon-mastercard.png') }}" alt="lock" class="img-thumbnail img-thumbnail-noborder">
            <img src="{{ asset('img/icon-visa.png') }}" alt="lock" class="img-thumbnail img-thumbnail-noborder">

                

            </div><!-- col-md-6 -->
        </div><!-- row -->

        <div class="spacer"></div>

    </div><!-- container -->
@endsection                
@extends('master')

@section('content')

    <div class="container">
        <p>
        	<a href="{{ url('shop') }}">Home</a> / 
        	<a href="{{ url('cart') }}">Cart</a> / 
            <a href="{{ url('checkout') }}">Customer Information</a> / 
        	Payment Method
        </p>
        <h1>Payment Method</h1>

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

                <form action="/purchase" method="POST">

                    {{ csrf_field() }}

                  <script
                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="{{ config('services.stripe.key') }}"
                    data-amount="{{ Cart::total()*100 }}"
                    data-name="HHA Royal Pte Ltd"
                    data-description="SGD{{ Cart::total() }}"
                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                    data-locale="auto"
                    data-currency="sgd">
                  </script>
                </form>



            </div><!-- col-md-6 -->
        </div><!-- row -->

    </div><!-- container -->
@endsection                
@extends('master')

@section('title', 'HHA Royal Jelly Paper 100pcs Wholesale Prices HHA&#174;')
@section('description', 'Buy HHA Royal Jelly Paper Free Shipping at Bulk Prices. Makeup Remover and Cleanser made of Royal Jelly')

@section('content')

    <div class="container">
        <p><a href="{{ url('/shop') }}">Products</a> / {{ $product->name }}</p>
        <h1>{{ $product->name }}</h1>

        <hr>

        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('img/' . $product->image) }}" alt="product" class="img-responsive">
            </div>


            <div class="col-md-8">
                <h3>SGD {{ $product->price }}</h3>
                <form action="{{ url('/cart') }}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <input type="submit" class="btn btn-success btn-lg" value="Add to Cart">
                </form>
                {{--
                <form action="{{ url('/wishlist') }}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <input type="submit" class="btn btn-primary btn-lg" value="Add to Wishlist">
                </form>
                --}}
                <br><br>
                {{ $product->description }}<br><br>
                <img src="{{ asset('img/wepayshippingsmall.png') }}" alt="we pay shipping" class="img-thumbnail img-thumbnail-noborder">

            </div> <!-- end col-md-8 -->
        </div> <!-- end row -->

        <br><br>

        <div class="row">
            <div class="col-md-8">

                @foreach ($product_images_array as $image)
                        <img src="{{ asset($image) }}" alt="product images" class="img-thumbnail"><br><br>
                @endforeach

            </div>    
        </div>
        <div class="row">
            <div class="col-md-8">       

                @include('partials.' . $product->slug)

            </div> <!-- end col-md-8 -->
        </div>                      
       
        <div class="row">
            <h3>You may also like...</h3>

            @foreach ($interested as $product)
                <div class="col-md-3">
                    <div class="thumbnail">
                        <div class="caption text-center">
                            <a href="{{ url('shop', [$product->slug]) }}"><img src="{{ asset('img/' . $product->image) }}" alt="product" class="img-responsive"></a>
                            <a href="{{ url('shop', [$product->slug]) }}"><h3>{{ $product->name }}</h3>
                            <p>SGD{{ $product->price }}</p>
                            </a>
                        </div> <!-- end caption -->

                    </div> <!-- end thumbnail -->
                </div> <!-- end col-md-3 -->
            @endforeach

        </div> <!-- end row -->        

        <div class="spacer"></div>


    </div> <!-- end container -->

@endsection

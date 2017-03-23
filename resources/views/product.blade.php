@extends('master')

@section('title', 'HHA Royal Jelly Paper 100pcs Wholesale Prices HHA&#174;')
@section('description', 'Buy HHA Royal Jelly Paper Free Shipping at Bulk Prices.')

@section('content')

    <div class="container">
        <p><a href="{{ url('/shop') }}">Shop</a> / {{ $product->name }}</p>
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

                <form action="{{ url('/wishlist') }}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <input type="submit" class="btn btn-primary btn-lg" value="Add to Wishlist">
                </form>
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
                <b>Easy-to-carry:</b><br>
                The HHA Facial Paper can be easily carried in bags to cleanse and refresh your skin anytime anywhere, at the office or on a trip.
                <br><br>
                <b>Deep-cleaning:</b><br>
                The Hamamelis Virginiana extract produces rich and delicate foam, thoroughly removing oil,dirt, dead skin and cosmetic residues from not only the outermost, but also the innermost part of skin, and making your skin fresh and clean.
                <br><br>
                <b>Mild caring:</b><br>
                Natural bee propolis, royal jelly and plant extracts are integrated into a mind and non-irritating product even suitable for babies; naturally refreshing and confirming, it can be used for tender parts like lips and eyes and is undoubtedly a must-have for sensitive skins.
                <br><br>
                <b>Thorough Moisturizing:</b><br>
                With the magic of Aloe Barbadensis, the water molecules are sent to reach every cell deep in the skin, replenishing you skin like a clean stream; even the driest skin can be nourished and moisturized for 24 hours, which completely renews and revitalizes your skin.
                <br><br>
                <b>Specifications</b><br>
                76mm x 76mm x 42mm<br>
                50 pieces / box
                <br><br>
                <b>Ingredients</b><br>
                Hamamelis Virginiana extract, Natural bee propolis,  Aloe Barbadensis
                <br><br>      
            </div> <!-- end col-md-8 -->
        </div>                      

        <div class="spacer"></div>
        {{-- 
        <div class="row">
            <h3>You may also like...</h3>

            @foreach ($interested as $product)
                <div class="col-md-3">
                    <div class="thumbnail">
                        <div class="caption text-center">
                            <a href="{{ url('shop', [$product->slug]) }}"><img src="{{ asset('img/' . $product->image) }}" alt="product" class="img-responsive"></a>
                            <a href="{{ url('shop', [$product->slug]) }}"><h3>{{ $product->name }}</h3>
                            <p>{{ $product->price }}</p>
                            </a>
                        </div> <!-- end caption -->

                    </div> <!-- end thumbnail -->
                </div> <!-- end col-md-3 -->
            @endforeach

        </div> <!-- end row -->
        <div class="spacer"></div>        
        --}}

        <div class="spacer"></div>


    </div> <!-- end container -->

@endsection

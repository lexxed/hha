@extends('master')

@section('title', config('constants.brandName'))
@section('description', 'HHA Royal Jelly Paper. Best Selling Make Up Remover.')

@section('content')

    <a href="{{ url('/shop/royal-jelly') }}">
        <img src="{{ asset('img/banner.png') }}" alt="product images" class="img-thumbnail img-thumbnail-noborder">
    </a>
    <br><br>
    <div class="container">  

        <div class="row">
            <div class="col-md-8">
                <img src="{{ asset('img/usagekorean.png') }}" alt="product images" class="img-thumbnail"><br><br>

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

                <img src="{{ asset('img/hha/002.jpg') }}" alt="product images" class="img-thumbnail"><br><br>
                <img src="{{ asset('img/hha/003.jpg') }}" alt="product images" class="img-thumbnail"><br><br>
            </div> <!-- end col-md-8 -->

            <div class="col-md-8" style="font-size:25px;">
                SGD 39.99
                <form action="{{ url('/cart') }}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="9">
                    <input type="hidden" name="name" value="hha">
                    <input type="hidden" name="price" value="39.99">
                    <input type="submit" class="btn btn-success btn-lg" value="Buy Now">
                </form>  
                <br><br>
                <img src="{{ asset('img/wepayshippingsmall.png') }}" alt="we pay shipping" class="img-thumbnail img-thumbnail-noborder">
                
            </div> <!-- end col-md-8 -->
        </div> <!-- end row -->   

        <br><br>     



    </div> <!-- end container -->

@endsection

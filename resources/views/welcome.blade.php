@extends('master')

@section('title', 'HHA Royal Jelly Paper reviews, photo | Wholesale Prices HHA&#174;')
@section('description', 'Free Shipping and Returns. #1 Best Selling Portable Oil Cleanser and Makeup Remover that&#039;s gentle on the skin. Botanical Formula, Antibacterial')
       
@section('content')

    <a href="{{ url('/shop/royal-jelly') }}">
        <img src="{{ asset('img/banner.png') }}" alt="product images" class="img-thumbnail img-thumbnail-noborder">
    </a>
    <br><br>
    <div class="container">  

        <div class="row">
            <div class="col-md-8">

                <h1>HHA Royal Jelly Paper</h1>
                Korea's best selling 3-in-1 Make up removal, facial cleanser and skin care protection.The Royal Jelly deeply nourishes skin, improves skins radiance, leaving skin soft and fair. It also has excellent anti-bacterial properties.
                <br><br>

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
                    <input type="submit" class="btn btn-success btn-lg" value="Buy Now">
                </form>  
                <br><br>
                <img src="{{ asset('img/wepayshippingsmall.png') }}" alt="we pay shipping" class="img-thumbnail img-thumbnail-noborder">
            </div> <!-- end col-md-8 -->        


        </div> <!-- end row -->   

            <p><h1>User's Reviews</h1></p>
            <div class="row">
                <div class="col-md-2">
                    <img src="{{ asset('img/hha/sample001.png') }}" alt="users review photos" class="img-thumbnail"><br><br>
                </div>
                <div class="col-md-10">
                    <img src="{{ asset('img/stars.png') }}" alt="4 stars" class="img-thumbnail img-thumbnail-noborder">
                    <b>Satisfied with the Royal Jelly Paper</b><br>
                    Written by Jennif*** on 8 March 2017<br><br>
                    Useful in removing my make up. I keep it with me all the time.
                </div>
            </div>          
            <div class="row">
                <div class="col-md-2">
                    <img src="{{ asset('img/hha/sample002.png') }}" alt="users review photos" class="img-thumbnail"><br><br>
                </div>
                <div class="col-md-10">
                    <img src="{{ asset('img/stars.png') }}" alt="4 stars" class="img-thumbnail img-thumbnail-noborder">
                    <b>Very happy with the cleanser</b><br>
                    Written by Wendy W*** on 23 Feb 2017<br><br>
                    Love this stuff! Removes everything and doesn't irritate my oily skin.
                    This will get eye make up and everything off your skin.
                </div>
            </div>   
            <div class="row">
                <div class="col-md-2">
                    <img src="{{ asset('img/hha/sample003.png') }}" alt="users review photos" class="img-thumbnail"><br><br>
                </div>
                <div class="col-md-10">
                    <img src="{{ asset('img/stars.png') }}" alt="4 stars" class="img-thumbnail img-thumbnail-noborder">
                    <b>it's very easy to use</b><br>
                    Written by Joey Li**  on 11 Feb 2017<br><br>
                    I don't use other cleanser after using hha jelly paper. My skin looks so much better for cutting out normal foaming cleansers. It's softer and healthier looking. After cleansing my skin would often feel tight or just look irritated. I also never realised how bad my usual cleansers were at removing makeup until I tried this royal jelly paper. 
                </div>
            </div>    
            <div class="row">
                <div class="col-md-2">
                    <img src="{{ asset('img/hha/sample004.png') }}" alt="users review photos" class="img-thumbnail"><br><br>
                </div>
                <div class="col-md-10">
                    <img src="{{ asset('img/stars.png') }}" alt="4 stars" class="img-thumbnail img-thumbnail-noborder">
                    <b>Bought as gift for my friend</b><br>
                    Written by Tan Wei Ti** on 5 Jan 2017<br><br>
                    Delivery was fast. will buy again.
                </div>
            </div>                

        <br><br>     



    </div> <!-- end container -->

@endsection

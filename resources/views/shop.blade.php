@extends('master')

@section('title', 'Hhajellypaper.com: Cosmetics, Beauty Products, Slimming Products.')
@section('description', 'Discover the latest in Beauty & Slimming. Explore our unrivaled selection of makeup, skin care & emerging brands.')

@section('content')

    <div class="container">

        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
        @endif

        @foreach ($products->chunk(4) as $items)
            <div class="row">
                @foreach ($items as $product)
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <div class="caption text-center">
                                <a href="{{ url('shop', [$product->slug]) }}"><img src="{{ asset('img/' . $product->image) }}" alt="product" class="img-responsive"></a>
                                <a href="{{ url('shop', [$product->slug]) }}"><h3>{{ $product->name }}</h3>
                                <p>SGD {{ $product->price }}</p>
                                </a>
                            </div> <!-- end caption -->
                        </div> <!-- end thumbnail -->
                    </div> <!-- end col-md-3 -->
                @endforeach
            </div> <!-- end row -->
        @endforeach

    </div> <!-- end container -->

@endsection
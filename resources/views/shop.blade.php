@extends('frontend.layouts.master')

@section('content')
<div class="wrapper position-relative">
    <div class="container mt-5" style="min-height: 100vh">

        <div class="row py-5">
            <h1 class="text-white text-center">Take a quick Quiz and win Prizes</h1>
        </div>
        <div class="row mb-5">
            <div class="col-md-12 text-light d-flex justify-content-center">
                <ol>
                    <li class="h3">Chose one of our categories to take the quiz.</li>
                    <li class="h3">Get the wheel you want.</li>
                    <li class="h3">Win prizes for sure!</li>
                </ol>
            </div>
        </div>
        @if (session('error'))
        <div class="row d-flex justify-content-center">
            <div class="alert alert-danger col-md-4">
                {{ session('error') }}
            </div>
        </div>

        @endif
        @if (session('success'))
        <div class="row d-flex justify-content-center">
            <div class="alert alert-success col-md-4">
                {{ session('success') }}
            </div>
        </div>

        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="shopping-card-wrapper">
                    <div class="shoping-card">
                        <div class="shoping-card-body" style="display: flex; flex-wrap:wrap; justify-content:center">
                            @foreach ( $products as $product )
                            <div class="shoping-card-body-item"
                                style="width: 260px;  border:1px solid white; margin:10px;">
                                @foreach ($medias as $media)
                                @if ($media->product_id == $product->id)
                                <div class="prev-slide">
                                    <div class="product-thumb">
                                        <div style="min-height: 300px">
                                            <figure style="min-height: 300px">
                                                <img style="min-height: 300px; object-fit: contain;"
                                                    src="{{ URL::asset('storage/' .$media->path)}}" alt=""
                                                    class="img-fluid">
                                                <figcaption>
                                                    <ul class="list-unstyled">
                                                        {{-- <li><a
                                                                href="{{ URL::route('singlePost',['id'=> $post->id]) }}">View
                                                                Product</a>
                                                        </li> --}}
                                                    </ul>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                <form method="POST" action="{{ route('buy.product', $product->id) }}">
                                    @csrf
                                    <div class="shoping-card-body-item-header">
                                        <h3 class="text-light px-3 text-center">{{ $product->title }}</h3>
                                    </div>
                                    <div class="shoping-card-body-item-body">
                                        <p class="text-light px-3 text-center">{{ $product->description }}</p>
                                    </div>
                                    <div class="shoping-card-body-item-body">
                                        <p class="text-light px-3 text-center">Price: {{ $product->price }} credits</p>
                                    </div>
                                    <div class="d-flex justify-content-center m-2">
                                        <button type="submit" class="btn btn-success">Buy Now</button>
                                    </div>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

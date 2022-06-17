@extends('frontend.layouts.master')
<style>
    .nav-pills>li.active>a,
    .nav-pills>li.active>a:focus,
    .nav-pills>li.active>a:hover {
        color: #fff !important;
        background-color: #3eb733 !important;
    }
</style>
@section('content')
<div class="wrapper position-relative">
    <div class="container mt-5" style="min-height: 100vh">

        <div class="row py-5">
            <h1 class="text-white text-center">Shop</h1>
        </div>
        <div class="row mb-5">
            <div class="col-md-12 text-light d-flex justify-content-center">
                <ul>
                    <li class="h3" style="list-style:none">You can exchange your tickets in shop.</li>
                    <li class="h3" style="list-style:none">Select your ticket category to get products.</li>
                </ul>
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
        <div id="exTab1" class="container">
            <ul class="nav nav-pills">
                <li class="active">
                    <a class="text-light " href="#1a" data-toggle="tab">Blue</a>
                </li>
                <li><a class="text-light" href="#2a" data-toggle="tab">Purple</a>
                </li>
                <li><a class="text-light" href="#3a" data-toggle="tab">Pink</a>
                </li>
                <li><a class="text-light" href="#4a" data-toggle="tab">Green</a>
                </li>
                <li><a class="text-light" href="#5a" data-toggle="tab">Turquoise</a>
                </li>
                <li><a class="text-light" href="#6a" data-toggle="tab">Yellow</a>
                </li>
                <li><a class="text-light" href="#7a" data-toggle="tab">Gray</a>
                </li>
                <li><a class="text-light" href="#8a" data-toggle="tab">Red</a>
                </li>
            </ul>

            <div class="tab-content clearfix">
                <div class="tab-pane active" id="1a">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="shopping-card-wrapper">
                                <div class="shoping-card">
                                    <div class="shoping-card-body"
                                        style="display: flex; flex-wrap:wrap; justify-content:center">
                                        @foreach ( $products as $product )
                                        @if ($product->category == 'Blue')
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
                                                    <p class="text-light px-3 text-center">{{ $product->description }}
                                                    </p>
                                                </div>
                                                <div class="shoping-card-body-item-body">
                                                    <p class="text-light px-3 text-center">Price: {{ $product->price }}
                                                        credits</p>
                                                </div>
                                                <div class="d-flex justify-content-center m-2">
                                                    <button type="submit" class="btn btn-success">Buy Now</button>
                                                </div>
                                            </form>
                                        </div>
                                        @endif

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="2a">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="shopping-card-wrapper">
                                <div class="shoping-card">
                                    <div class="shoping-card-body"
                                        style="display: flex; flex-wrap:wrap; justify-content:center">
                                        @foreach ( $products as $product )
                                        @if ($product->category == 'Purple')
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
                                                    <p class="text-light px-3 text-center">{{ $product->description }}
                                                    </p>
                                                </div>
                                                <div class="shoping-card-body-item-body">
                                                    <p class="text-light px-3 text-center">Price: {{ $product->price }}
                                                        credits</p>
                                                </div>
                                                <div class="d-flex justify-content-center m-2">
                                                    <button type="submit" class="btn btn-success">Buy Now</button>
                                                </div>
                                            </form>
                                        </div>
                                        @endif

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="3a">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="shopping-card-wrapper">
                                <div class="shoping-card">
                                    <div class="shoping-card-body"
                                        style="display: flex; flex-wrap:wrap; justify-content:center">
                                        @foreach ( $products as $product )
                                        @if ($product->category == 'Pink')
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
                                                    <p class="text-light px-3 text-center">{{ $product->description }}
                                                    </p>
                                                </div>
                                                <div class="shoping-card-body-item-body">
                                                    <p class="text-light px-3 text-center">Price: {{ $product->price }}
                                                        credits</p>
                                                </div>
                                                <div class="d-flex justify-content-center m-2">
                                                    <button type="submit" class="btn btn-success">Buy Now</button>
                                                </div>
                                            </form>
                                        </div>
                                        @endif

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="4a">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="shopping-card-wrapper">
                                <div class="shoping-card">
                                    <div class="shoping-card-body"
                                        style="display: flex; flex-wrap:wrap; justify-content:center">
                                        @foreach ( $products as $product )
                                        @if ($product->category == 'Green')
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
                                                    <p class="text-light px-3 text-center">{{ $product->description }}
                                                    </p>
                                                </div>
                                                <div class="shoping-card-body-item-body">
                                                    <p class="text-light px-3 text-center">Price: {{ $product->price }}
                                                        credits</p>
                                                </div>
                                                <div class="d-flex justify-content-center m-2">
                                                    <button type="submit" class="btn btn-success">Buy Now</button>
                                                </div>
                                            </form>
                                        </div>
                                        @endif

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="5a">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="shopping-card-wrapper">
                                <div class="shoping-card">
                                    <div class="shoping-card-body"
                                        style="display: flex; flex-wrap:wrap; justify-content:center">
                                        @foreach ( $products as $product )
                                        @if ($product->category == 'Turquoise')
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
                                                    <p class="text-light px-3 text-center">{{ $product->description }}
                                                    </p>
                                                </div>
                                                <div class="shoping-card-body-item-body">
                                                    <p class="text-light px-3 text-center">Price: {{ $product->price }}
                                                        credits</p>
                                                </div>
                                                <div class="d-flex justify-content-center m-2">
                                                    <button type="submit" class="btn btn-success">Buy Now</button>
                                                </div>
                                            </form>
                                        </div>
                                        @endif

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="6a">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="shopping-card-wrapper">
                                <div class="shoping-card">
                                    <div class="shoping-card-body"
                                        style="display: flex; flex-wrap:wrap; justify-content:center">
                                        @foreach ( $products as $product )
                                        @if ($product->category == 'Yellow')
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
                                                    <p class="text-light px-3 text-center">{{ $product->description }}
                                                    </p>
                                                </div>
                                                <div class="shoping-card-body-item-body">
                                                    <p class="text-light px-3 text-center">Price: {{ $product->price }}
                                                        credits</p>
                                                </div>
                                                <div class="d-flex justify-content-center m-2">
                                                    <button type="submit" class="btn btn-success">Buy Now</button>
                                                </div>
                                            </form>
                                        </div>
                                        @endif

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="7a">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="shopping-card-wrapper">
                                <div class="shoping-card">
                                    <div class="shoping-card-body"
                                        style="display: flex; flex-wrap:wrap; justify-content:center">
                                        @foreach ( $products as $product )
                                        @if ($product->category == 'Gray')
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
                                                    <p class="text-light px-3 text-center">{{ $product->description }}
                                                    </p>
                                                </div>
                                                <div class="shoping-card-body-item-body">
                                                    <p class="text-light px-3 text-center">Price: {{ $product->price }}
                                                        credits</p>
                                                </div>
                                                <div class="d-flex justify-content-center m-2">
                                                    <button type="submit" class="btn btn-success">Buy Now</button>
                                                </div>
                                            </form>
                                        </div>
                                        @endif

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="8a">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="shopping-card-wrapper">
                                <div class="shoping-card">
                                    <div class="shoping-card-body"
                                        style="display: flex; flex-wrap:wrap; justify-content:center">
                                        @foreach ( $products as $product )
                                        @if ($product->category == 'Red')
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
                                                    <p class="text-light px-3 text-center">{{ $product->description }}
                                                    </p>
                                                </div>
                                                <div class="shoping-card-body-item-body">
                                                    <p class="text-light px-3 text-center">Price: {{ $product->price }}
                                                        credits</p>
                                                </div>
                                                <div class="d-flex justify-content-center m-2">
                                                    <button type="submit" class="btn btn-success">Buy Now</button>
                                                </div>
                                            </form>
                                        </div>
                                        @endif

                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
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
        </div> --}}
    </div>
    @endsection

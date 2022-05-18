@extends('Frontend.layouts.master')
@section('content')
<div class="wrapper position-relative">
    <div class="container mt-5" style="min-height: 100vh">

        <div class="row py-5">
            <h1 class="text-white">Take a quick Quiz and win Prizes</h1>
        </div>
        <div class="row mb-5">
            <div class="col-md-6 text-light">
                <ol>
                    <li class="h3">Chose one of our categories to take the quiz.</li>
                    <li class="h3">Get the wheel you want.</li>
                    <li class="h3">Win prizes for sure!</li>
                </ol>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/images/bronzewheel.png') }}">
            </div>
        </div>
        @php
        $wheels = ['BRONZE', 'SILVER', 'GOLDEN', 'SPINNIG'];
        @endphp
        <div class="row">
            @foreach ($categories as $key => $category)

            <div class="col-md-4">

                <div class="col-md-12">
                    <p class="text-light text-center">{{ $wheels[$key] }}</p>
                </div>
                <div class="card m-3 hover-shadow categories">
                    <a class="text-white py-2" href="{{ route('quiz',['id'=> $category->id]) }}">
                        <h3 class="text-center d-flex flex-column justify-content-center align-items-center ">
                            {{$category->name }}
                        </h3>
                    </a>
                </div>

            </div>
            @endforeach

        </div>
    </div>
    @endsection

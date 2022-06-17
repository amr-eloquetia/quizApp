@extends('frontend.layouts.master')
<link rel="stylesheet" href="{{ URL::asset('assets/css/bronzeWheel.css') }}">
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
                    <li class="h3">Earn credits by wheel.</li>
                    <li class="h3">Buy any product you want from shop!</li>
                </ol>
            </div>
            <div class="col-md-12">
                <div class="wheel" style="height:inherit !important">
                    <div id="mainbox" class="mainbox">
                        <div id="box" class="box">
                            <div class="box1">
                                <span class="span1">
                                    <p>10 Credits</p><b id="1"></b>
                                </span>
                                <span class="span2">
                                    <p>20 Credits</p><b id="2"></b>
                                </span>
                                <span class="span3">
                                    <p>30 Credits</p><b id="3"></b>
                                </span>
                                <span class="span4">
                                    <p>40 Credits</p><b id="4"></b>
                                </span>
                            </div>
                            <div class="box2">
                                <span class="span5">
                                    <p>50 Credits</p><b id="5"></b>
                                </span>
                                <span class="span6">
                                    <p>100 Credits</p><b id="6"></b>
                                </span>
                                <span class="span7">
                                    <p>150 Credits</p><b id="7"></b>
                                </span>
                                <span class="span8">
                                    <p>200 Credits</p><b id="8"></b>
                                </span>
                            </div>


                            <div class="box3">
                                <span class="span1">
                                    <p>10 Credits</p><b id="9"></b>
                                </span>
                                <span class="span2">
                                    <p>20 Credits</p><b id="10"></b>
                                </span>
                                <span class="span3">
                                    <p>30 Credits</p><b id="11"></b>
                                </span>
                                <span class="span4">
                                    <p>40 Credits</p><b id="12"></b>
                                </span>
                            </div>
                            <div class="box4">
                                <span class="span5">
                                    <p>50 Credits</p><b id="13"></b>
                                </span>
                                <span class="span6">
                                    <p>100 Credits</p><b id="14"></b>
                                </span>
                                <span class="span7">
                                    <p>150 Credits</p><b id="15"></b>
                                </span>
                                <span class="span8">
                                    <p>200 Credits</p><b id="16"></b>
                                </span>
                            </div>

                        </div>
                        <button id="spin-btn" class="spin" onclick="stop()">STOP</button>
                    </div>


                </div>
            </div>
        </div>
        {{-- @php
        $wheels = ['BRONZE', 'SILVER', 'GOLDEN', 'SPINNIG'];
        @endphp --}}
        <div class="row">
            @foreach ($categories as $key => $category)

            <div class="col-md-4">

                {{-- <div class="col-md-12">
                    <p class="text-light text-center">{{ $wheels[$key] }}</p>
                </div> --}}
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
    <script>
        intervalRandom = setInterval((function changeColor(){
            var randomId = Math.floor(Math.random() * 16) + 1;
            document.getElementById(randomId).style.backgroundColor = "rgb(255, 255, 0)";
            var interval2 = setInterval((() => document.getElementById(randomId).style.backgroundColor = "rgb(77, 74, 74)"), 1000);
            intervalClear2 = setInterval((() => clearInterval(interval2)), 1000);
        }), 1000);
    </script>

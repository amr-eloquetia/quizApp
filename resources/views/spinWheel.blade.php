@extends('frontend.layouts.master')
<link rel="stylesheet" href="{{ URL::asset('assets/css/goldenWheel.css') }}">

<style>
    .mainbox:after {
        content: "";
        position: absolute;
        top: 50%;
        right: -15px;
        width: 32px;
        height: 32px;
        background: url('/assets/images/Redarrow.png') no-repeat;
        background-size: 32px;
        transform: translateY(-50%);
    }

    /* .span1>b,
    .span2>b,
    .span3>b,
    .span4>b,
    .span5>b,
    .span6>b,
    .span7>b,
    .span8>b {
        display: none;
    } */
</style>
@section('content')
<div class="wrapper position-relative" style="min-height: 100vh">
    <div id="chart"></div>
    <div id="question">
        <h1></h1>
    </div>
    <div class="row mb-5 text-light">
        <div>
            <div class="col-md-12 mt-5 text-center">
                <div class="ms-5">
                    <h1>Here is your result!</h1>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center">
                <div class="ms-5 text-center">
                    <h3>You have a chance to win a prize from the wheel!</h3>
                    <p>Your Score : {{ $my_result->my_score }}</p>
                    <p>Press on "SPIN" and win prizes!</p>
                </div>
            </div>
            <div class="ms-5 text-center">
                <div id="countdown"></div>
            </div>
        </div>
    </div>
    <div id="prize-wrapper">
        <form id="prizeform" method="POST" action="{{ route('createPrize')}}" enctype="form-data">
            <div id="div1"></div>
            @csrf
            <div class="form-group" id="prize-form">
            </div>
            <div class="form-group">
                <input type="text" name="price" placeholder="price" value="{{ $prizes->price }}" style="display: none">
            </div>
            <div class="form-group" id="btn-wrapper"></div>
        </form>
    </div>
    <div id="btns-wrapper"></div>

    <div class="container wheel">
        <div id="mainbox" class="mainbox">
            <div id="box" class="box">
                <div class="box1">
                    <span class="span1">
                        <p>{{ $prizes->prize1 }}</p><b id="1"></b>
                    </span>
                    <span class="span2">
                        <p>{{ $prizes->prize2 }}</p><b id="2"></b>
                    </span>
                    <span class="span3">
                        <p>{{ $prizes->prize3 }}</p><b id="3"></b>
                    </span>
                    <span class="span4">
                        <p>{{ $prizes->prize4 }}</p><b id="4"></b>
                    </span>
                </div>
                <div class="box2">
                    <span class="span5">
                        <p>{{ $prizes->prize5 }}</p><b id="5"></b>
                    </span>
                    <span class="span6">
                        <p>{{ $prizes->prize6 }}</p><b id="6"></b>
                    </span>
                    <span class="span7">
                        <p>{{ $prizes->prize7 }}</p><b id="7"></b>
                    </span>
                    <span class="span8">
                        <p>{{ $prizes->prize8 }}</p><b id="8"></b>
                    </span>
                </div>


                <div class="box3">
                    <span class="span1">
                        <p>{{ $prizes->prize1 }}</p><b id="9"></b>
                    </span>
                    <span class="span2">
                        <p>{{ $prizes->prize2 }}</p><b id="10"></b>
                    </span>
                    <span class="span3">
                        <p>{{ $prizes->prize3 }}</p><b id="11"></b>
                    </span>
                    <span class="span4">
                        <p>{{ $prizes->prize4 }}</p><b id="12"></b>
                    </span>
                </div>
                <div class="box4">
                    <span class="span5">
                        <p>{{ $prizes->prize5 }}</p><b id="13"></b>
                    </span>
                    <span class="span6">
                        <p>{{ $prizes->prize6 }}</p><b id="14"></b>
                    </span>
                    <span class="span7">
                        <p>{{ $prizes->prize7 }}</p><b id="15"></b>
                    </span>
                    <span class="span8">
                        <p>{{ $prizes->prize1 }}</p><b id="16"></b>
                    </span>
                </div>
            </div>
            <button id="spin-btn" class="spin" onclick="spinIt()">SPIN</button>
        </div>


    </div>
    @endsection
    <script>
        function spinIt(){
            var x = 1024;
            var y = 9999;
            var deg = Math.floor(Math.random() * (y - x)) + y;
            var degRound = Math.round(deg/10)*22.5;



            var element = document.getElementById("mainbox");
            element.classList.remove("animate");
            setTimeout(function(){
                element.classList.add('animate');
            }, 5000);
            var total = "{{ $totalCosts }}";


            $remainderCheck = degRound % 360;
            if(total < 30000 && $remainderCheck >= 53 && $remainderCheck <= 76){
                degRoundNew = degRound + 22.5;
            }else{
                degRoundNew = degRound;
            }
            document.getElementById("box").style.transform = "rotate(" + degRoundNew + "deg)";

            $remainder = degRoundNew % 360;

            console.log($remainderCheck+"check");
            console.log($remainder+"real");
            console.log(degRound+"deg");
            console.log(degRoundNew+"degNew");


            var prize1 = "{{ $prizes->prize1 }}";
            var prize2 = "{{ $prizes->prize2 }}";
            var prize3 = "{{ $prizes->prize3 }}";
            var prize4 = "{{ $prizes->prize4 }}";
            var prize5 = "{{ $prizes->prize5 }}";
            var prize6 = "{{ $prizes->prize6 }}";
            var prize7 = "{{ $prizes->prize7 }}";
            var prize8 = "{{ $prizes->prize8 }}";



            if($remainder >= 0 && $remainder <= 11){
                $prize = prize4;
                $prize_id = 1;
            }else if($remainder >= 12 && $remainder <= 35){
                $prize = prize1;
                $prize_id = 2;
            }else if($remainder >= 33 && $remainder <= 52){
                $prize = prize4;
                $prize_id = 3;
            }else if($remainder >= 53 && $remainder <= 76){
                $prize = prize8;
                $prize_id = 4;
            }else if($remainder >= 77 && $remainder <= 100){
                $prize = prize1;
                $prize_id = 5;
            }else if($remainder >= 101 && $remainder <= 123){
                $prize = prize5;
                $prize_id = 6;
            }else if($remainder >= 124 && $remainder <= 146){
                $prize = prize1;
                $prize_id = 7;
            }else if($remainder >= 147 && $remainder <= 170){
                $prize = prize5;
                $prize_id = 0;
            }else if($remainder >= 171 && $remainder <= 194){
                $prize = prize3;
                $prize_id = 8;
            }else if($remainder >= 195 && $remainder <= 213){
                $prize = prize7;
                $prize_id = 9;
            }else if($remainder >= 214 && $remainder <= 238){
                $prize = prize3;
                $prize_id = 10;
            }else if($remainder >= 239 && $remainder <= 262){
                $prize = prize7;
                $prize_id = 11;
            }else if($remainder >= 263 && $remainder <= 280){
                $prize = prize2;
                $prize_id = 12;
            }else if($remainder >= 281 && $remainder <= 308){
                $prize = prize6;
                $prize_id = 13;
            }else if($remainder >= 309 && $remainder <= 332){
                $prize = prize2;
                $prize_id = 14;
            }else if($remainder >= 333 && $remainder <= 348){
                $prize = prize6;
                $prize_id = 15;
            }else{
                $prize = prize4;
                $prize_id = 35;
            }
            setTimeout(function(){
                createPrize($prize);
            }, 5000);
            document.getElementById("spin-btn").disabled = true;
        }


        // function createPrize($prize) {
        //         var formGroup = document.getElementById('prize-form');
        //         var form1 =document.getElementById('prizeform');
        //         var element1 = document.createElement("input");
        //         element1.id = "prize";
        //         var buttonWrapper = document.getElementById('btn-wrapper');
        //         var button1 = document.createElement("button");
        //         button1.id = "claim";
        //         const text1 = document.createTextNode("Claim your prize");
        //         button1.appendChild(text1);
        //         element1.value=$prize;
        //         element1.name="prize";
        //         formGroup.appendChild(element1);
        //         buttonWrapper.appendChild(button1);
        //         }

        function createPrize($prize) {
                var formGroup = document.getElementById('prize-form');
                var form1 =document.getElementById('prizeform');
                var element1 = document.createElement("input");
                element1.id = "prize";
                var btnsWrapper = document.getElementById('btns-wrapper');
                var button1 = document.createElement("button");
                var button2 = document.createElement("button");
                button2.id = "claim-replay";
                button1.id = "claim";
                const buttonText1 = document.createTextNode("Claim your prize");
                const buttonText2 = document.createTextNode("Claim and play again");
                button1.appendChild(buttonText1);
                button2.appendChild(buttonText2);
                element1.value=$prize;
                element1.name="prize";
                formGroup.appendChild(element1);

                form1.appendChild(button1);
                btnsWrapper.appendChild(button2);

                button2.onclick = function(){
                window.location.reload();
                }

            }
    </script>

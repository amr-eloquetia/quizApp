@extends('frontend.layouts.master')
<link rel="stylesheet" href="{{ URL::asset('assets/css/silverWheel.css') }}">
@section('content')
<div class="wrapper position-relative" style="min-height: 100vh">
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
                    <p>Follow the Yellow bulp and try to stop it on the prize you want.</p>
                    <p>If you dont press "STOP" within 30 seconds, it will stop automatically!</p>

                </div>
            </div>
            <div class="ms-5 text-center">
                <div id="countdown"></div>
            </div>
        </div>
    </div>
    <div style="height: 150px">
        <form id="prizeform" method="POST" action="{{ route('createPrize')}}" enctype="form-data">
            <div id="div1"></div>
            @csrf
            <div class="form-group" id="prize-form">
            </div>
            <div class="form-group">
                <input type="text" name="price" placeholder="price" value="{{ $prizes->price }}" style="display: none">
            </div>
        </form>
    </div>
    <div class="col-md-12 d-flex justify-content-center flex-wrap">
        @foreach ($medias as $media)
        <div class="col-md-2 justify-content-center">
            <img style="min-height: 100px; object-fit: cover;width:100%; max-height:200px"
                src="{{ URL::asset('storage/' .$media->path)}}" alt="" class="img-fluid">
            <div>
                <p class="text-center text-light prizeName mt-3" id="prizeName">{{ $media->prize_name }}</p>
            </div>
        </div>
        @endforeach
    </div>
    <div id="btns-wrapper" class="col-md-12"></div>
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
                        <p>{{ $prizes->prize8 }}</p><b id="16"></b>
                    </span>
                </div>
                <button id="spin-btn" class="spin" onclick="stop()">STOP</button>
            </div>

        </div>
    </div>
    @endsection
    <script>
        intervalRandom = setInterval((function changeColor(){
            var randomId = Math.floor(Math.random() * 16)+1;
            document.getElementById(randomId).style.backgroundColor = "rgb(255, 255, 0)";
            var interval2 = setInterval((() => document.getElementById(randomId).style.backgroundColor = "rgb(77, 74, 74)"), 500);
            intervalClear2 = setInterval((() => clearInterval(interval2)), 500);
            console.log(randomId);
        }), 500);

        var timeleft = 30;
        var downloadTimer = setInterval(function(){
        if(timeleft <= 1){
            clearInterval(downloadTimer);
            document.getElementById("countdown").innerHTML = "Finished";
            stop();
        } else {
            document.getElementById("countdown").innerHTML = timeleft + " seconds remaining";
        }
        timeleft -= 1;
        }, 1000);

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

        function stop(){
            clearInterval(intervalRandom);
            clearInterval(downloadTimer);
            intervalRandom = null;
            const choosenOne = [...document.querySelectorAll('b')].find(b => {
                return getComputedStyle(b).getPropertyValue("background-color") === 'rgb(255, 255, 0)';
            });
            console.log(choosenOne);
            setInterval((() =>document.getElementById(choosenOne.id).style.backgroundColor = "rgb(255, 255, 0)"), 10);
            setInterval((() =>document.getElementById(choosenOne.id).style.backgroundColor = "rgb(77, 74, 74)"), 15);
            $prize = document.getElementById(choosenOne.id).previousSibling.innerHTML;
            const newDiv = document.createElement("div");
            const newContent = document.createTextNode("Congratulations you won a ");
            newDiv.appendChild(newContent);
            document.getElementById("div1").appendChild(newDiv);
            document.getElementById("spin-btn").disabled = true;
            createPrize($prize);


            const prizeNames = document.getElementsByClassName('prizeName');
            console.log(prizeNames);
            console.log($prize);
            for (var i = 0; i < prizeNames.length; i++) {
                if (prizeNames[i].innerHTML === $prize) {
                    prizeNames[i].classList.add("prizeName-active");
                    console.log(prizeNames[i]);
                }
            }
        }

    </script>

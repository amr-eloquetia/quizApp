@extends('Frontend.layouts.master')
@section('content')
<div class="wrapper position-relative">
    {{-- <div class="container-fluid">
        <div class="row py-5">
            <div class="col-md-6">

                <div class="count_progress clip-1">
                    <span class="progress-left">
                        <span class="progress_bar"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress_bar"></span>
                    </span>
                    <div class="progress-value countdown_timer" data-countdown="2022/10/24">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container mb-5">
        <div class="row">
            <form class="form" id="wizard" method="POST" action="{{ route('endQuiz',['id' => $category->id]) }}">
                @csrf
                @foreach ($questions as $key => $question)

                <div class="col-md-12">
                    <div class="card m-3" style="border-radius: 12px; background-color:rgb(117, 10, 119)">
                        <div class="card-body text-light question-wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <h3 class="text-center">{{ $key+1 }} . {{ $question->question }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="answer_area">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="radio" name="question_id" value="{{ $question->id }}"
                                                        checked style="display: none">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group question-form-group">
                                                    <input type="radio" name="answerRight{{ $key }}"
                                                        value="{{ $question->rightAnswer }}" checked
                                                        style="display: none">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group question-form-group">
                                                    <input type="radio" name="answer{{ $key }}"
                                                        value="{{ $question->answer1 }}">
                                                    <label for="answer">{{ $question->answer1 }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group question-form-group">
                                                    <input type="radio" name="answer{{ $key }}"
                                                        value="{{ $question->answer2 }}">
                                                    <label for="answer">{{ $question->answer2 }}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group question-form-group">
                                                    <input type="radio" name="answer{{ $key }}"
                                                        value="{{ $question->answer3 }}">
                                                    <label for="answer">{{ $question->answer3 }}</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group question-form-group">
                                                    <input type="radio" name="answer{{ $key }}"
                                                        value="{{ $question->answer4 }}">
                                                    <label for="answer">{{ $question->answer4 }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center">
                        <div class="answer_option">
                            <button class="btn btn-success" type="submit">Finish</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!-- progress-bar -->

    <!-- Right-side-img -->
    {{-- <div class="right_bottom_img d-none d-lg-block">
        <img class="position-absolute" src="{{ asset('assets/images/bg_1.png') }}" alt="image-not-found">
    </div> --}}
</div>
@endsection

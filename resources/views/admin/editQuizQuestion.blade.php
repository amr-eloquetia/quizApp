@extends('admin.layouts.master')

@section('title', 'Edit Question')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <form action="{{ route('editQuizQuestion', $question->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('put') }}
                <div class="upload_modules">
                    <div class="row text-center">
                        <h3>{{ $question->question }}</h3>
                    </div><!-- ends: .module_title -->
                    @if(session()->has('alert'))
                    <div class="alert alert-success form-group">{{ session()->get('alert')['message'] }}</div>
                    @endif
                    <div class="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column ml-4">
                                    <label for="title">Category Id</label>
                                    <input type="text" id="product_name" name="category_id" class="p-3"
                                        placeholder="{{ $question->category_id }}">
                                </div>
                                @if($errors->has('name'))
                                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div><!-- ends: .col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column mr-4">
                                    <label for="Price">Question</label>
                                    <input type="text" id="product_price" name="question" class="p-3"
                                        placeholder="{{ $question->question }}">
                                </div>
                            </div>
                        </div>
                    </div><!-- ends: .modules__content -->
                </div><!-- ends: .upload_modules -->
                <div class="upload_modules pricing--info">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="price">Answer 1</label>
                                    <input type="text" name="answer1" class="p-3"
                                        placeholder="{{ $question->answer1 }}">
                                </div>
                            </div><!-- ends: .col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="price">Answer 2</label>
                                    <input type="text" name="answer2" class="p-3"
                                        placeholder="{{ $question->answer2 }}">
                                </div>
                            </div><!-- ends: .col-md-6 -->
                        </div><!-- ends: .row -->
                    </div><!-- ends: .col-md-12 -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="price">Answer 3</label>
                                    <input type="text" name="answer3" class="p-3"
                                        placeholder="{{ $question->answer3 }}">
                                </div>
                            </div><!-- ends: .col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="price">Answer 4</label>
                                    <input type="text" name="answer4" class="p-3"
                                        placeholder="{{ $question->answer4 }}">
                                </div>
                            </div><!-- ends: .col-md-6 -->
                        </div><!-- ends: .row -->
                    </div><!-- ends: .col-md-12 -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="price">Right Answer</label>
                                    <input type="text" name="rightAnswer" class="p-3"
                                        placeholder="{{ $question->rightAnswer }}">
                                </div>
                            </div><!-- ends: .col-md-6 -->
                        </div><!-- ends: .row -->
                    </div><!-- ends: .col-md-12 -->
                </div><!-- ends: .upload_modules -->
                <div class="row mt-4 d-flex justify-content-center">
                    <div class="col-md-2 ">
                        <button type="submit" class="btn btn-lg btn-primary m-right-15 col-md-12">Save</button>
                    </div>
                </div>
            </form>
        </div><!-- ends: .col-md-8 -->
    </div><!-- ends: .row -->
</div>
@endsection

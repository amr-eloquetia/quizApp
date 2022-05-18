@extends('admin.layouts.master')

@section('title', 'Edit Prize')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <form action="{{ route('admin.editPrize', $prize->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{ method_field('put') }}
                <div class="upload_modules">
                    <div class="row text-center">
                        <h3>{{ $prize->name }}</h3>
                    </div><!-- ends: .module_title -->
                    @if(session()->has('alert'))
                    <div class="alert alert-danger form-group">{{ session()->get('alert')['message'] }}</div>
                    @endif
                    <div class="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column ml-4">
                                    <label for="title">Prize Name</label>
                                    <input type="text" id="product_name" name="name" class="p-3"
                                        placeholder="{{ $prize->name }}">
                                </div>
                                @if($errors->has('name'))
                                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div><!-- ends: .col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column mr-4">
                                    <label for="Price">Price</label>
                                    <input type="text" id="product_price" name="price" class="p-3"
                                        placeholder="{{ $prize->price }}">
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
                                    <label for="price">Prize1</label>
                                    <input type="text" name="prize1" class="p-3" placeholder="{{ $prize->prize1 }}">
                                    <input type="file" name="images[]" class="p-3" placeholder="">
                                </div>

                            </div><!-- ends: .col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="price">Prize2</label>
                                    <input type="text" name="prize2" class="p-3" placeholder="{{ $prize->prize2 }}">
                                    <input type="file" name="images[]" class="p-3" placeholder="">

                                </div>
                            </div><!-- ends: .col-md-6 -->
                        </div><!-- ends: .row -->
                    </div><!-- ends: .col-md-12 -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="price">Prize3</label>
                                    <input type="text" name="prize3" class="p-3" placeholder="{{ $prize->prize3 }}">
                                    <input type="file" name="images[]" class="p-3" placeholder="">

                                </div>
                            </div><!-- ends: .col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="price">Prize4</label>
                                    <input type="text" name="prize4" class="p-3" placeholder="{{ $prize->prize4 }}">
                                    <input type="file" name="images[]" class="p-3" placeholder="">

                                </div>
                            </div><!-- ends: .col-md-6 -->
                        </div><!-- ends: .row -->
                    </div><!-- ends: .col-md-12 -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="price">Prize5</label>
                                    <input type="text" name="prize5" class="p-3" placeholder="{{ $prize->prize5 }}">
                                    <input type="file" name="images[]" class="p-3" placeholder="">

                                </div>
                            </div><!-- ends: .col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="price">Prize6</label>
                                    <input type="text" name="prize6" class="p-3" placeholder="{{ $prize->prize6 }}">
                                    <input type="file" name="images[]" class="p-3" placeholder="">

                                </div>
                            </div><!-- ends: .col-md-6 -->
                        </div><!-- ends: .row -->
                    </div><!-- ends: .col-md-12 -->
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="price">Prize7</label>
                                    <input type="text" name="prize7" class="p-3" placeholder="{{ $prize->prize7 }}">
                                    <input type="file" name="images[]" class="p-3" placeholder="">

                                </div>
                            </div><!-- ends: .col-md-6 -->
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="price">Prize8</label>
                                    <input type="text" name="prize8" class="p-3" placeholder="{{ $prize->prize8 }}">
                                    <input type="file" name="images[]" class="p-3" placeholder="">

                                </div>
                            </div><!-- ends: .col-md-6 -->
                        </div><!-- ends: .row -->
                    </div><!-- ends: .col-md-12 -->
                </div><!-- ends: .upload_modules -->
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

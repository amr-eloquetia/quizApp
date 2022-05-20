@extends('admin.layouts.master')

@section('title', 'Create Category')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <form action="{{ route('createCategory.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="upload_modules">
                    <div class="row text-center">
                        <h3>Create Category</h3>
                    </div><!-- ends: .module_title -->
                    @if(session()->has('alert'))
                    <div class="alert alert-success form-group">{{ session()->get('alert')['message'] }}</div>
                    @endif
                    <div class="">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="form-group d-flex flex-column ml-4">
                                    <label for="title">Category Name</label>
                                    <input type="text" id="product_name" name="name" class="p-3"
                                        placeholder="Category Name">
                                </div>
                                @if($errors->has('name'))
                                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div><!-- ends: .col-md-6 -->
                        </div>
                    </div><!-- ends: .modules__content -->
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

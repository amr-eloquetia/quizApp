@extends('admin.layouts.master')

@section('title', 'Edit User')

@section('content')
<div class="container">
    <form action="{{ route('admin.editUser', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('put') }}
        <div class="row">
            <div class="col-md-12">
                <div class="information_module">
                    <div class="row text-center mb-4">
                        <h3>Personal Information</h3>
                    </div>
                    @if(session()->has('alert'))
                    <div class="alert alert-danger form-group">{{ session()->get('alert')['message'] }}
                    </div>
                    @endif
                    <div class="information__set">
                        <div class="information_wrapper form--fields row">
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="username">Name
                                        <sup>*</sup>
                                    </label>
                                    <input type="text" id="acname" name="name" class="p-3" placeholder="First Name"
                                        value="{{ $user->name }}">
                                    @if($errors->has('name'))
                                    <div class="alert alert-danger">{{ $errors->first('name') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="emailad">Email Address
                                        <sup>*</sup>
                                    </label>
                                    <input type="text" id="email" class="p-3" name="email" placeholder="Email address"
                                        value="{{ $user->email }}">
                                    @if($errors->has('email'))
                                    <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="phone">Phone
                                        <sup>*</sup>
                                    </label>
                                    <input type="text" id="phone" name="phone" class="p-3" placeholder="Phone"
                                        value="{{ $user->phone }}">
                                    @if($errors->has('phone'))
                                    <div class="alert alert-danger">{{ $errors->first('phone') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="address">Address</label>
                                    <input type="text" id="address" name="address" class="p-3"
                                        value="{{ $user->address }}" placeholder="address">
                                    @if($errors->has('address'))
                                    <div class="alert alert-danger">{{ $errors->first('address') }}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group d-flex flex-column">
                                    <label for="tokens">Tokens
                                        <sup></sup>
                                    </label>
                                    <input type="text" id="tokens" name="tokens" class="p-3" placeholder="tokens"
                                        value="{{ $user->tokens }}">
                                    @if($errors->has('tokens'))
                                    <div class="alert alert-danger">{{
                                        $errors->first('tokens')
                                        }}</div>
                                    @endif
                                </div>
                            </div>
                        </div><!-- ends: .information_wrapper -->
                    </div><!-- ends: .information__set -->
                </div><!-- ends: .information_module -->
            </div><!-- ends: .col-md-12 -->
            <div class="row mt-4 d-flex justify-content-center">
                <div class="col-md-2 ">
                    <button type="submit" class="btn btn-lg btn-primary m-right-15 col-md-12">Save</button>
                </div>
            </div>
        </div><!-- ends: .row -->
    </form><!-- end /form -->
</div><!-- ends: .container -->
@endsection

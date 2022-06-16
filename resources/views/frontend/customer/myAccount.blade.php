@extends('frontend.layouts.master')

@section('content')
<div class="wrapper">
    <div class="col-lg-12 mt-lg-0 mt-5 d-flex flex-column align-items-center">
        <div class="col-lg-4 text-light mt-5 mb-5 p-5 question-wrapper">
            @if(session()->has('success'))
            <div class="alert alert-success form-group">{{ session()->get('success')['message'] }}</div>
            @endif
            <div class="d-flex align-items-center justify-content-center">
                <h3 class="">Personal Details</h3>
            </div>
            <ul class="">
                <li class="d-flex border-bottom pt-3 ">
                    <p class="mx-1">Name : </p>
                    <p class="">{{Auth::user()->name}}</p>
                </li>
                <li class="d-flex border-bottom pt-3">
                    <p class="mx-1">Date of Birth : </p>
                    <p class="">15-03-1974</p>
                </li>
                <li class="d-flex border-bottom pt-3">
                    <p class="mx-1">Address : </p>
                    <p class="">{{Auth::user()->address}}</p>
                </li>
                <li class="d-flex border-bottom pt-3">
                    <p class="mx-1">Status : </p>
                    <p class=" status-active">Active</p>
                </li>
                <li class="d-flex border-bottom pt-3">
                    <p class="mx-1">Email : </p>
                    <p class="">{{Auth::user()->email}}</p>
                </li>
                <li class="d-flex border-bottom pt-3">
                    <p class="mx-1">Mobile : </p>
                    <p class="">{{Auth::user()->phone}}</p>
                </li>
            </ul>
            {{-- <div>
                <div>
                    <h4 class="text-center">My winnings</h4>
                </div>
                <p>Total Tokens Spent : {{ Auth::user()->tokens_spent }}</p>
                @if (count($my_winnings) > 0)
                <ul>
                    @foreach ($my_winnings as $my_winning)
                    <li class="d-flex">
                        <p>Prize : {{ $my_winning->prize }}</p>
                        <p class="mx-3">Date : {{ $my_winning->created_at }}</p>
                    </li>
                    @endforeach
                </ul>
                @else
                <p>You can see the prizes you won here!</p>
                @endif

            </div> --}}


            <div class="d-flex align-center justify-content-center">
                <h4>Edit your Info</h4>
            </div>
            @if(session()->has('error'))
            <div class="alert alert-danger form-group">{{ session()->get('error')['message'] }}</div>
            @endif
            <div class="account-form-wrapper ">
                <form method="POST" action="{{ route('editUser') }}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('put') }}
                    <div class="form-group d-flex flex-column">
                        <label>Name</label>
                        <input class="p-3 text-dark" type="text" name="name" id="name"
                            placeholder="{{Auth::user()->name}}">
                    </div>
                    <div class="form-group  d-flex flex-column">
                        <label>Address</label>
                        <input class="p-3 text-dark" type="text" name="address" id="address"
                            placeholder="{{Auth::user()->address}}">
                    </div>
                    <div class="form-group d-flex flex-column">
                        <label>Phone</label>
                        <input class="p-3 text-dark" type="text" name="phone" id="phone"
                            placeholder="{{Auth::user()->phone}}">
                    </div>
                    <div class="form-group d-flex flex-column">
                        <label>Email</label>
                        <input class="p-3 text-dark" type="email" name="email" id="email"
                            placeholder="{{Auth::user()->email}}">
                    </div>

                    <div class="form-group text-center mt-5">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

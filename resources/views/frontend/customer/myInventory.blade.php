@extends('frontend.layouts.master')

@section('content')
<div class="wrapper">
    <div class="col-md-12 mt-lg-0 mt-5 d-flex flex-column align-items-center">
        <div class="col-md-8 text-light mt-5 mb-5 p-5 question-wrapper">
            @if(session()->has('success'))
            <div class="alert alert-success form-group">{{ session()->get('success')['message'] }}</div>
            @endif
            <div class="row">
                <div>
                    <h4 class="text-center">My Products</h4>
                </div>
                @if (count($my_products) > 0)
                {{-- <ul>
                    @foreach ($my_products as $my_product)
                    <li class="d-flex">
                        <p class="mx-3">Product Name : {{ $my_product->title }}</p>
                        <p>Product Price : {{ $my_product->price }} Credit</p>
                    </li>
                    @endforeach
                </ul> --}}
                <div class="shoping-card-body col-md-12 d-flex flex-wrap justify-content-center">
                    @foreach ( $my_products as $my_product )
                    <div class="shoping-card-body-item col-md-2" style="border:1px solid white; min-width:280px">
                        @foreach ($medias as $media)
                        @if ($media->product_id == $my_product->product_id)
                        <div class="prev-slide">
                            <div class="product-thumb">
                                <div>
                                    <figure class="py-3">
                                        <img style="object-fit: contain;"
                                            src="{{ URL::asset('storage/' .$media->path)}}" alt="" class="img-fluid">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                        <div class="shoping-card-body-item-header">
                            <h5 class="text-light px-3 text-center">{{ $my_product->product_title }}</h5>
                        </div>
                        <div class="shoping-card-body-item-body">
                            <p class="text-light px-3 text-center">{{ $my_product->product_description }}</p>
                        </div>
                        <div class="shoping-card-body-item-body">
                            <p class="text-light px-3 text-center">Price: {{ $my_product->product_price }} credits</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <p>You can get your products here.</p>
                @endif
                <div class="row my-5">
                    <div class="col-md-12 d-flex justify-content-center">
                        <button class="btn btn-success">Claim your products</button>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <h4 class="text-center">My Avaliable Tickets</h4>
                </div>
                @if (count($my_tickets) > 0)
                <ul>
                    @foreach ($my_tickets as $my_ticket)
                    <li class="d-flex">
                        <p>Blue Ticket : {{ $my_ticket::where('title', 'Blue')->count() }} </p>
                    </li>
                    <li class="d-flex">
                        <p>Purple Ticket : {{ $my_ticket::where('title', 'Purple')->count() }} </p>
                    </li>
                    <li class="d-flex">
                        <p>Pink Ticket : {{ $my_ticket::where('title', 'Pink')->count() }} </p>
                    </li>
                    <li class="d-flex">
                        <p>Green Ticket : {{ $my_ticket::where('title', 'Green')->count() }} </p>
                    </li>
                    <li class="d-flex">
                        <p>Turqoise Ticket : {{ $my_ticket::where('title', 'Turqoise')->count() }} </p>
                    </li>
                    <li class="d-flex">
                        <p>Yellow Ticket : {{ $my_ticket::where('title', 'Yellow')->count() }} </p>
                    </li>
                    <li class="d-flex">
                        <p>Gray Ticket : {{ $my_ticket::where('title', 'Gray')->count() }} </p>
                    </li>
                    <li class="d-flex">
                        <p>Red Ticket : {{ $my_ticket::where('title', 'Red')->count() }} </p>
                    </li>
                    @break
                    @endforeach
                </ul>
                @else
                <p>You can see the prizes you won here!</p>
                @endif
            </div>
            <div>
                <div>
                    <h4 class="text-center">My winnings</h4>
                </div>
                <p>Total Tokens Spent : {{ Auth::user()->tokens_spent }}</p>
                @if (count($my_winnings) > 0)
                <ul>
                    @foreach ($my_winnings as $my_winning)
                    <li class="d-flex">
                        <p>Prize : {{ $my_winning->title }} Ticket</p>
                        <p class="mx-3">Date : {{ $my_winning->created_at }}</p>
                    </li>
                    @endforeach
                </ul>
                @else
                <p>You can see the prizes you won here!</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

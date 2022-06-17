@extends('admin.layouts.master')

@section('title', 'Products')

@section('content')
<div class="row">
    <a class="mr-2" style="color:white" href=""><button type="button" class="btn btn-primary">Create new</button></a>
</div>
@if (session('success'))
<p>{{ session('success') }}</p>
@endif
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Media</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>

            @foreach ($medias as $media)
            @if ($product->id == $media->product_id)
            <td>
                <div style="max-height: 50px">
                    <figure style="max-height: 50px">
                        <img style="max-height: 50px; object-fit: cover;"
                            src="{{ URL::asset('storage/' .$media->path)}}" alt="" class="img-fluid">
                    </figure>
                </div>
            </td>
            @endif
            @endforeach

            <td>{{ $product->title }}</td>
            <td> {{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <div style="display: flex;">


                    <a class="mr-2" style="color:white" href=""><button type="button"
                            class="btn btn-success">edit</button></a>

                    <form method="POST" action="">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-icon">
                            <i data-feather="delete">Delete</i>
                        </button>

                    </form>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection

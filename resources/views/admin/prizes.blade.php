@extends('admin.layouts.master')

@section('title', 'Prizes')

@section('content')
@if (session('success'))
<p>{{ session('success') }}</p>
@endif
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Media</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Prize1</th>
            <th scope="col">Prize2</th>
            <th scope="col">Prize3</th>
            <th scope="col">Prize4</th>
            <th scope="col">Prize5</th>
            <th scope="col">Prize6</th>
            <th scope="col">Prize7</th>
            <th scope="col">Prize8</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($prizes as $prize)
        <tr>
            <td>{{ $prize->id }}</td>

            <td>{{ $prize->name }}</td>
            <td> {{ $prize->price }}</td>
            <td>{{ $prize->prize1 }}</td>
            <td>{{ $prize->prize2 }}</td>
            <td>{{ $prize->prize3 }}</td>
            <td>{{ $prize->prize4 }}</td>
            <td>{{ $prize->prize5 }}</td>
            <td>{{ $prize->prize6 }}</td>
            <td>{{ $prize->prize7 }}</td>
            <td>{{ $prize->prize8 }}</td>

            <td>
                <div style="display: flex;">


                    <a class="mr-2" style="color:white" href="{{ route('edit.prize', $prize->id) }}"><button
                            type="button" class="btn btn-success">edit</button></a>

                    <form method="POST" action="{{ route('delete.prize',$prize->id) }}">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-icon">
                            <i data-feather="delete">Delete</i>
                        </button>

                    </form>
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            @foreach ($prize->medias as $media)
            <td>
                <div style="max-height: 50px">
                    <figure style="max-height: 50px">
                        <img style="max-height: 50px; object-fit: cover;"
                            src="{{ URL::asset('storage/' .$media->path)}}" alt="" class="img-fluid">
                    </figure>
                </div>
            </td>
            @endforeach

        </tr>
        @endforeach

    </tbody>
</table>
@endsection

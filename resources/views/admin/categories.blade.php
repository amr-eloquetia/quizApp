@extends('admin.layouts.master')

@section('title', 'Categories')

@section('content')
<div class="row">
    <a class="mr-2" style="color:white" href="{{ route('admin.createCategory') }}"><button type="button"
            class="btn btn-primary">Create new</button></a>
</div>
@if (session('success'))
<p>{{ session('success') }}</p>
@endif
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Parent ID</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>{{ $category->parent_id }}</td>
            <td>
                <div style="display: flex;">


                    <a class="mr-2" style="color:white" href="{{ route('admin.editCategory', $category->id) }}"><button
                            type="button" class="btn btn-success">edit</button></a>

                    <form method="POST" action="{{ route('delete.category',$category->id) }}">
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

@extends('admin.layouts.master')

@section('title', 'Users')

@section('content')
@if (session('success'))
<p>{{ session('success') }}</p>
@endif
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Tokens</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td scope="row">{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->tokens }}</td>

            <td>
                <div style="display: flex;">

                    <a class="mr-2" style="color:white" href="{{ route('edit.user', $user->id) }}"> <button
                            type="button" class="btn btn-success">edit </button></a>

                    <form method="POST" action="{{ url('admin/dashboard/deleteUser/'.$user->id) }}">
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

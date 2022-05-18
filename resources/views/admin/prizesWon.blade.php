@extends('admin.layouts.master')

@section('title', 'Prizes Won')

@section('content')
@if (session('success'))
<p>{{ session('success') }}</p>
@endif
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">User Id</th>
            <th scope="col">Username</th>
            <th scope="col">Prize</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($prizes_won as $prize_won)
        <tr>
            <td scope="row">{{ $prize_won->id }}</td>
            <td>{{ $prize_won->user_id }}</td>
            <td>{{ $prize_won->username }}</td>
            <td>{{ $prize_won->prize }}</td>

            <td>
                {{-- <div style="display: flex;">

                    <a class="mr-2" style="color:white" href="{{ route('edit.user', $user->id) }}"> <button
                            type="button" class="btn btn-success">edit </button></a>

                    <form method="POST" action="{{ url('admin/dashboard/deleteUser/'.$user->id) }}">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-icon">
                            <i data-feather="delete">Delete</i>
                        </button>

                    </form>
                </div> --}}
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection

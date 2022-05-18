@extends('admin.layouts.master')

@section('title', 'Questions')

@section('content')
<div class="row">
    <a class="mr-2" style="color:white" href="{{ route('admin.createQuestion') }}"><button type="button"
            class="btn btn-primary">Create new</button></a>
</div>
@if(session()->has('alert'))
<div class="alert alert-success form-group">{{ session()->get('alert')['message'] }}</div>
@endif
<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Category ID</th>
            <th scope="col">Question</th>
            <th scope="col">Answer 1</th>
            <th scope="col">Answer 2</th>
            <th scope="col">Answer 3</th>
            <th scope="col">Answer 4</th>
            <th scope="col">Right Answer</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($questions as $question)
        <tr>
            <td>{{ $question->id }}</td>
            <td>{{ $question->category_id }}</td>
            <td> {{ $question->question }}</td>
            <td>{{ $question->answer1 }}</td>
            <td>{{ $question->answer2 }}</td>
            <td>{{ $question->answer3 }}</td>
            <td>{{ $question->answer4 }}</td>
            <td>{{ $question->rightAnswer }}</td>
            <td>
                <div style="display: flex;">


                    <a class="mr-2" style="color:white"
                        href="{{ route('admin.editQuizQuestion', $question->id) }}"><button type="button"
                            class="btn btn-success">edit</button></a>

                    <form method="POST" action="{{ route('delete.quizQuestion',$question->id) }}">
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

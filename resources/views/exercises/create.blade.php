@extends('layouts.app')
@section('title', 'New Exercise')
@section('subtitle', 'Create an exercise')


@section('content')

<h1>New Exercise</h1>

<form action="{{ route('exercises.store') }}" method="post">
    @csrf

    <div class="field">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" />
    </div>

    <div class="actions">
        <input type="submit" value="Create Exercise" />
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</form>
@endsection
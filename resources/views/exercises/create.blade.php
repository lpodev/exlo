@extends('layouts.app')
@section('title', 'Create Exercise')


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
</form>
@endsection
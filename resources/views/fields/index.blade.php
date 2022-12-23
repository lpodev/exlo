@extends('layouts.app')

@section('title', 'Fields of ' . $exercise->title)
@section('subtitle', 'Fields of an Exercise')

@section('content')
<div>
    <h1>Fields de {{ $exercise->title }}</h1>
    @foreach ($fields as $field)
    <div style="border-bottom:2px solid black; padding-bottom:5px">
        <h2>{{ $field->label }}</h2>
        <p>{{ $field->value_kind->name }}</p>

        <form action="{{ route('exercises.fields.destroy', [$exercise, $field]) }}" method="POST">
            @method('DELETE')
            @csrf
            <a href="{{ route('exercises.fields.edit', [$exercise, $field]) }}"><button type="button"><i
                        class="fa fa-edit"></i></button></a>
            <button><i class="fa fa-trash"></i></button>

        </form>
    </div><br>
    @endforeach
</div>
@endsection
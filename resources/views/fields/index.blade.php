@extends('layouts.app')

@section('title', '{{ $exercise->title }}')

@section('content')
<div style="text-align: center;">
    <h1>Fields de {{ $exercise->title }}</h1>
    <ul>
        @foreach ($fields as $field)
        <li>
            {{ $field->label }}
            <br>
            {{ $field->value_kind->name }}

            <form action="{{ route('exercises.fields.destroy', [$exercise, $field]) }}" method="POST">
                @method('DELETE')
                @csrf
                <button>Supprimer</button>
            </form>
            <a href="{{ route('exercises.fields.edit', [$exercise, $field]) }}">Modifier</a>
        </li><br>
        @endforeach
    </ul>
</div>
@endsection
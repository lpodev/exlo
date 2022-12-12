@extends('layouts.app')

@section('title', 'Create Field')

@section('content')
<div style="text-align: center;">
    <h1>New Field for {{ $exercise->title }}</h1>
    <form action="{{ route('exercises.fields.store', $exercise) }}" method="POST">
        @csrf
        <label for="label">{{ ___(['Field', 'label']) }}:</label>
        <input id="label" name="label" type="text">

        <label for="value_kind">{{ ___(['Field', 'value_kind']) }}</label>
        <select name="value_kind" id="value_kind">
            @foreach ($value_kind_cases as $value_kind)
            <option value="{{ $value_kind->name }}">{{ ___($value_kind) }}</option>
            @endforeach
        </select>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <button>CREATE</button>
    </form>
</div>
<br>
@endsection
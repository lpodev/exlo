@extends('layouts.app')

@section('title', 'Edit ' . $field->label)

@section('content')
<div style="text-align: center;">
    <h1>Edit field</h1>
    <form action="{{ route('exercises.fields.update', [$exercise, $field]) }}" method="POST">
        @csrf
        @method("PATCH")
        <label for="label">{{ ___(['Field', 'label']) }}:</label>
        <input id="label" name="label" type="text" value="{{ $field->label }}">

        <label for="value_kind">{{ ___(['Field', 'value_kind']) }}</label>
        <select name="value_kind" id="value_kind">
            @foreach ($value_kind_cases as $value_kind)
            <option value="{{ $value_kind->name }}" @selected($value_kind==$field->value_kind)>{{ ___($value_kind) }}
            </option>
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
        <button>Sauver</button>
    </form>
</div>

@endsection
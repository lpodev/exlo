@extends('layouts.app')
@section('title', 'Exercises')
@section('subtitle', 'Manage Exercises')

@section('content')
<h1>Manage Exercises</h1>

<section class="column">
    <table class="records">
        <thead>
            <tr>
                <th>Title</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($exercises as $exercise)
            <tr>
                <td>
                    {{ $exercise->title }}
                </td>
                <td>
                    <a title="Add field" href="{{ route('exercises.fields.create', $exercise) }}"><button><i
                                class="fa fa-plus"></i></button></a>
                    <a title="Manage fields" href="{{ route('exercises.fields.index', $exercise) }}"><button><i
                                class="fa fa-edit"></i></button></a>
                    <form action="{{ route('exercises.destroy', $exercise) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button data-confirm="Are you sure?"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
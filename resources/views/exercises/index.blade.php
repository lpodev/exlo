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
                <td style="vertical-align: auto;">
                    <form action="{{ route('exercises.destroy', $exercise) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <a title="Add field" href="{{ route('exercises.fields.create', $exercise) }}"><button
                                type="button"><i class="fa fa-plus"></i></button></a>
                        <a title="Manage fields" href="{{ route('exercises.fields.index', $exercise) }}"><button
                                type="button"><i class="fa fa-edit"></i></button></a>
                        <button data-confirm="Are you sure?"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
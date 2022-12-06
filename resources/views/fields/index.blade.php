<h1>{{ ___($exercise) }}: {{ $exercise->title }}</h1>
<ul>
    @foreach ($fields as $field)
    <li>
        {{ $field->label }}
        <br>
        {{ ___($field->value_kind) }}
        <form action="{{ route('exercises.fields.destroy', compact('exercise', 'field')) }}" method="POST">
            @method('DELETE')
            @csrf
            <button>Suprrimer</button>
        </form>
        <a href="{{ route('exercises.fields.edit', compact('exercise', 'field')) }}">Modifier</a>
    </li>
    @endforeach
</ul>
<a href="{{ route('exercises.fields.create', $exercise) }}">Add new field</a>

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
    </li>
    @endforeach
</ul>
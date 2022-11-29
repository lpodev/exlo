<h1>Exercise {{ $exercise->title }}</h1>
<ul>
    @foreach ($fields as $field)
    <li>
        {{ $field->label }}
        <form action="{{ route('exercises.fields.destroy', compact('exercise', 'field')) }}" method="POST">
            @method('DELETE')
            @csrf
            <button>Suprrimer</button>
        </form>
    </li>
    @endforeach
</ul>

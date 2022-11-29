<h1>Exercises</h1>
<ul>
    @foreach ($exercises as $exercise)
    <li>
        <a href="{{ route('exercises.fields.index', $exercise) }}">{{ $exercise->title }}</a>
        <form action="{{ route('exercises.destroy', $exercise) }}" method="POST">
            @method('DELETE')
            @csrf
            <button>Suprrimer</button>
        </form>
    </li>
    @endforeach
</ul>

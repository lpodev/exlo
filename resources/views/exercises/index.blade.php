<h1>Exercises</h1>
<ul>
    @foreach ($exercises as $exercise)
    <li>
        <h3>{{ $exercise->title }}</h3>
        <form action="{{ route('exercises.destroy', $exercise) }}" method="POST">
            @method('DELETE')
            @csrf
            <button>Supprimer</button>
        </form>
        <a href="{{ route('exercises.fields.create', $exercise) }}">Ajouter des fields</a>
        <br><a href="{{ route('exercises.fields.index', $exercise) }}">Voir tous les choses dans la liste appelée par le
            nom nommé fields</a>

    </li>
    @endforeach
</ul>
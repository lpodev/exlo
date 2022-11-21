<h1>Exercises</h1>
<ul>
    @foreach ($exercises as $exercise)
    <li>
        {{ $exercise->title }}
        <form action="/exercises/{{ $exercise->id }}" method="POST">
            @method('DELETE')
            @csrf
            <button>Suprrimer</button>
        </form>
    </li>
    @endforeach
</ul>

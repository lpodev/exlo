<h1>Exercise {{ $exercise->title }}</h1>
<form action="{{ route('exercises.fields.store', $exercise) }}" method="POST">
    @csrf
    <label for="label">Label:</label>
    <input id="label" name="label" type="text">
    <select name="value_kind">
        @foreach ($value_kind_cases as $value_kind)
        <option value="{{ $value_kind->name }}">{{ $value_kind->name }}</option>
        @endforeach
    </select>
    <button>Ajouter</button>
</form>

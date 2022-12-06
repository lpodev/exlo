<h1>{{ ___($exercise) }}: {{ $exercise->title }}</h1>
<form action="{{ route('exercises.fields.store', $exercise) }}" method="POST">
    @csrf
    <label for="label">{{ ___(['Field', 'label']) }}:</label>
    <input id="label" name="label" type="text">
    <br>
    <label for="value_kind">{{ ___(['Field', 'value_kind']) }}:</label>
    <select name="value_kind">
        @foreach ($value_kind_cases as $value_kind)
        <option value="{{ $value_kind->name }}">{{ ___($value_kind) }}</option>
        @endforeach
    </select>
    <br>
    <button>Ajouter</button>
</form>

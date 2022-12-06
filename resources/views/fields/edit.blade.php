<h1>{{ ___($exercise) }}: {{ $exercise->title }}</h1>
<form action="{{ route('exercises.fields.update', compact('exercise', 'field')) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="label">{{ ___(['Field', 'label']) }}:</label>
    <input id="label" name="label" type="text" value="{{ $field->label }}">
    <br>
    <label for="value_kind">{{ ___(['Field', 'value_kind']) }}:</label>
    <select name="value_kind">
        @foreach ($value_kind_cases as $value_kind)
        <option value="{{ $value_kind->name }}" @selected($value_kind == $field->value_kind)>{{ ___($value_kind) }}</option>
        @endforeach
    </select>
    <br>
    <button>Modifier</button>
</form>

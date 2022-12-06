<h1>Edit field</h1>
<form action="{{ route('exercises.fields.update', [$exercise, $field]) }}" method="POST">
    @csrf
    @method("PATCH")
    <label for="label">Label:</label>
    <input id="label" name="label" type="text" value="{{ $field->label }}">

    <label for="value_kind">Value kind</label>
    <select name="value_kind" id="value_kind">
        @foreach ($value_kind_cases as $value_kind)
        <option value="{{ $value_kind->name }}">{{ $value_kind->name }}</option>
        @endforeach
    </select>
    <button>Sauver</button>
</form>
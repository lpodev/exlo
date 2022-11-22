<h1>New Exercise</h1>
<form action="{{ route('exercises.store') }}" method="POST">
    @csrf
    <label for="title">Titre:</label>
    <input id="title" name="title" type="text">
    <button>Ajouter</button>
</form>

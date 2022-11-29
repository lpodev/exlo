<head>
    <title>ExerciseLooper</title>
    <link rel="stylesheet" media="all" href="{{ asset('css/stylesheet.css') }}" />
    <script src="{{ asset('js/script.css') }}"></script>
</head>

<body>
    <header class="dashboard">
        <section class="container">
            <a href="/"><img src="{{ asset('images/logo.png') }}" /></a>
            <h1>Exercise<br>Looper</h1>
        </section>
    </header>

    <div class="container dashboard">
        <section class="row">
            <div class="column">
                <a class="button answering column" href="/exercises/answering">Take an exercise</a>
            </div>
            <div class="column">
                <a class="button managing column" href="{{ route('exercises.create') }}">Create an exercise</a>
            </div>
            <div class="column">
                <a class="button results column" href="{{ route('exercises.index') }}">Manage an exercise</a>
            </div>
        </section>
    </div>

</body>
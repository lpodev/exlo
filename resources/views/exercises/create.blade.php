<header class="heading managing">
    <section class="container">
        <a href="/"><img src="{{ asset('/') }}./images/logo.png" /></a>
        <span class="exercise-label">New exercise</span>
    </section>
</header>

<main class="container">
    <!DOCTYPE html>
    <html>

    <head>
        <title>ExerciseLooper</title>
        <meta name="csrf-param" content="authenticity_token" />
        <meta name="csrf-token"
            content="kmlh/H+MXagV4qyR9JaIXlJJVXsdLEquM4QRk+o9NMGho6VMdtro1h4Qa0gX6achxZQR/lkeudpFke5yqjbq8A==" />


        <link rel="stylesheet" media="all" href="{{ asset('/') }}./css/stylesheet.css" />
        <script src="{{ asset('/') }}./js/script.js"></script>
    </head>

    <body>
        <h1>New Exercise</h1>

        <form action="{{ route('exercises.store') }}" accept-charset="UTF-8" method="post">
            @csrf

            <div class="field">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" />
            </div>

            <div class="actions">
                <input type="submit" name="commit" value="Create Exercise" data-disable-with="Create Exercise" />
            </div>
        </form>

    </body>

    </html>

</main>
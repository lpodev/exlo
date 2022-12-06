<html>

<head>
    <title>ExerciseLooper - @yield('title')</title>
    <link rel="stylesheet" media="all" href="/css/stylesheet.css" />
    <script src="/js/script.js"></script>
</head>
<main class="container">

    <body>
        <header class="heading managing">
            <section class="container">
                <a href="/"><img src="/images/logo.png" /></a>
                <span class="exercise-label">@yield('subtitle')</span>
            </section>
        </header>
        @yield('content')
    </body>

</main>

</html>
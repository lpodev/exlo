<html>

<head>
    <title>ExerciseLooper - @yield('title')</title>
    <link rel="stylesheet" media="all" href="/css/stylesheet.css" />
    <script src="/js/script.js"></script>
</head>

<body class="container">
    <header class="heading managing">
        <section class="container">
            <a href="/"><img src="/images/logo.png" /></a>
            <span class="exercise-label">New exercise</span>
        </section>
    </header>
    @yield('content')
</body>

</html>
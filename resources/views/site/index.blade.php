<?php
    /**
     * Title: index.php
     * Author: LPO & VIC & YAN
     * Date: 5th September 2022
     * Version: 1.0
     */
;?>

<!DOCTYPE html>
<html>

<head>
    <title>ExerciseLooper</title>
    <link rel="stylesheet" media="all" href="/css/stylesheet.css" />
    <script src="/js/script.js"></script>
</head>

<body>
    <header class="dashboard">
        <section class="container">
            <a href="/"><img src="/images/logo.png" /></a>
            <h1>Exercise<br>Looper</h1>
        </section>
    </header>

    <div class="container dashboard">
        <section class="row">
            <div class="column">
                <a class="button answering column" href="#">Take an exercise</a>
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

</html>
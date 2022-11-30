<header class="heading results">
    <section class="container">
        <a href="/"><img src="{{ asset('/') }}./images/logo.png" /></a>
    </section>
</header>

<main class="container">
    <!DOCTYPE html>
    <html>

    <head>
        <title>ExerciseLooper</title>
        <link rel="stylesheet" media="all" href="{{ asset('/') }}./css/stylesheet.css" />
        <script src="{{ asset('/') }}./js/script.js"></script>
    </head>

    <body>
        <div class="row">
            <section class="column">
                <h1>Building</h1>
                <table class="records">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($exercises as $exercise)
                        <tr>
                            <td>
                                {{ $exercise->title }}
                            </td>
                            <td>
                                <a title="Be ready for answers" rel="nofollow" data-method="put"><i
                                        class="fa fa-comment"></i></a>
                                <a title="Manage fields"><i class="fa fa-edit"></i></a>
                                <a data-confirm="Are you sure?" title="Destroy" rel="nofollow" data-method="delete"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>

            <section class="column">
                <h1>Answering</h1>
                <table class="records">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($exercises as $exercise)
                        <tr>
                            <td>
                                {{ $exercise->title }}
                            </td>
                            <td>
                                <a title="Show results"><i class="fa fa-chart-bar"></i></a>
                                <a title="Close" rel="nofollow" data-method="put"><i class="fa fa-minus-circle"></i></a>
                            </td>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>


            <section class="column">
                <h1>Closed</h1>
                <table class="records">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($exercises as $exercise)
                        <tr>
                            <td>
                                {{ $exercise->title }}
                            </td>
                            <td>

                                <a title="Show results"><i class="fa fa-chart-bar"></i></a>
                                <a data-confirm="Are you sure?" title="Destroy"
                                    href="{{ route('exercises.destroy', $exercise) }}" rel="nofollow"
                                    data-method="delete"><i class="fa fa-trash"></i></a>
                            <td>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </body>

    </html>
</main>
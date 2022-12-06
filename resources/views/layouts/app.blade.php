<!DOCTYPE html>
<html>

<head>
    <title>lpodev - @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Oswald"
    }

    body {
        font-family: "Roboto"
    }
    </style>
</head>

<body class="w3-light-grey">

    <!-- Navigation bar with social media icons -->
    <div class="w3-bar w3-black w3-hide-small">
        <a href="{{ route('exercises.index') }}" class="w3-bar-item w3-button">Exercises</a>
        <a href="{{ route('exercises.create') }}" class="w3-bar-item w3-button">Create Exercise</a>
        <a href="#" class="w3-bar-item w3-button w3-right"><i class="fa fa-search"></i></a>
    </div>

    <!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
    <div class="w3-content" style="max-width:1600px">

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-48 w3-white">
            <h1 class="w3-xxxlarge"><b>PEDRO'S BLOGLIFE</b></h1>
            <h6>Welcome to the blog of <span class="w3-tag">Pedro's world</span></h6>
        </header>
    </div>

    @yield('content')

    <!-- Footer -->
    <footer class="w3-container w3-dark-grey" style="padding:10px; text-align:center;">
        <p>Powered by <a href="https://www.github.com/lpodev" target="_blank">lpodev</a></p>
    </footer>
</body>

</html>
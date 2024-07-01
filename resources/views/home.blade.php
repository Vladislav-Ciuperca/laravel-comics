<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="style.css">
</head>

<body class="antialiased">

    @include('partials.header')

    <div class="container">

        @foreach ($comics as $comic)
            @include('partials.card')
        @endforeach

    </div>



</body>

</html>

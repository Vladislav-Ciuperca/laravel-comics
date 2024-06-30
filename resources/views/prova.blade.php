<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>prova</h1>
    <h2>{{ $msg }}</h2>
    <h3>{{ $description }}</h3>

    @foreach ($studenti as $alunno)
        <li>{{ $alunno }}</li>
    @endforeach

    @if (count($studenti) > 3)
        <p>ci sono piu di 3 studenti</p>
    @else
        <p>ci sono mano di 3 okokok</p>
    @endif

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Ciao a tutti mi chiamo Mirko </h1>
    <p>linguaggi che conosco:</p>
    <ul>
        @foreach ($lenguages as $lenguage)
            <li>{{ $lenguage }}</li>
        @endforeach
    </ul>
    <p>scopri altro -> <a href="{{ route('home') }}">CLICK ME!</a></p>
</body>

</html>

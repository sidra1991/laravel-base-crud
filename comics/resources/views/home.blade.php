<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    sono la home

    <a href="{{ Route() }}"> vai alla lista dei fumetti </a>

    <ol>
        @foreach ($comics as $comic)
            <li>- {{ $comic->title}}</li>
        @endforeach
        @php
        @endphp
    </ol>


</body>
</html>

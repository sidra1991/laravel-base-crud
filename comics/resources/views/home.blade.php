<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>comics</title>
</head>
<body>
    @include('componenti.nav')
    <ul>
        @foreach ($comics as $comic)
            <li> <img src="{{$comic->thumb}}" alt=""> {{$comic->title}}
            <a href="{{ route('roba.show') }}"> dettaglio </a>
            </li>
        @endforeach
    </ul>

</body>
</html>

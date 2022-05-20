
@include('component.head')
<body>
    <ol>
    @foreach ($comics as $comic)
        <li>- {{ $comic->title}}</li>
        <br>
        <a href="{{Route('comic.show', $comic->id )}}">dettagli</a>
    @endforeach
    <br>
        <a href="{{Route('comic.create')}}">nuovo</a>
    </ol>

</body>

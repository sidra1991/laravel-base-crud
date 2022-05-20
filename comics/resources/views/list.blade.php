
@include('component.head')
<ol>
    @foreach ($comics as $comic)
        <li>- {{ $comic->title}}</li>
        <br>
        <a href="{{Route('comic.show', $comic->id )}}">dettagli</a>
    @endforeach
</ol>

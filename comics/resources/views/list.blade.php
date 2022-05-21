
@include('component.head')
<body>
    <ol>
    @foreach ($comics as $comic)
        <li>- {{ $comic->title}}</li>
        <br>
        <a href="{{Route('comic.show', $comic->id )}}">dettagli</a> ---     <a href="{{Route('comic.edit', $comic->id)}}">modifica</a> ---- <form action="{{ Route('comic.destroy', $comic->id) }}" method="POST"> @csrf @method('DELETE') <button>cancella</button> </form>
    @endforeach
    <br>
     <a href="{{Route('comic.create')}}">nuovo</a>
        <br><br>
    </ol>

</body>

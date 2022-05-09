<ol>
    @foreach ($comics as $comic)
        <li>
            {{$comic->title}}
        </li>
    @endforeach
</ol>

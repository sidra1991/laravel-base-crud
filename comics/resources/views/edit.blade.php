@include('component.head')

<body>

    <form method="POST" action="{{route('comic.update', $comic->id)}}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">titolo</label>
            <input type="text" id="title" name="title" value="{{$comic->title}}" >
        </div>
        <div>
            <label for="description">descrizione</label>
            <input type="text-area" id="description" name="description" value="{{$comic->description}}" >
        </div>
        <div>
            <label for="thumb">immagine</label>
            <input type="text" id="thumb" name="thumb" value="{{ $comic->thumb}}">
        </div>
        <div>
            <label for="price">prezzo</label>
            <input type="number" id="price" name="price" value="{{$comic->price}}">
        </div>
        <div>
            <label for="series"></label>
            <input type="text" id="series" name="series" value="{{$comic->series}}" >
        </div>
        <div>
            <label for="sale_date"></label>
            <input type="date" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
        </div>
        <div>
            <label for="type">tipo</label>
            <input type="text" id="type" name="type" value="{{$comic->type}}" >
        </div>
        <button type="submit" > invia </button>
    </form>


</body>

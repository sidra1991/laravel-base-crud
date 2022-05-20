@include('component.head')

<body>

    <form method="POST" action="{{route('comic.store')}}">
        @csrf
        <div>
            <label for="title">titolo</label>
            <input type="text" id="title" name="title" >
        </div>
        <div>
            <label for="description">descrizione</label>
            <input type="text-area" id="description" name="description" >
        </div>
        <div>
            <label for="thumb">immagine</label>
            <input type="text" id="thumb" name="thumb" value="{{ old('thumb') }}">
        </div>
        <div>
            <label for="price">prezzo</label>
            <input type="number" id="price" name="price">
        </div>
        <div>
            <label for="series"></label>
            <input type="text" id="series" name="series" >
        </div>
        <div>
            <label for="sale_date"></label>
            <input type="date" id="sale_date" name="sale_date">
        </div>
        <div>
            <label for="type">tipo</label>
            <input type="text" id="type" name="type" >
        </div>
        <button type="submit" > invia </button>
    </form>


</body>

@extends("layout.layout-principale")

@php
    $comics = config("comics");
@endphp
@section('contenuto')
<h2>Tutti i fumetti</h2>
    <a href="{{route("home")}}">Torna alla homepage</a>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col">
                <ul>
                    <li>{{$comic["title"]}}</li>
                    <li>   {{$comic["description"]}}</li>
                    <li>{{$comic["price"]}}</li>

                </ul>
            </div>
            @endforeach
        </div>
    </div>
@endsection
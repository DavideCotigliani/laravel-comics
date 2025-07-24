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
            <div class="col-2">
                <div class="card mt-3">
                    <div class="card-title">
                        {{$comic["title"]}}
                    </div>
                    <card-img>
                        <img src="{{$comic["thumb"]}}" alt="" class="img-fluid">
                    </card-img>
                    <card-body>
                          {{$comic["series"]}}
                          {{$comic["sale_date"]}}
                        {{$comic["price"]}}
                    </card-body>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
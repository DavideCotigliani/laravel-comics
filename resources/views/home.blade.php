<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        .jumbotron {
          background: linear-gradient(to right, #6a11cb, #2575fc);
          color: white;
          padding: 60px 30px;
          text-align: center;
          border-radius: 12px;
          margin: 40px auto;
          max-width: 800px;
          box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
    
        .jumbotron h1 {
          font-size: 2.5em;
          margin-bottom: 20px;
        }
    
        .jumbotron p {
          font-size: 1.2em;
          margin-bottom: 30px;
        }
    
        .jumbotron a.button {
          background-color: white;
          color: #2575fc;
          padding: 12px 25px;
          text-decoration: none;
          font-weight: bold;
          border-radius: 8px;
          transition: background 0.3s;
        }
    
        .jumbotron a.button:hover {
          background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    @extends('layout.layout-principale')
    
    
    @section('contenuto')
    <h1>La mia homepage</h1>
    <a href="{{route("comics")}}">Visita la pagina dei fumetti</a>
    
    <x-my-card>
        <div class="jumbotron">
        <h1>Benvenuto nel nostro sito!</h1>
        <p>Scopri tutte le funzionalità e le novità che abbiamo preparato per te.</p>
      </div>
    </x-my-card>
    @endsection
    
</body>
</html>
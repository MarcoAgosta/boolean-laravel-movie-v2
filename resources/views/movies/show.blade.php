@extends('layouts.app')

@section('content')
   <h1 class="my-3">Movie id #{{ $movie->id }}</h1>

   <div class="row">
      <div class="col">
         <img src="{{ $movie->cover_img }}" alt="..." class="img-fluid">
      </div>
      <div class="col-8">
         <h4>Titolo: </h4>
         <p>{{ $movie->title }}</p>

         <h4>Descrizione: </h4>
         <p>{{ $movie->descrizione }}</p>

         <h4>Anno di uscita:{{ $movie->anno_uscita }}</h4>

         <h4>Genere:{{ $movie->genere }}</h4>
         
      </div>
   </div>
   <a href="{{ route('movies.index') }}" class="mx-3">lista dei film</a>
   <a href="{{ route('movies.edit', $movie->id) }}" class="mx-3">cambia il film</a>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
   <h1 class="my-3">Create new movie</h1>

   @if ($errors->any())
      <div class="alert alert-danger">
         Check the following:
         <ul>
            @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
   @endif

   <form action="{{ route('movies.store') }}" method="POST">
      @csrf

      <label class="form-label">Film name:</label>
      <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
         value="{{ old('title') }}">

      <label class="form-label">Descrizione:</label>
      <textarea name="descrizione" cols="30" rows="5"
         class="form-control @error('descrizione') is-invalid @enderror">{{ old('descrizione') }}</textarea>

      <label class="form-label">Anno uscita:</label>
      <input type="text" name="anno_uscita" class="form-control @error('anno_uscita') is-invalid @enderror"
         value="{{ old('anno_uscita') }}">

      <label class="form-label">Genere:</label>
      <input type="text" name="genere" class="form-control @error('genere') is-invalid @enderror"
         value="{{ old('genere') }}">

      <label class="form-label">Disponibile:</label>
      <input type="text" name="disponibile" class="form-control @error('disponibile') is-invalid @enderror"
         value="{{ old('disponibile') }}">

      <button type="submit" class="btn btn-success my-3">Create</button>

      <a href="{{ route('movies.index') }}" class="mx-3">Return to projects list</a>

   </form>
</div>
@endsection

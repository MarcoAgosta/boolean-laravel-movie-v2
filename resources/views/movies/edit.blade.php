@extends('layouts.app')

@section('content')
<h1 class="my-3">edit new movie</h1>

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

    <label class="form-label">Movie title:</label>
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('title') }}">

    <label class="form-label">Description:</label>
    <textarea name="description" cols="30" rows="5" class="form-control @error('description') is-invalid @enderror">{{ old('descrizione') }}</textarea>

    <label class="form-label">year of release:</label>
    <input type="text" name="anno_uscita" class="form-control @error('anno_uscita') is-invalid @enderror" value="{{ old('anno_uscita') }}">

    <label class="form-label">genre:</label>
    <input type="text" name="genre" class="form-control @error('genre') is-invalid @enderror" value="{{ old('genre') }}">

    <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" role="switch" id="switch_public" name="disponibile" {{ old('disponibile', $movie->disponibile) ? 'checked' : '' }}>
        <label class="form-check-label" for="switch_public">Disponibile</label>
    </div>

    <button type="submit" class="btn btn-success my-3">Create</button>

    <a href="{{ route('movies.index') }}" class="mx-3">Return to movies list</a>

</form>
@endsection

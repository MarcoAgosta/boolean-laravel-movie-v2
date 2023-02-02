@extends('layouts.app')
@section('content')
    <div class="d-flex align-items-center justify-content-between  my-3">
        <h1>I Tuoi Post</h1>
        <a href="{{ route('movies.create') }}" class="mx-3">Add new</a>
    </div>

    <table class="table">
        <thead class="table-secondary">
            <tr>
                <th>Nome</th>
                <th>Description</th>
                <th>Cover Image</th>
                <th>Git Link</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{ $movie->title }}</td>
                    <td> {{ Str::limit($movie->descrizione, 50, '...') }} </td>

                    <td> {{ $movie->anno_uscita }} </td>

                    <td>
                        <a href="{{ $movie->github_link }}">
                            {{ $movie->github_link }}</a>
                    </td>

                    <td>
                        <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-info w-100">See details</a>
                        @include('movies.partials.delete-form-btn')
                        <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning w-100">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

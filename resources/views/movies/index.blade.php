 @extends('layouts.app')
@section('content')
    <div class="d-flex align-items-center justify-content-between px-3 my-3">
        <h1 class="text-white">I Tuoi Post</h1>
        <a href="{{ route('movies.create') }}"  class="btn btn-success ">+ new</a>
    </div>

    <table class="table text-white">
        <thead class="text-warning text-center">
            <tr>
                <th>Titolo</th>
                <th>Descrizione</th>
                <th>anno d'uscita</th>
                <th>Genere</th>
                <th>Disponibile</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($movies as $movie)
                <tr>
                    <td class="text-center pt-4">{{ $movie->title }}</td>
                    <td class="text-center pt-4"> {{ Str::limit($movie->descrizione, 50, '...') }} </td>
 
                    <td class="text-center pt-4"> {{ $movie->anno_uscita }} </td>

                    <td class="text-center pt-4"> {{ $movie->genere }} </td>
                    <td class="text-center pt-4"> {{ $movie->disponibile === 1 ? 'Si' : ' No' }}</td>
                    <td class="text-center pt-4">
                     <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-warning"><i class="fas fa-eye"></i>Edit</a>
                     <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-info"><i class="fas fa-eye"></i>Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection 



{{-- @extends('layouts.app')

@section('title', 'Lista Post')

@section('content')
<div class="d-flex justify-content-between mb-5 mt-5 me-3 px-3">

  <h2 class="text-white fw-bold ">Lista post</h2>
  <a  href="{{ route('movies.create') }}" class="btn btn-success ">  + Create</a>
  

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
          <td class="text-center pt-4">{{ $movie->title }}</td>
          <td class="text-center pt-4"> {{ Str::limit($movie->descrizione, 50, '...') }} </td>

          <td class="text-center pt-4"> {{ $movie->anno_uscita }} </td>

          <td class="text-center pt-4"> {{ $movie->genere }} </td>
          <td class="text-center pt-4"> {{ $movie->disponibile === 1 ? 'Si' : ' No' }}</td>
          <td class="text-center pt-4">
              <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-info w-100">See details</a>
             
              <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-warning w-100">Edit</a>
          </td>
      </tr>
  @endforeach
   </tbody>
</table>
@endsection --}}
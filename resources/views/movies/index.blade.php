@extends('movies.master')

@section('content')

<h1>Filmer</h1>
@if (session('status'))
  <div class="alert alert-success" role="alert">{{ session('status') }}</div>
@endif
<p>Här är en lista på filmer:</p>
<ul>
@foreach($movies as $movie)
  <li style="clear:both;"><a href="movies/{{ $movie->id }}">{{ $movie->title }}</a> ({{ $movie->year }})
    <form action="movies/{{ $movie->id }}" method="post" style="float:right">
      {{ method_field('DELETE') }}
      {{ csrf_field() }}
      <input type="submit" value="Ta bort film" class="btn btn-danger" style="float:right">
    </form>
  </li>
@endforeach
</ul>

@endsection

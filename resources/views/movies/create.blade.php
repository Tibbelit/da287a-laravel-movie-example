@extends('movies.master')

@section('content')

<h1>Lägg till en ny film</h1>

<form action="/movies" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Skriv titel här...">
  </div>
  <div class="form-group">
    <label for="year">År</label>
    <input type="number" class="form-control" id="year" name="year" placeholder="Skriv årtal här...">
  </div>
  <div class="form-group">
    <label for="poster">Länk till bild</label>
    <input type="text" class="form-control" id="poster" name="poster" placeholder="Skriv titel här...">
  </div>
  <input type="submit" value="Spara film" class="btn btn-success">
</form>


@endsection

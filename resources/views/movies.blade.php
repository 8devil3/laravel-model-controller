@extends('template.base')

@section('title', 'Movies')

@section('mainContent')
<main>
   @foreach ($movies as $movie)
   <article>
      <h2>{{ $movie['title'] }}</h2>
      <h3>{{ $movie['original_title'] }}</h3>
      <p>{{ $movie['nationality'] }}</p>
      <p>{{ $movie['date'] }}</p>
      <p>{{ $movie['vote'] }}</p>
   </article>
   @endforeach
</main>
@endsection

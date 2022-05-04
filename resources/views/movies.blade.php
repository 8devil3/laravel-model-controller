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
      <div>
         @php
            $fullStars = intval(round($movie['vote']/2));
            $emptyStars = 5 - intval(round($movie['vote']/2));
         @endphp
         @for ($i = 0; $i < $fullStars; $i++)
            <i class="fa-solid fa-star"></i>
         @endfor
         @for ($i = 0; $i < $emptyStars; $i++)
         <i class="fa-regular fa-star"></i>
      @endfor
      </div>
   </article>
   @endforeach
</main>
@endsection




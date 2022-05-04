@extends('template.base')

@section('title', 'Movies')


@section('mainContent')
<main>
   <div class="container">
      @foreach ($movies as $movie)
      <article>
         <h2>Titolo: <em>{{ $movie['title'] }}</em></h2>
         <h3>Titolo originale: <em>{{ $movie['original_title'] }}</em></h3>
         <p>Nazionalità: <em>{{ $movie['nationality'] }}</em></p>
         <p>Data: {{ date_format(date_create_from_format('Y-m-d', $movie['date']), 'd/m/Y') }}</p>
         <div>Rating:
            @php
               $fullStars = intval(round($movie['vote']/2));
               $emptyStars = 5 - $fullStars;
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
   </div>
</main>
@endsection




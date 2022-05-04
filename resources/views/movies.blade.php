@extends('template.base')

@section('title', 'Movies')


@section('mainContent')
<main>
   <div class="container">
      @foreach ($movies as $movie)
      <article>
         <h2>{{ $movie['title'] }}</h2>
         <p>Titolo originale: <span class="desc">{{ $movie['original_title'] }}</span></p>
         <p>Nazionalità: <span class="desc">{{ $movie['nationality'] }}</span></p>
         <p>Data: <span class="desc">{{ date_format(date_create_from_format('Y-m-d', $movie['date']), 'd/m/Y') }}</span></p>
         <div class="rating">
            <p>Rating:</p>
            <div>
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
         </div>
      </article>
      @endforeach
   </div>
</main>
@endsection




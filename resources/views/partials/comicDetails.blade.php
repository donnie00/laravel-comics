<?php

$currentComic = 0;

foreach ($comicsList as $comic) {
    if ($comic['title'] === Request::input('comic')) {
        $currentComic = $comic;
    }
}

?>

<div class="bg-primary show-banner">
   <div class="container">
      <div class="comic-show">
         <span class="bg-info text-light text-uppercase position-absolute p-1">{{ $currentComic['type'] }}</span>
         <span class="bg-info text-light text-uppercase position-absolute bottom-0 w-100 p-1">view-gallery</span>
         <img src="{{ $currentComic['thumb'] }}" alt="" class="img-fluid">
      </div>
   </div>
</div>
<div class="container">
   <div class="row my-5">
      <div class="col-8">
         <h1>{{ $currentComic['title'] }}</h1>
         <div class="bg-success text-light d-flex p-2 my-3">
            <div class="d-flex justify-content-between flex-grow-1 px-3 opacity-50">
               <span>U.S. price: <span class="text-light">{{ $currentComic['price'] }}</span></span>
               <span>Available</span>
            </div>
            <div class="px-3">
               <span>Check Availability</span>
            </div>
         </div>
         <p class="text-muted">{{ $currentComic['description'] }}</p>
      </div>
      <div class="col-4 text-end">
         <span class="text-uppercase">advertisement</span>
         <img src="{{ Vite::asset('/resources/images/adv.jpg') }}" alt="">
      </div>
   </div>
</div>
<div class="comicInfo bg-light-grey border-top py-4">
   <div class="container">
      <div class="row gap-5">
         <div class="col">
            <h2>Talent</h2>
            <div class="row border-top py-1">
               <div class="col-4">
                  <span>Art by:</span>
               </div>
               <div class="col">
                  @foreach ($currentComic['artists'] as $artist)
                     @if ($loop->last)
                        <a href="/" class="link-info text-decoration-none">
                           {{ $artist }}
                        </a>
                     @else
                        <a href="/" class="link-info text-decoration-none">
                           {{ $artist }},
                        </a>
                     @endif
                  @endforeach
               </div>
            </div>
            <div class="row border-top border-bottom py-1">
               <div class="col-4">
                  <span>Written by:</span>
               </div>
               <div class="col">
                  @foreach ($currentComic['writers'] as $writer)
                     @if ($loop->last)
                        <a href="/" class="link-info text-decoration-none">
                           {{ $writer }}
                        </a>
                     @else
                        <a href="/" class="link-info text-decoration-none">
                           {{ $writer }},
                        </a>
                     @endif
                  @endforeach
               </div>
            </div>
         </div>
         <div class="col">
            <h2>Specs</h2>
            <div class="row border-top py-1">
               <div class="col">
                  <span>Series:</span>
               </div>
               <div class="col">
                  <a href="/"
                     class="link-info text-uppercase text-decoration-none">{{ $currentComic['series'] }}</a>
               </div>
            </div>

            <div class="row border-top py-1">
               <div class="col">
                  <span>U.S. Price:</span>
               </div>
               <div class="col">
                  <span>{{ $currentComic['price'] }}</span>
               </div>
            </div>

            <div class="row border-top border-bottom py-1">
               <div class="col">
                  <span>On Sale Date:</span>
               </div>
               <div class="col">
                  <span>{{ $currentComic['sale_date'] }}</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

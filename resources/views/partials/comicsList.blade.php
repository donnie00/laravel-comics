<div class="bg-dark py-3">
   <div class="container">
      <div class="row row-cols-3">
         @foreach ($comicsList as $comic)
            <div class="col g-5">
               <div class="card text-bg-secondary h-100">
                  <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">{{ $comic['title'] }}</h5>
                     <p class="card-text text-dark fw-bold">{{ $comic['series'] }}</p>
                     <p class="card-text text-dark fw-bold">{{ $comic['price'] }}</p>
                  </div>
                  <a href="{{ route('comicPage', ['comic' => $comic['title']]) }}"
                     class="link-light text-center fw-bold text-decoration-none text-uppercase">
                     <div class="card-footer bg-info">Check more</div>
                  </a>
               </div>
            </div>
         @endforeach
      </div>

   </div>
</div>

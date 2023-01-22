<div class="bg-dark px-5 py-3">
   <div class="container">
      <div class="row row-cols-6 g-3 p-2">
         @foreach ($comicsList as $comic)
            <div class="col">
               <a href="{{ route('comicPage', ['comic' => $comic['title']]) }}" class="text-decoration-none link-dark">
                  <div class="my-card">
                     <div class="card-body">
                        <img src="{{ $comic['thumb'] }}" class="img-fluid" alt="...">
                        <p class="card-label">{{ $comic['title'] }}</p>
                     </div>
                  </div>
               </a>
            </div>
         @endforeach
      </div>

      <div class="text-center">
         <a href="{{ route('comicsList') }}"
            class="btn btn-primary rounded-0 text-uppercase fw-bold px-5 text-align-center">
            Load more
         </a>
      </div>
   </div>

</div>

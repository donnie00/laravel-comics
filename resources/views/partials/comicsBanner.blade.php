<div class="bg-dark px-5 py-3">

   <div class="row row-cols-6 g-3 p-2">
      @foreach ($comicsList as $comic)
         <div class="col">
            <a href="#" class="text-decoration-none link-dark">
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

   <button class="btn btn-primary px-5 d-block m-auto">Load more</button>

</div>

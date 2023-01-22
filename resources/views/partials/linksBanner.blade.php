<div class="bg-primary">
   <div class="container">
      <div class="row row-cols-5">
         @foreach ($buyLinks as $link)
            <div class="col">
               <a href="" class="d-flex align-items-center link-light text-decoration-none py-4">
                  <img src="{{ Vite::asset("/resources/images/{$link['icon']}") }}" alt=""
                     class="img-fluid img-link px-2">
                  <span class="text-uppercase">
                     {{ $link['name'] }}
                  </span>
               </a>
            </div>
         @endforeach
      </div>
   </div>
</div>

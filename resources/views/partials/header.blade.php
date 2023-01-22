<div class="text-bg-primary">
   <div class="container text-end">
      <span class="mx-3">DC POWER&trade; VISA&reg;</span>
      <span class="mx-3">Additional DC sites &DownArrow;</span>
   </div>
</div>

<div class="container">
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
         <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ Vite::asset('/resources/images/dc-logo.png') }}" alt="">
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-uppercase">
               <li class="nav-item">
                  <a class="nav-link" href="#">characters</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link {{ Route::currentRouteName() === 'comicsList' ? 'active' : '' }}"
                     href="{{ route('comicsList') }}">comics</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">movies</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">tv</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">games</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">collectibles</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">fans</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">news</a>
               </li>
            </ul>
            <form class="input-group ms-3" role="search">
               <input class="form-control p-0 search-bar-border text-end" type="search" placeholder="Search"
                  aria-label="Search">
               <button class="btn search-bar-border px-2" type="submit">
                  <i class="fa-solid fa-magnifying-glass">Lente</i>
               </button>
            </form>
         </div>
      </div>
   </nav>
</div>

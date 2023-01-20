@extends('./layouts/app')

@section('content')

<div class="row row-cols-5">
      @foreach($comicsList as $comic)

      <div class="col mb-3">
               <a href="#" class="text-decoration-none link-dark">
                  <div class="card">
                     <div class="card-body p-0">
                        <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                        <small class="card-title">{{ $comic['title'] }}</small>
                     </div>
                  </div>
               </a>
      </div>
      @endforeach
</div>

@endsection
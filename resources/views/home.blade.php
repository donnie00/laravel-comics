@extends('./layouts/app')

@section('jumbo')
   @include('partials/jumbotron')
@endsection

@section('comics')
   @include('partials/comicsBanner')
@endsection

@section('linksBanner')
   @include('partials/linksBanner')
@endsection

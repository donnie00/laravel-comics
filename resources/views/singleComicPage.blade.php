@extends('./layouts/app')

@section('jumbo')
   @include('./partials/jumbotron')
@endsection

@section('content')
   @include('./partials/comicDetails')
@endsection

@section('linksBanner')
   @include('./partials/linksBanner')
@endsection

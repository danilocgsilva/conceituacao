@extends('base')

@section('content')
    @include('_partials.nav')

    <div class="container mx-auto px-4 py-6">
        @include('_partials.search-and-filter')
        @include('_partials.listing-users')
        @include('_partials.pagination')
    </div>
@endsection
@extends('base')

@section('content')
    @include('_partials.nav')
    
    @include('_partials.messages')
    
    <div class="px-4 py-6">
        @include('_partials.search-and-filter')
        @include('_partials.listing-users')
        @include('_partials.pagination')
        @include('_partials.user-delete-confirmation')
    </div>

@endsection

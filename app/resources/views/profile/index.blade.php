@extends('base')

@section('content')
    @include('_partials.nav')
    @include('_partials.messages')
    @include('profile._partials.index_data')
    @include('profile._partials.profile-delete-confirmation')
@endsection
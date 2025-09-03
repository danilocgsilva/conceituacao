@extends('base')

@section('content')

    @include('_partials.nav')

    @include('_partials.messages')

    <div class="px-4 py-6">
        @include('admin._partials.user-editing-form')
    </div>

@endsection
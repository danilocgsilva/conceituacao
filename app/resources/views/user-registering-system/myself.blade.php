@extends('base')

@section('content')

    @include('_partials.nav')

    @if(
        session()->has('success') 
        || session()->has('status') 
        || session()->has('error') 
        || $errors->any()
        )
        @include('_partials.messages')
    @endif

    @include('user-registering-system._partials.update-profile-information-form')

    @include('user-registering-system._partials.update-password-form')

    @include('user-registering-system._partials.delete-user-form')

@endsection
@extends('base')

@section('content')

    @include('_partials.nav')

    @include('_partials.messages')

    @include('user-registering-system._partials.update-profile-information-form')

    @include('user-registering-system._partials.update-password-form')

    @include('user-registering-system._partials.delete-user-form')

@endsection

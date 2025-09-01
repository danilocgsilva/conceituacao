@extends('base')

@section('content')

    @include('_partials.nav')

        <div class="container mx-auto px-4 py-6">
            @include('user-registering-system._partials.update-profile-information-form')

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('user-registering-system._partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('user-registering-system._partials.delete-user-form')
                </div>
            </div>
        </div>
@endsection



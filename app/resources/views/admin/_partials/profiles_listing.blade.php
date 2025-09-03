<ul>
    <div class="mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="bg-gradient-to-r from-blue-600 to-indigo-700 p-3 text-white">
            <p class="text-1xl font-bold flex items-center">
                Selecione os perfis de acesso
            </p>
        </div>
        <div class="p-4">
            <ul class="space-y-2" id="roleList">
                @foreach ($viewData->getProfiles() as $profile)
                    <li class="flex items-center p-1 rounded-lg hover:bg-blue-50 transition-all duration-200">
                        <input type="checkbox" id="profile-{{ $profile->id }}" value="{{ $profile->id }}" name="profiles_ids[]" class="h-5 w-5 text-blue-600 focus:ring-blue-500 rounded" @if ($viewData->getUser() && $viewData->getUser()->hasProfile($profile)) checked @endif>
                        <label for="admin" class="ml-3 text-gray-700 font-medium">{{ $profile->name }}</label>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</ul>

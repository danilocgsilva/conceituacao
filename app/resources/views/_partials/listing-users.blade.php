<div class="max-w-7xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
    @if ($viewData->getList()->count() > 0)

        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-gray-500">Nome</th>
                    <th class="px-6 py-3 text-left text-gray-500">Email</th>
                    <th class="px-6 py-3 text-left text-gray-500">Perfil</th>
                    <th class="px-6 py-3 text-left text-gray-500">Ações
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($viewData->getList() as $user)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $user->spreadProfiles() }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('user.edit', ['user' => $user->id]) }}"
                                class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                            <a href="#" class="text-red-600 hover:text-red-900"
                                onclick="event.preventDefault(); confirmUserDeletion({{ $user->id }})">Delete</a>
                            <form id="delete-user-form-{{ $user->id }}" action="{{ route('user.destroy', $user->id) }}"
                                method="POST" class="hidden">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="p-4 text-center text-gray-500">
            Oops! Ninguém foi achado...
        </div>
    @endif
</div>
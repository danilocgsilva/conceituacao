<div class="px-4 py-0 mt-6 ">
    <div class="max-w-7xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        <div class="flex">
            <div class="flex-1 overflow-auto">
                <div class="p-6">
                    <div class="bg-white rounded-lg listing-container p-4 mb-6 flex justify-between items-center">
                        <div class="flex space-x-2">
                            <button class="create-btn px-4 py-2 bg-blue-500 text-white rounded flex items-center">
                                <a href="{{ route('profile.create') }}">Novo perfil</a>
                            </button>
                        </div>
                    </div>

                    <div class="max-w-7xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-gray-500">Nome do perfil</th>
                                    <th class="px-6 py-3 text-left text-gray-500">Descrição</th>
                                    <th class="px-6 py-3 text-left text-gray-500">Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">

                                @foreach ($viewData->getList() as $perfil)

                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $perfil->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{  $perfil->description }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="{{ route('profile.edit', $perfil->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a>
                                            <a href="#" class="text-red-600 hover:text-red-900" onclick="event.preventDefault(); confirmUserDeletion('id-dinamico')>Delete</a>
                                            <form id=" delete-profile-form-id-dinamico" action="#" method="POST"
                                                class="hidden">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick="return confirm('Are you sure you want to delete this post?')">
                                                    Delete
                                                </button>
                                                </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
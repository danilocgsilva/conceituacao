<div id="confirm-profile-deletion" data-profile-id="" class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
    style="display: none;">
    <div class="fixed inset-0 bg-gray-500 opacity-75"
        onclick="document.getElementById('confirm-profile-deletion').style.display='none'"></div>

    <div class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform sm:w-full sm:max-w-2xl sm:mx-auto">
        <div method="post" action="{{ route('user.destroy', 3) }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                Tem certeza de que deseja excluir este perfil?
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                Esta ação não pode ser desfeita.
            </p>

            <div class="mt-6 flex justify-end space-x-3">
                <button type="button"
                    class="px-5 py-2.5 rounded-lg border border-gray-300 text-gray-700 font-medium hover:bg-gray-50 transition"
                    onclick="document.getElementById('confirm-profile-deletion').style.display='none'">
                    Cancelar
                </button>

                <button type="submit"
                    class="px-5 py-2.5 rounded-lg bg-red-600 text-white font-medium hover:bg-red-700 transition whitespace-nowrap"
                    onclick="deletionConfirmed()">
                    Excluir Perfil
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmProfileDeletion(profile_id) {
        const modal = document.getElementById('confirm-profile-deletion');
        modal.dataset.profileId = profile_id;
        modal.style.display = 'block';
    }
    function deletionConfirmed() {
        const modal = document.getElementById('confirm-profile-deletion');
        const profileId = modal.dataset.profileId;
        const form = document.getElementById('delete-profile-form-' + profileId);
        form.submit();
    }
</script>
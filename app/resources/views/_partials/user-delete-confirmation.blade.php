<div id="confirm-user-deletion" data-user-id="" class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50" style="display: none;">
    <div class="fixed inset-0 bg-gray-500 opacity-75"
        onclick="document.getElementById('confirm-user-deletion').style.display='none'"></div>

    <div class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform sm:w-full sm:max-w-2xl sm:mx-auto">
        <div method="post" action="{{ route('user.destroy', 3) }}" class="p-6">
            @csrf
            @method('delete')

            <h2 class="text-lg font-medium text-gray-900">
                Tem certeza de que deseja excluir este usuário?
            </h2>

            <p class="mt-1 text-sm text-gray-600">
                Esta ação não pode ser desfeita.
            </p>

            <div class="mt-6 flex justify-end space-x-3">
                <button type="button"
                    class="px-5 py-2.5 rounded-lg border border-gray-300 text-gray-700 font-medium hover:bg-gray-50 transition"
                    onclick="document.getElementById('confirm-user-deletion').style.display='none'">
                    Cancelar
                </button>

                <button type="submit"
                    class="px-5 py-2.5 rounded-lg bg-red-600 text-white font-medium hover:bg-red-700 transition whitespace-nowrap"
                    onclick="deletionConfirmed()">
                    Excluir Conta
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmUserDeletion(userId) {
        const modal = document.getElementById('confirm-user-deletion');
        modal.dataset.userId = userId;
        modal.style.display = 'block';
    }
    function deletionConfirmed() {
        const modal = document.getElementById('confirm-user-deletion');
        const userId = modal.dataset.userId;
        const form = document.getElementById('delete-user-form-' + userId);
        form.submit();
    }
</script>

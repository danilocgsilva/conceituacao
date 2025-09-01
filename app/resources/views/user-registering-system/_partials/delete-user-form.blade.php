<div class="px-4 py-6">
    <div class="max-w-7xl mx-auto p-4 sm:p-8 bg-white shadow-md sm:rounded-lg">
        <section class="space-y-6">
            <header>

                <h2 class="text-xl font-semibold text-gray-900">Excluir Conta</h2>

                <p class="mt-1 text-sm text-gray-600">
                    Uma vez que sua conta for excluída, todos os seus recursos e dados serão permanentemente excluídos. Antes de excluir sua conta, por favor baixe quaisquer dados ou informações que deseje manter.
                </p>
            </header>

            <button type="button"
                class="px-5 py-2.5 rounded-lg bg-red-600 text-white font-medium hover:bg-red-700 transition whitespace-nowrap"
                onclick="document.getElementById('confirm-user-deletion').style.display='block'">Excluir Conta</button>

            <div id="confirm-user-deletion" class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50"
                style="display: none;">
                <div class="fixed inset-0 bg-gray-500 opacity-75"
                    onclick="document.getElementById('confirm-user-deletion').style.display='none'"></div>

                <div
                    class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform sm:w-full sm:max-w-2xl sm:mx-auto">
                    <form method="post" action="/profile" class="p-6">
                        <input type="hidden" name="_token" value="">
                        <input type="hidden" name="_method" value="delete">

                        <h2 class="text-lg font-medium text-gray-900">
                            Tem certeza de que deseja excluir sua conta?
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            Uma vez que sua conta for excluída, todos os seus recursos e dados serão permanentemente excluídos. Por favor digite sua senha para confirmar que deseja excluir permanentemente sua conta.
                        </p>

                        <div class="mt-6">
                            <label for="password"
                                class="block font-medium text-sm text-gray-700 sr-only">Senha</label>

                            <input id="password" name="password" type="password"
                                class="mt-1 block w-3/4 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                placeholder="Senha">
                        </div>

                        <div class="mt-6 flex justify-end space-x-3">
                            <button type="button"
                                class="px-5 py-2.5 rounded-lg border border-gray-300 text-gray-700 font-medium hover:bg-gray-50 transition"
                                onclick="document.getElementById('confirm-user-deletion').style.display='none'">
                                Cancelar
                            </button>

                            <button type="submit"
                                class="px-5 py-2.5 rounded-lg bg-red-600 text-white font-medium hover:bg-red-700 transition whitespace-nowrap">
                                Excluir Conta
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
</div>
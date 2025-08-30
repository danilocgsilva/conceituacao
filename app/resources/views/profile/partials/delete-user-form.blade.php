<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Delete Account
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
        </p>
    </header>

    <button
        type="button"
        class="bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 transition duration-200"
        onclick="document.getElementById('confirm-user-deletion').style.display='block'"
    >Delete Account</button>

    <div id="confirm-user-deletion" class="fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50" style="display: none;">
        <div class="fixed inset-0 bg-gray-500 opacity-75" onclick="document.getElementById('confirm-user-deletion').style.display='none'"></div>
        
        <div class="mb-6 bg-white rounded-lg overflow-hidden shadow-xl transform sm:w-full sm:max-w-2xl sm:mx-auto">
            <form method="post" action="/profile" class="p-6">
                <input type="hidden" name="_token" value="">
                <input type="hidden" name="_method" value="delete">

                <h2 class="text-lg font-medium text-gray-900">
                    Are you sure you want to delete your account?
                </h2>

                <p class="mt-1 text-sm text-gray-600">
                    Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.
                </p>

                <div class="mt-6">
                    <label for="password" class="block font-medium text-sm text-gray-700 sr-only">Password</label>

                    <input
                        id="password"
                        name="password"
                        type="password"
                        class="mt-1 block w-3/4 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                        placeholder="Password"
                    >
                </div>

                <div class="mt-6 flex justify-end">
                    <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150" onclick="document.getElementById('confirm-user-deletion').style.display='none'">
                        Cancel
                    </button>

                    <button type="submit" class="ms-3 bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 transition duration-200">
                        Delete Account
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

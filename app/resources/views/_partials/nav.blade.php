<nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center h-16 mx-auto px-4 py-6">
            <div class="flex-shrink-0">
                <a href="#" class="text-xl font-bold text-gray-800">Cadastro de usuários</a>
            </div>

            @auth
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">

                    <a href="{{ route('user.create') }}">Criar usuário</a>
                    <a href="{{ route('users-registering.index') }}">Usuários</a>
                    <a href="{{ route('myself.edit') }}">Minhas informações</a>
                    <form method="POST" action="{{ route('logout') }}" class="">
                        @csrf

                        <a href="route('logout')" onclick="event.preventDefault();
                            this.closest('form').submit();">
                            Log Out
                        </a>
                    </form>
                </div>
            </div>
            @endauth
            
            <div class="md:hidden">
                <button type="button"
                    class="bg-gray-100 inline-flex items-center justify-center p-2 rounded-md text-gray-600 hover:text-gray-900 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-gray-400"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Abrir menu principal</span>
                    
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    @auth
    <div class="md:hidden hidden" id="mobile-menu">

        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">

            <a href="{{ route('user.create') }}"
                class="text-gray-600 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Criar usuário</a>

            <a href="{{ route('users-registering.index') }}"
                class="text-gray-600 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Usuários</a>

            <a href="{{ route('myself.edit') }}"
                class="text-gray-600 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">Minhas informações</a>
            <form method="POST" action="{{ route('logout') }}" class="text-gray-600 hover:text-gray-900 block px-3 py-2 rounded-md text-base font-medium">
                @csrf

                <a href="route('logout')" onclick="event.preventDefault();
                    this.closest('form').submit();">
                    Log Out
                </a>
            </form>
            
        </div>
    </div>
    @endauth
</nav>

<!-- JavaScript for mobile menu toggle -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuButton = document.querySelector('[aria-controls="mobile-menu"]');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburgerIcon = menuButton.querySelector('.block');
        const closeIcon = menuButton.querySelector('.hidden');

        menuButton.addEventListener('click', function () {
            const isExpanded = menuButton.getAttribute('aria-expanded') === 'true';

            mobileMenu.classList.toggle('hidden');

            hamburgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');

            menuButton.setAttribute('aria-expanded', !isExpanded);
        });
    });
</script>
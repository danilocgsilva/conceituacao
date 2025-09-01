@extends('base')

@section('content')

    @include('_partials.nav')

    <div class="container mx-auto px-4 py-6 flex items-center justify-center p-4">
        <div class="max-w-md w-full bg-white rounded-xl shadow-2xl overflow-hidden card-hover">
            <div class="py-6 px-8">
                <div class="text-center">
                    <div class="mx-auto w-24 h-24 rounded-full bg-blue-100 flex items-center justify-center mb-4">
                        <i class="fas fa-user-lock text-blue-600 text-4xl"></i>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-800 mb-2">Bem vindo!</h2>
                    <p class="text-gray-600 mb-8">Se logue para continuar as atividades</p>
                </div>

                <form>
                    <div class="mb-6">
                        <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Endereço de e-mail</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-envelope text-gray-400"></i>
                            </div>
                            <input type="email" id="email"
                                class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                placeholder="voce@provedor.com">
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Senha</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-lock text-gray-400"></i>
                            </div>
                            <input type="password" id="password"
                                class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent"
                                placeholder="••••••••">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button type="button" id="togglePassword"
                                    class="text-gray-400 hover:text-gray-600 focus:outline-none">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        
                    </div>


                    <button type="submit"
                        class="w-full bg-blue-600 text-white shadow-lg text-white py-3 px-4 rounded-lg font-medium hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 transition duration-300 ease-in-out transform hover:-translate-y-0.5">
                        
                        Login
                    </button>
                </form>


            </div>
            
        </div>
    </div>

@endsection
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Contracts\UserRepositoryInterface;

class CreateNonAdministratorUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userRepository = app(UserRepositoryInterface::class);
        $userRepository->create([
            'name' => 'Celso Gerente',
            'email' => 'celso.genrete@gerente.com.br',
            'password' => 'gerenciapassword'
        ]);
        $userRepository->create([
            'name' => 'Elaine das Vendas',
            'email' => 'elaine.vendas@empresa.com.br',
            'password' => 'vendaspassword'
        ]);
        $userRepository->create([
            'name' => 'Bruna Finanças',
            'email' => 'bruna.financas@empresa.com.br',
            'password' => 'financaspassword'
        ]);
        $userRepository->create([
            'name' => 'Lucas Visitante',
            'email' => 'lucas.visitante@empresa.com.br',
            'password' => 'visitantepassword'
        ]);
    }
}


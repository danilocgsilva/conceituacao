<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Contracts\{
    UserRepositoryInterface,
    ProfileRepositoryInterface
};

class CreateNonAdministratorUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userRepository = app(UserRepositoryInterface::class);
        $profileRepository = app(ProfileRepositoryInterface::class);

        $userRepository->create([
            'name' => 'Celso Gerente',
            'email' => 'celso.genrete@gerente.com.br',
            'password' => 'gerenciapassword'
        ])->addProfile(
            $profileRepository->findByName('Gerente')
        );

        $userRepository->create([
            'name' => 'Elaine das Vendas',
            'email' => 'elaine.vendas@empresa.com.br',
            'password' => 'vendaspassword'
        ])->addProfile(
            $profileRepository->findByName('Vendas')
        );

        $userRepository->create([
            'name' => 'Bruna Finanças',
            'email' => 'bruna.financas@empresa.com.br',
            'password' => 'financaspassword'
        ])->addProfile(
            $profileRepository->findByName('Financeiro')
        );
            
        $userRepository->create([
            'name' => 'Lucas Visitante',
            'email' => 'lucas.visitante@empresa.com.br',
            'password' => 'visitantepassword'
        ])->addProfile(
            $profileRepository->findByName('Visitante')
        );

        $userRepository->create([
            'name' => 'Mariana',
            'email' => 'mariana@empresa.com',
            'password' => 'marianapassword'
        ])
        ->addProfile($profileRepository->findByName('Financeiro'))
        ->addProfile($profileRepository->findByName('Vendas'));
    }
}


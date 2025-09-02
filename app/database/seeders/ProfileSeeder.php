<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Contracts\ProfileRepositoryInterface;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $repository = app(ProfileRepositoryInterface::class);
        $repository->create([
            'name' => 'Administrador de Sistema',
            'user_id' => 1,
            'description' => 'Usuário com permissões máximas para o sistema',
        ]);
        $repository->create([
            'name' => 'Gerente',
            'user_id' => 1,
            'description' => 'Perfil para usuários gerentes',
        ]);
        $repository->create([
            'name' => 'Vendas',
            'user_id' => 2,
            'description' => 'Perfil para usuário de vendas',
        ]);
        $repository->create(data: [
            'name' => 'Financeiro',
            'user_id' => 1,
            'description' => 'Perfil para usuários financeiros',
        ]);
        $repository->create([
            'name' => 'Visitante',
            'user_id' => 1,
            'description' => 'Perfil para usuários que não podem alterar informações',
        ]);
    }
}

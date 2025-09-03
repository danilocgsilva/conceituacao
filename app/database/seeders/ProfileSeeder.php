<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Contracts\ProfileRepositoryInterface;
use DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $repository = app(ProfileRepositoryInterface::class);

        $repository->createOrUpdate([
            'name' => 'Administrador de Sistema',
            'description' => 'Usuário com permissões máximas para o sistema',
        ]);
        $repository->createOrUpdate([
            'name' => 'Gerente',
            'description' => 'Perfil para usuários gerentes',
        ]);
        $repository->createOrUpdate([
            'name' => 'Vendas',
            'description' => 'Perfil para usuário de vendas',
        ]);
        $repository->createOrUpdate(data: [
            'name' => 'Financeiro',
            'description' => 'Perfil para usuários financeiros',
        ]);
        $repository->createOrUpdate([
            'name' => 'Visitante',
            'description' => 'Perfil para usuários que não podem alterar informações',
        ]);
    }
}

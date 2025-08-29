<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Contracts\UserRepositoryInterface;

class CreateAdministratorUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userRepository = app(UserRepositoryInterface::class);
        $userRepository->create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('strongpassword')
        ]);
    }
}

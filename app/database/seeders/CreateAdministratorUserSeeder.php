<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Contracts\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make('strongpassword')
        ]);
    }
}

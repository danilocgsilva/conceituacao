<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Contracts\{
    UserRepositoryInterface,
    ProfileRepositoryInterface
};
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\UniqueConstraintViolationException;

class CreateAdministratorUserSeeder extends Seeder
{
    public function run(): void
    {
        $userRepository = app(UserRepositoryInterface::class);
        $profileRepository = app(ProfileRepositoryInterface::class);

        $password = "strongpassword";
        try {
            $userRepository->create([
                'name' => 'Administrator',
                'email' => 'admin@admin.com',
                'password' => Hash::make($password)
            ])->profiles()->save(
                $profileRepository->findByName('Administrador de Sistema')
            );
        } catch (UniqueConstraintViolationException $e) {
            print("The user probably already exists.");
        }
    }
}

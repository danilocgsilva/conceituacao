<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\Traits\GenerateSimplePasswordTrait;

class CreateTestingUserCommand extends Command
{
    use GenerateSimplePasswordTrait;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-testing-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a testing user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $nakedPassword = $this->generateSimplePassword();

        $user = User::factory()->create([
            'password' => Hash::make($nakedPassword)
        ]);
        
        $this->info("Testing user created: {$user->email}, password: {$nakedPassword}.");
    }
}

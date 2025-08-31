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
    protected $signature = 'app:create-testing-user {--count=1 : Number of users to create}';

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
        $count = $this->option('count');
        
        for ($i = 0; $i < $count; $i++) {
            $nakedPassword = $this->generateSimplePassword();
            
            $user = User::factory()->create([
                'password' => Hash::make($nakedPassword)
            ]);
            
            $this->info("Testing user created: {$user->email}, password: {$nakedPassword}.");
        }
        
        $this->info("Created {$count} testing user(s).");
    }
}

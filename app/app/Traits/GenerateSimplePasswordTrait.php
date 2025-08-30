<?php

declare(strict_types=1);

namespace App\Traits;

trait GenerateSimplePasswordTrait
{
    public function generateSimplePassword(): string
    {
        return fake()->userName();
    }
}

<?php

declare(strict_types=1);

namespace App\Contracts;

interface ViewModelInterface
{
    public function getTitle(): string;

    public function getBodyClasses(): string;
}

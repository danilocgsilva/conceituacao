<?php

declare(strict_types=1);

namespace App\ViewModel;

interface ViewModelInterface
{
    public function getTitle(): string;

    public function getBodyClasses(): string;
}

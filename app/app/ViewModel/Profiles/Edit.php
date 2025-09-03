<?php

declare(strict_types=1);

namespace App\ViewModel\Profiles;

use App\Profile;

class Edit
{
    public const TITLE = "Alterando perfil";

    public const BODY_CLASSES = "bg-gray-100 min-h-screen";

    private Profile $profile;

    public function __construct(array $data)
    {
        $this->profile = $data['profile'];
    }

    public function getTitle(): string
    {
        return self::TITLE;
    }

    public function getBodyClasses(): string
    {
        return self::BODY_CLASSES;
    }

    public function getProfile(): Profile
    {
        return $this->profile;
    }
}

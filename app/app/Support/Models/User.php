<?php

namespace App\Support\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Profile;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function profiles()
    {
        return $this->belongsToMany(Profile::class);
    }

    public function spreadProfiles()
    {
        return $this->profiles->pluck('name')->implode(', ');
    }

    public function addProfile(Profile $profile)
    {
        $this->profiles()->save($profile);
        return $this;
    }

    public function hasProfile(Profile $profile)
    {
        return $this->profiles->contains($profile);
    }

    public function isAdmin(): bool
    {
        $adminProfile = Profile::find(1);
        return $adminProfile ? (bool) $this->hasProfile($adminProfile) : false;
    }
}

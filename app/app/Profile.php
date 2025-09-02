<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\Models\User;

class Profile extends Model
{
    protected $fillable = ['name', 'description'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}

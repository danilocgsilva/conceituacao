<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\Models\User;

class Profile extends Model
{
    protected $fillable = ['name', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

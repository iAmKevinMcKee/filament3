<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;

    public function talks(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Talk::class);
    }

    public function presentations(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Presentation::class);
    }
}

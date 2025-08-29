<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    protected $fillable = ['name', 'base_price'];

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }
}

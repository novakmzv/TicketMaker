<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClientType extends Model
{
    protected $fillable = ['name', 'price_multiplier'];

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }
}

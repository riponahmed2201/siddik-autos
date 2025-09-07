<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Destination extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'zone',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function pricing(): HasMany
    {
        return $this->hasMany(Pricing::class);
    }
}
